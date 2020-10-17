@extends('layouts.app')
@section('content')
    <ul>
        <li>{{$bakery->nome_dolce}}</li>
        <li>{{$bakery->Quantita}}</li>
        <li>{{$bakery->Glutine}}</li>
    </ul>
@endsection