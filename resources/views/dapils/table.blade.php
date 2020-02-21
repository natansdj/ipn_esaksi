@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%']) !!}

@section('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}

    <script type="text/javascript">
      $(function () {
        // Add event listener for opening and closing details
        $('#dataTableBuilder tbody').on('click', 'td.details-control', function () {
          var tr = $(this).closest('tr');

          if (!window.LaravelDataTables) {
            return false;
          }

          var row = window.LaravelDataTables["dataTableBuilder"].row(tr);
          var tableId = 'dapil_detail-' + row.data().id;

          if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
          } else {
            // Open this row
            row.child(window.dtTemplate.dtDapilDetailTmp(row.data())).show();
            initTbl_DapilDetail(tableId, row.data());
            tr.addClass('shown');
            tr.next().find('td').addClass('no-padding bg-gray');
          }
        });
      });

      function initTbl_DapilDetail(tableId, data) {
        $('#' + tableId).DataTable({
          processing: true,
          serverSide: true,
          searching: false,
          lengthChange: false,
          pageLength: 5,
          ajax: data.details_url,
          columns: [
            {data: 'id', name: 'id', visible: false},
            {data: 'kode_wilayah', name: 'kode_wilayah'},
            {data: 'nama_wilayah', name: 'nama_wilayah'},
            {data: 'tingkat_wilayah', name: 'tingkat_wilayah', orderable: false}
          ]
        })
      }
    </script>
@endsection