@if(session()->has('error-user-not-found'))

    {{session('error-user-not-found')}}

@endif

@if(session()->has('delete-success'))

    {{session('delete-success')}}

@endif

@if(session()->has('user-not-admin'))

    {{session('user-not-admin')}}

@endif