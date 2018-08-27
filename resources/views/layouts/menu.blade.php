<li class="{{ Request::is('/') ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}"><i class="fa fa-grip-horizontal"></i><span>Dashboard</span></a>
</li>

@if(Auth::user()->is_admin)
    <li class="header">MASTER DATA</li>

    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
    </li>

    <li class="{{ Request::is('pilpres*') ? 'active' : '' }}">
        <a href="{!! route('pilpres.index') !!}"><i class="fa fa-edit"></i><span>Pilpres</span></a>
    </li>

    <li class="{{ Request::is('pilegs*') ? 'active' : '' }}">
        <a href="{!! route('pilegs.index') !!}"><i class="fa fa-edit"></i><span>Pileg</span></a>
    </li>
@endif