<?php

namespace App\DataTables;

use App\Models\Pilpres;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PilpresDataTable extends DataTable
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

		$dataTable->addColumn('action', 'pilpres.datatables_actions');
		$dataTable->addColumn('details_url', '');

		return $dataTable;
	}

	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\Models\Pilpres $model
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query(Pilpres $model)
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
				'name'           => 'details-control', 'data' => null, 'title' => '',
				'className'      => 'details-control',
				'defaultContent' => '',
				'orderable'      => false,
				'searchable'     => false,
			]),
			'capres_name'   => ['data' => 'capres_name', 'title' => 'Nama Capres'],
			'capres_dob'    => ['data' => 'capres_dob', 'title' => 'Tgl Lahir'],
			'capres_pob'    => ['data' => 'capres_pob', 'title' => 'Tempat Lahir'],
			'cawapres_name' => ['data' => 'cawapres_name', 'title' => 'Nama Cawapres'],
			'cawapres_dob'  => ['data' => 'cawapres_dob', 'title' => 'Tgl Lahir'],
			'cawapres_pob'  => ['data' => 'cawapres_pob', 'title' => 'Tempat Lahir'],
			'capres_partai' => ['data' => 'capres_partai', 'title' => 'Partai Pengusung', 'visible' => false]
		];
	}

	/**
	 * Get filename for export.
	 *
	 * @return string
	 */
	protected function filename()
	{
		return 'pilpresdatatable_' . time();
	}
}
