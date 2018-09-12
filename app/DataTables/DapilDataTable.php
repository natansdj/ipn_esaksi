<?php

namespace App\DataTables;

use App\Models\Dapil;
use Yajra\DataTables\CollectionDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DapilDataTable extends DataTable
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
		
		return $dataTable->addColumn('action', 'dapils.datatables_actions');
	}

	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\Models\Dapil $model
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query(Dapil $model)
	{
		return $model->newQuery()->with(['rel_parent_wilayah']);
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
			'nama',
			'tingkat' => [
				'data'  => 'tingkat',
				'title' => 'Tingkat Wilayah'
			],
			'id_wilayah' => [
				'data'  => 'rel_parent_wilayah.nama_wilayah',
				'title' => 'Wilayah'
			],
			new Column([
				'name'       => 'total_alokasi_kursi', 'data' => 'total_alokasi_kursi', 'title' => 'Alokasi Kursi',
				'searchable' => false
			]),
			'no_dapil'
		];
	}

	/**
	 * Get filename for export.
	 *
	 * @return string
	 */
	protected function filename()
	{
		return 'dapilsdatatable_' . time();
	}
}
