{{--
    <div class="col-md-4 dapil_box">
      @component('components.dapil_box')
      @endcomponent
    </div>
    <div class="col-md-4 dapil_box">
      @component('components.dapil_box', ['class' => 'yellow'])
      @endcomponent
    </div>
    <div class="col-md-4 dapil_box">
      @component('components.dapil_box', ['class' => 'disabled'])
      @endcomponent
    </div>
--}}
<div class="row">
    @foreach($collection as $key => $item)
        <div class="col-md-4 dapil_box">
            @component('components.dapil_box', ['data' => $item, 'master' => $master])
            @endcomponent
        </div>
    @endforeach
</div>

@if($collection && method_exists($collection, 'links'))
    <div class="row mt-4">
        <div class="col-md-12">
            {{ $collection->links() }}
        </div>
    </div>
@endif