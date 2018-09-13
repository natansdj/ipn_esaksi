@php
    $attr_kabko_class = $attr_prov_class = 'select2 form-control mr-sm-1'; 
    if(!isset($dd_provinsi) || empty($dd_provinsi)){
      $attr_prov_class .= ' invisible';
    } 
    if(!isset($dd_kabko) || empty($dd_kabko)){
      $attr_kabko_class .= ' invisible';
    }
@endphp

<div class="vmap-wrap">
    <div id="vmap"></div>
    <div class="overlay-map">
        @component('components.overlay_map')
        @endcomponent
    </div>
</div>

<div class="search-bar">
    <h3>Hasil polling <span>Real Count</span></h3>
    {!! Form::open(['method' => 'GET','route' => 'dashboard', 'class'=>'form dapiltingkatform form-inline']) !!}
    @if(!isset($dd_provinsi) || empty($dd_provinsi))
        {!! Form::hidden('dd_provinsi', app('request')->input('prov'), ['disabled'=>'disabled']) !!}
    @endif
    @if(!isset($dd_kabko) || empty($dd_kabko))
        {!! Form::hidden('dd_kabko', app('request')->input('kabko'), ['disabled'=>'disabled']) !!}
    @endif
    {!! Form::select('tk', $dd_type, null, ['id' => 'tingkat-select', 'class'=>'select2 form-control mr-sm-1', 'placeholder'=>'Pilih Tingkat Dapil']) !!}
    {!! Form::select('prov', (isset($dd_provinsi))? $dd_provinsi : [], null, ['id' => 'prov-select', 'class'=> $attr_prov_class, 'placeholder'=>'Pilih Propinsi', 'data-url' => '/ajax_data/get_provinsi']) !!}
    {!! Form::select('kabko', (isset($dd_kabko))? $dd_kabko : [], null, ['id' => 'kab-select', 'class'=> $attr_kabko_class, 'placeholder'=>'Pilih Kabupaten/Kota', 'data-url' => '/ajax_data/get_kabko']) !!}
    {!! Form::close() !!}
    <div class="clearfix"></div>
</div>

<div class="region-wrap">
    <div id="result_dapil">
        @include('dapils.dash_index')
    </div>
</div>

@section('scripts')
    <style type="text/css">
        .dapil_box:nth-child(n + 4) {
            padding-top: 20px;
        }

        .dapiltingkatform {
            margin: 4px 0 0;
        }

        .dapiltingkatform .select2-container {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            max-width: 200px;
            margin-bottom: 0;
        }
    </style>
    <script type="text/javascript">
      var dapilForm = $('form.dapiltingkatform');

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
        onRegionClick: function (element, code, region) {
          // var message = 'You clicked "'
          //     + region
          //     + '" which has the code: '
          //     + code.toUpperCase();
          $('.region-name').text(region);
        }
      });

      function getAjaxDropdown(elem, data = {}) {
        elem.children('option:not(:first)').remove().trigger('change');

        $.ajax({
          url: elem.data('url'),
          type: 'GET',
          dataType: 'json',
          data: data,
          success: function (data) {
            $.each(data, function (key, value) {
              elem.append($("<option></option>").attr('value', value.id).text(value.nama_wilayah));
            });
          },
          error: function (xhr, textStatus, errorThrown) {
            alert('ERROR !');
            console.error(errorThrown);
          }
        });
      }

      function getResult(dataId, dataTingkat = 0, isAjax = false) {
        var resultDapil = $('#result_dapil');

        if (isAjax) {
          $.ajax({
            url: 'ajax_data/get_p4pxolling',
            type: 'GET',
            dataType: 'json',
            data: {id: dataId, tk: dataTingkat},
            success: function (data) {
              if (typeof data.html !== 'undefined') {
                resultDapil.html(data.html);
              }
            },
            error: function (xhr, textStatus, errorThrown) {
              alert('ERROR !');
              console.error(errorThrown);
            }
          });
        } else {
          dapilForm.submit();
        }
      }

      //On ready
      $(function () {
        $('.select2').select2({
          minimumResultsForSearch: 5,
          containerCssClass: 'mr-sm-1'
        });

        if (dapilForm.find('input[name="dd_provinsi"]').length) {
          $('#prov-select').next(".select2-container").hide();
        }

        if (dapilForm.find('input[name="dd_kabko"]').length) {
          $('#kab-select').next(".select2-container").hide();
        }

        $('#tingkat-select').on('change', function () {
          var tkVal = $(this).val(),
            provSelect = $('#prov-select'),
            kabSelect = $('#kab-select');
          //reset
          provSelect.next(".select2-container").hide();
          kabSelect.next(".select2-container").hide();
          //switch select
          switch (tkVal) {
            case '0' :
              provSelect.next(".select2-container").show();
              getAjaxDropdown(provSelect);
              break;
            case '1' :
              provSelect.next(".select2-container").show();
              getAjaxDropdown(provSelect);
              break;
            case '2' :
              provSelect.next(".select2-container").show();
              kabSelect.next(".select2-container").show();
              getAjaxDropdown(provSelect);
              break;
            default:
              provSelect.children('option:not(:first)').remove().trigger('change');
              kabSelect.children('option:not(:first)').remove().trigger('change');
              break;
          }
        });

        $('#prov-select').on('change', function () {
          var tkVal = $('#tingkat-select').val(),
            provinsi = $('#prov-select').val();

          switch (tkVal) {
            case '0' :
            case '1' :
              getResult(provinsi, tkVal);
              break;
            case '2' :
              getAjaxDropdown($('#kab-select'), {'prov': provinsi});
              break;
            default:
              break;
          }
        });

        $('#kab-select').on('change', function () {
          var tkVal = $('#tingkat-select').val(),
            provinsi = $('#prov-select').val();

          switch (tkVal) {
            case '2' :
              getResult(provinsi, tkVal);
              break;
            case '0' :
            case '1' :
            default:
              break;
          }
        });
      });
    </script>
@endsection