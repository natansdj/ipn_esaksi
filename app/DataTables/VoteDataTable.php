<?php

namespace App\DataTables;

use App\Models\Vote;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class VoteDataTable extends DataTable
{
	/**
	 * Build DataTable class.
	 *
	 * @param mixed $query Results from query() method.
	 *
	 * @return \Yajra\DataTables\DataTableAbstract
	 */
	public function dataTable($query)
	{
		$dataTable = new EloquentDataTable($query);

		$dataTable->editColumn('tps_id', function ($model) {
			/** @var \App\Models\Vote $model */
			$data     = '-';
			$relation = $model->tps;
			if ( ! is_null($relation) && $relation) {
				$data = $relation->name;
				if (isset($relation->dapil->nama)) {
					$data .= '/' . $relation->dapil->nama;
				}
			}

			return $data;
		});

		$dataTable->editColumn('user_id', function ($model) {
			/** @var \App\Models\Vote $model */
			$data     = '-';
			$relation = $model->user;
			if ( ! is_null($relation) && $relation) {
				$data = $relation->id . ' - ' . $relation->name;
			}

			return $data;
		});

		$dataTable->editColumn('voteable_id', function ($model) {
			/** @var \App\Models\Vote $model */
			$data = '-';
			/** @var \App\Models\Pileg|\App\Models\Pilpres $relation */
			$relation = $model->voteable;
			if ( ! is_null($relation) && $relation) {
				$data = $relation->id . ' - ' . $relation->fullname;
			}

			return $data;
		});

		return $dataTable->addColumn('action', 'votes.datatables_actions');
	}

	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\Models\Vote $model
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query(Vote $model)
	{
		return $model->newQuery();
	}

	/**
	 * Optional method if you want to use html builder.
	 *
	 * @return \Yajra\DataTables\Html\Builder
	 */
	public function html()
	{
		return $this->builder()
		            ->columns($this->getColumns())
		            ->minifiedAjax()
		            ->addAction(['printable' => false, 'width' => '120px'])
		            ->parameters([
			            'language' => ['url' => asset('js/dataTables.indonesian.json')],
			            'dom'      => 'Bflrtip',
			            'order'    => [[0, 'desc']],
			            'buttons'  => [
				            ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
				            ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
				            ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
				            ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
				            ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
			            ],
		            ]);
	}

	/**
	 * Get columns.
	 *
	 * @return array
	 */
	protected function getColumns()
	{
		return [
			new Column([
				'name'       => 'id', 'data' => 'id', 'title' => 'No.',
				'searchable' => false,
				'visible'    => false
			]),
			'tps_id'      => [
				'data'  => 'tps_id',
				'title' => 'TPS/Dapil'
			],
			'user_id'     => [
				'data'  => 'user_id',
				'title' => 'Saksi'
			],
			'vote_date',
			'type'        => [
				'data'  => 'type',
				'title' => 'Tingkat'
			],
			'voteable_id' => [
				'data'  => 'voteable_id',
				'title' => 'Calon'
			],
			'count'       => [
				'data'  => 'count',
				'title' => 'Jumlah Vote'
			],
		];
	}

	/**
	 * Get filename for export.
	 *
	 * @return string
	 */
	protected function filename()
	{
		return 'votesdatatable_' . time();
	}
}
