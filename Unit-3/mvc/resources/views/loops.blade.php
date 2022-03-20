<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<h2>User display with for loop directive</h2>

@for($i=0; $i < count($users); $i++)
{{$users[$i]}}
<br>
@endfor

<h2>User display with foreach directive</h2>
@foreach ($users as $user)
    <p>This is user {{ $user}}</p>
@endforeach

<h2>User display with forelse directive</h2>
@forelse ($users as $user)
    <li>{{ $user}}</li>
@empty
    <p>No users</p>
@endforelse

<h2>User display with while directive</h2>
@php 
$i=0 
@endphp
@while($i<count($users))
    <li> {{$users[$i]}} </li> 
@php 
$i++ 
@endphp
@endwhile 

{{--
@foreach ($users as $user)
    @if ($loop->first)
        This is the first iteration.
    @endif
    @if ($loop->last)
        This is the last iteration.
    @endif
    <p>This is user {{ $user }}</p>
@endforeach
 --}}
</body>
</html>

