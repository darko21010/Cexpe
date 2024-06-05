@extends('layout')

@section('Title', 'Talleres')

@section('content')

<h1> Talleres </h1>

<ul>
    @foreach ($talleres as $item)

        <li> {{$item['Titulo']}} </li>

    @endforeach

</ul>

@endsection