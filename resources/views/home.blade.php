{{-- @if (auth()->user()->is_admin == 1)
       
        @include('admin/index')

         
    @else

        @include('filiales/index')

    @endif --}}

@if (auth()->user()->is_admin == 1)
    <h1>Home Main Page :Bienvenue Admin</h1>
    @include('admin.index')

@else
    <h1>Home Main Page :Bienvenue User Manager</h1>
    @include('manager.index')
@endif
