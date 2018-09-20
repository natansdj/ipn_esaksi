<?php

namespace App\DataTables;

use App\Models\Wilayah;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class WilayahDataTable extends DataTable
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

		$dataTable->addColumn('action', 'wilayahs.datatables_actions');
		$dataTable->addColumn('details_url', function ($wilayah) {
			return url()->route('wilayah_dapil_detail', ['id' => $wilayah->id]);
		});

		return $dataTable;
	}

	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\Models\Wilayah $model
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query(Wilayah $model)
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
			new Column([
				'name'       => 'id', 'data' => 'id', 'title' => 'ID',
				'searchable' => false, 'visible' => true
			]),
			'nama_wilayah',
			'tingkat_wilayah' => ['data' => 'tingkat_wilayah', 'title' => 'Tingkat Wilayah'],
		];
	}

	/**
	 * Get filename for export.
	 *
	 * @return string
	 */
	protected function filename()
	{
		return 'wilayahsdatatable_' . time();
	}
}
