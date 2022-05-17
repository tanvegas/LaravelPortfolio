{{-- @include('sample-header') --}}
@include('components.header')

<h1>Test Blade</h1>

@php
    $name = 'Tristan';

    $fruits = array('Mango', 'Apple', 'Banana', 'Pineapple');

    $count = 10;

    $age = 18;
@endphp

<h2>{{$name}}</h2>

<h2>Fruits</h2>

@foreach ($fruits as $fruit)
    <ul>
        <li>{{$fruit}}</li>
    </ul>
@endforeach

<br>

@for ($i = 1; $i < $count; $i++)
    {{$i}} <br>
@endfor

@if (count($fruits)==1)
    Single Fruit
@elseif(count($fruits)>1)
    More than one Fruit
@else
    No Fruit
@endif

<br>

{{ $age >= 18 ? 'You are adult' : 'You are not adult' }}