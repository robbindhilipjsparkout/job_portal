
@php 
$i=1;
@endphp


@if ($i > 10)
    <p>{{ $i }} is large.</p>
@elseif ($i == 10)
    <p>{{ $i }} is ten.</p>
@else
    <p>{{ $i }} is small.</p>
@endif



@php 
$i=1;
@endphp

@unless ($i > 10)
    <p>A $i is greater.</p>
@endunless
