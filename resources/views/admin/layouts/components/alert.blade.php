{{-- @if ($errors->any())
    <div class="alert" style="margin:0px;background:rgb(239, 210, 215)">
        <ul style="margin:0">
            @foreach ($errors->all() as $error)
                <li style="font-size:17px; font-weight:500;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

{{-- @error('errors')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror --}}

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

@if(Session::has('error'))
    <p class="alert alert-danger">{{ Session::get('error') }}</p>
@endif