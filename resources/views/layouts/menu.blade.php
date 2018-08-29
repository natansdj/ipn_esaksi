<li>
    <a href="{{ route('dashboard') }}" class="{{ Request::is('/') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i1.png') }}" alt=""></span> Beranda</a>
</li>
<li>
    <a href="{{ route('saksi.edit') }}" class="{{ Request::is('/saksi*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Saksi</a>
</li>
<li>
    <a href="{{ route('tps.search') }}" class="{{ Request::is('/tps_search') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i3.png') }}" alt=""></span> TPS</a>
</li>
<li>
    <a href="#" class="{{ Request::is('/pileg*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pileg</a>
</li>
<li>
    <a href="#" class="{{ Request::is('/pilpres*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pilpres</a>
</li>

@if(Auth::user()->is_admin)
    <li class="divider"></li>
    <li>
        <a href="{!! route('users.index') !!}" class="{{ Request::is('users*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Users</a>
    </li>
    <li class="{{ Request::is('tps*') ? 'active' : '' }}">
        <a href="{!! route('tps.index') !!}"><i class="fa fa-edit"></i><span>Tps</span></a>
    </li>
    <li>
        <a href="{!! route('pilpres.index') !!}" class="{{ Request::is('pilpres*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pilpres</a>
    </li>
    <li>
        <a href="{!! route('pilegs.index') !!}" class="{{ Request::is('pilegs*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pileg</a>
    </li>
@endif