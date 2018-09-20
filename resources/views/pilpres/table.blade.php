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
          var tableId = 'wilayah_detail-' + row.data().id;

          if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
          } else {
            // Open this row
            row.child(window.dtTemplate.dtPilpresDetailTmp(row.data()), 'child').show();
            tr.addClass('shown');
            tr.next().find('td').addClass('no-padding bg-gray');
          }
        });
      });
    </script>
@endsection