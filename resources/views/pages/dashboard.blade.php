<div class="vmap-wrap">
    <div id="vmap"></div>
    <div class="overlay-map">
        @component('components.overlay_map')
        @endcomponent
    </div>
</div>

<div class="search-bar">
    <h3>Hasil polling <span>Real Count</span></h3>
    {!! Form::open(['method' => 'GET','route' => 'pilegs.list', 'class'=>'form searchform form-inline']) !!}
    {!! Form::select('tingkat_wilayah', $dropdown_type, null, ['id' => 'tingkat-select', 'class'=>'select2 form-control mr-sm-1', 'placeholder'=>'Pilih Tingkat Dapil']) !!}
    {!! Form::select('provinsi', [], null, ['id' => 'prov-select', 'class'=>'select2 invisible form-control mr-sm-1', 'placeholder'=>'Pilih Propinsi', 'data-url' => '/ajax_data/get_provinsi']) !!}
    {!! Form::select('kabko', [], null, ['id' => 'kab-select', 'class'=>'select2 invisible form-control mr-sm-1', 'placeholder'=>'Pilih Kabupaten/Kota', 'data-url' => '/ajax_data/get_kabko']) !!}
    {!! Form::close() !!}
    <div class="clearfix"></div>
</div>

<div class="region-wrap">
    <div id="result_dapil"></div>
</div>

@section('scripts')
    <style type="text/css">
        .dapil_box:nth-child(n + 4) {
            padding-top: 20px;
        }
    </style>
    <script type="text/javascript">
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

      function getResult(dataId, dataTingkat = 0) {
        var resultDapil = $('#result_dapil');

        $.ajax({
          url: 'ajax_data/get_polling',
          type: 'GET',
          dataType: 'json',
          data: {id: dataId, tingkat: dataTingkat},
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
      }

      $(function () {
        $('.select2').select2({
          minimumResultsForSearch: 5,
          containerCssClass: 'mr-sm-1'
        });

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
        }).trigger('change');

        $('#prov-select').on('change', function () {
          var tkVal = $('#tingkat-select').val(),
            provinsi = $('#prov-select').val();

          switch (tkVal) {
            case '0' :
            case '1' :
              getResult(provinsi, tkVal);
              break;
            case '2' :
              getAjaxDropdown($('#kab-select'), {'provinsi': provinsi});
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