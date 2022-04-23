 
@if (session()->has('message'))
<div class="alert alert-success text-center">{{session()->get('message')}}</div>
@elseif (session()->has('error'))
<div class="alert alert-danger text-center">{{session()->get('error')}}</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif