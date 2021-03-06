<?php

namespace App\DataTables;

use App\Models\Pileg;
use Illuminate\Database\Eloquent\Collection;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PilegDataTable extends DataTable
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
		$dataTable->editColumn('dapil_id', function ($model) {
			/** @var \App\Models\Pileg $model */
			$dapil  = '-';
			$dapils = $model->dapils;
			if ( ! is_null($dapils) && $dapils && $dapils instanceof Collection) {
				$dapil = $dapils->pluck('nama')->implode(', ');
			}

			return $dapil;
		});
		$dataTable->editColumn('type', function ($model) {
			/** @var \App\Models\Pileg $model */
			return $model->getAttributeValue('tingkat');
		});
		$dataTable->editColumn('name', function ($model) {
			/** @var \App\Models\Pileg $model */
			return $model->getAttributeValue('fullname');
		});

		return $dataTable->addColumn('action', 'pilegs.datatables_actions');
	}

	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\Models\Pileg $model
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query(Pileg $model)
	{
		return $model->newQuery()->with(['province', 'dapils']);
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
				'name'       => 'id', 'data' => 'id', 'title' => 'ID',
				'searchable' => false,
			]),
			'name',
			'dapil_id' => [
				'data'  => 'dapil_id',
				'title' => 'Dapil'
			],
			'type'     => [
				'data'  => 'type',
				'title' => 'Tingkat Dapil'
			],
			'pob'      => [
				'data'  => 'pob',
				'title' => 'Tempat Lahir'
			],
			'partai'
		];
	}

	/**
	 * Get filename for export.
	 *
	 * @return string
	 */
	protected function filename()
	{
		return 'pilegsdatatable_' . time();
	}
}
