@if ($errors->any())
    <div class="alert" style="margin:0px;background:pink">
        <ul style="margin:0">
            @foreach ($errors->all() as $error)
                <li style="font-size:17px; font-weight:500;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- @error('errors')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror --}}

@if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif