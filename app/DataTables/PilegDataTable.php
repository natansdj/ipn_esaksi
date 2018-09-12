<?php

namespace App\DataTables;

use App\Models\Pileg;
use Illuminate\Database\Eloquent\Collection;
use Yajra\DataTables\CollectionDataTable;
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
		$collection = $query->get();
		$dataTable  = new CollectionDataTable($collection);
		$dataTable->editColumn('dapil_id', function ($model) {
			$dapil  = '-';
			$dapils = $model->dapils;
			if ( ! is_null($dapils) && $dapils && $dapils instanceof Collection) {
				$dapil = $dapils->pluck('nama')->implode(', ');
			}

			return $dapil;
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
			'dapil_id' => [
				'data'  => 'dapil_id',
				'title' => 'Dapil'
			],
			'name',
			'dob',
			'pob',
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
