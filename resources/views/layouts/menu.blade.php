<li>
    <a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i1.png') }}" alt=""></span> Beranda</a>
</li>
<li>
    <a href="{{ route('saksi.edit') }}" class="{{ Request::routeIs('saksi.edit') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Saksi</a>
</li>
<li>
    <a href="{{ route('tps.search') }}" class="{{ Request::routeIs('tps.search') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i3.png') }}" alt=""></span> TPS</a>
</li>
<li>
    <a href="{{ route('pilegs.list') }}" class="{{ Request::routeIs('pilegs.list') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pileg</a>
</li>
<li>
    <a href="{{ route('pilpres.list') }}" class="{{ Request::routeIs('pilpres.list') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pilpres</a>
</li>

@if(Auth::user()->is_admin)
    <li class="divider"></li>
    <li>
        <a href="{!! route('users.index') !!}" class="{{ Request::is('users*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Users</a>
    </li>
    <li>
        <a href="{!! route('tps.index') !!}" class="{{ Request::is('tps*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Tps</a>
    </li>
    <li>
        <a href="{!! route('pilpres.index') !!}" class="{{ Request::is('pilpres*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pilpres</a>
    </li>
    <li>
        <a href="{!! route('pilegs.index') !!}" class="{{ Request::is('pilegs*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Pileg</a>
    </li>
    <li>
        <a href="{!! route('votes.index') !!}" class="{{ Request::is('votes*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Votes</a>
    </li>
    <li>
        <a href="{!! route('dapils.index') !!}" class="{{ Request::is('dapils*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Dapil</a>
    </li>
    <li>
        <a href="{!! route('wilayahs.index') !!}" class="{{ Request::is('wilayahs*') ? 'active' : '' }}"><span class="icon"><img src="{{ asset('images/i2.png') }}" alt=""></span> Wilayah</a>
    </li>
@endif