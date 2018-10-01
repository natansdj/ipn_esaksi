<!-- Bootstrap 4 -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>

<script src="{{ asset('js/custom_datatables.js') }}"></script>

<script type="text/javascript">
  $.extend(true, $.fn.dataTable.defaults, {
    "language": {
      'url': '{{ asset('js/dataTables.indonesian.json') }}'
    },
  });
</script>