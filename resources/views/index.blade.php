@extends('layouts.app')

@section('content')
    @include('pages.dashboard')
@endsection

@section('scripts')
    <script>
      jQuery('#vmap').vectorMap({
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
        onRegionClick: function (element, code, region) {
          // var message = 'You clicked "'
          //     + region
          //     + '" which has the code: '
          //     + code.toUpperCase();
          $('.region-name').text(region);
        }
      });
    </script>
@endsection