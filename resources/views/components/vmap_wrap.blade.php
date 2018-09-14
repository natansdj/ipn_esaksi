@push('css')
    <link rel="stylesheet" href="{{ asset('css/jqvmap.min.css') }}" media="screen">

    <!-- Custom -->
    <link rel="stylesheet" href="{{ asset('css/custom.vmap.css') }}" media="screen">
@endpush

<div class="vmap-wrap">
    <div id="vmap"></div>
</div>

@push('scripts')
    <!--vmap scripts-->
    <script type="text/javascript" src="{{ asset('js/jquery.vmap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.vmap.indonesia.js') }}"></script>

    <script type="text/javascript">
      //Init vectorMap
      var xhrOnLabelShow;
      var xhrOnRegionClick;
      $('#vmap').vectorMap({
        map: 'indonesia_id',
        backgroundColor: '#fff',
        borderColor: '#fff',
        borderOpacity: 0.25,
        borderWidth: 1,
        color: '#8a8a8a',
        enableZoom: false,
        hoverColor: '#00a4ee',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#00a4ee',
        selectedRegions: null,
        showTooltip: true,
        onRegionSelect: function (ev, code, region) {
          xhrOnRegionClick = $.ajax({
            url: 'ajax_data/get_map_data',
            type: 'GET',
            dataType: 'json',
            data: {path: code, type: 'detail'},
            success: function (data) {
              if (typeof data.html !== 'undefined' && data.html !== '') {
                $('.vmap-wrap').append(data.html);
              }
            }
          });
        },
        onRegionDeselect: function (ev, code, region) {
          if (xhrOnRegionClick && xhrOnRegionClick.promise) {
            xhrOnRegionClick.abort();
          }
          var region_dt = $('.vmap-wrap').find('.overlay-map[data-code="' + code + '"]');
          if (region_dt.length) {
            region_dt.remove();
          }
        },
        onRegionClick: function (ev, code, region) {
          var region_dt = $('.vmap-wrap').find('.overlay-map');
          if (region_dt.length) {
            region_dt.remove();
          }
        },
        onLabelShow: function (ev, label, code) {
          if (xhrOnLabelShow && xhrOnLabelShow.promise) {
            xhrOnLabelShow.abort();
          }

          xhrOnLabelShow = $.ajax({
            url: 'ajax_data/get_map_data',
            type: 'GET',
            dataType: 'json',
            data: {path: code},
            success: function (data) {
              if (typeof data.html !== 'undefined' && data.html !== '') {
                label.append(' ' + data.html);
              }
            }
          });
        }
      });

      $('.vmap-wrap').on('click', '.overlay-close', function () {
        var overlayMap = $(this).parents('.overlay-map');
        $('#vmap').vectorMap('deselect', overlayMap.attr('data-code'));
        overlayMap.remove();
      });
    </script>
@endpush