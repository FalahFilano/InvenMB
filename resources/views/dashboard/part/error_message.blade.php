@if ($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif