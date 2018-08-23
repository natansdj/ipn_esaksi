<li class="{{ Request::is('pilpres*') ? 'active' : '' }}">
    <a href="{!! route('pilpres.index') !!}"><i class="fa fa-edit"></i><span>Pilpres</span></a>
</li>

<li class="{{ Request::is('pilegs*') ? 'active' : '' }}">
    <a href="{!! route('pilegs.index') !!}"><i class="fa fa-edit"></i><span>Pilegs</span></a>
</li>

