@extends('layouts.app')
@section('content')
    <form action="{{route('bakery.store')}}" method="post">
        @csrf

        @method('POST')
        <label for="title">Quantita</label>
        <input type="text" name="Quantita" placeholder="Quantita" id='Quantita'>
        <label for="content">Glutine</label>
        <input type="text" name="Glutine"
        placeholder="Glutine">
        <input type="submit" value="Invia">
    </form>
@endsection