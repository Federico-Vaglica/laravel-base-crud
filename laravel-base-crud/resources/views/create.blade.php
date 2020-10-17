@extends('layouts.app')
@section('content')
    <form action="{{(!empty($bakery)) ? route('bakery.update',$bakery->id): route('bakery.store')}}" method="post">
        @csrf
        @if(!empty($bakery))
            @method('PATCH')
        @else    
            @method('POST')
        @endif    
        @if (!empty($bakery))
        <input type="hidden" name="id" value="{{$bakery->id}}"> 
        @else
            
        @endif
        <label for="title">Nome dolce</label>
        <input type="text" name="nome_dolce" placeholder="Nome Dolce" id='nome_dolce' value="{{(!empty($bakery))?$bakery->nome_dolce : old('nome_dolce')}}">
        <label for="title">Quantita</label>
        <input type="text" name="Quantita" placeholder="Quantita" id='Quantita' value="{{(!empty($bakery))?$bakery->Quantita : old('Quantita')}}">
        <label for="content">Glutine</label>
        <input type="text" name="Glutine" placeholder="Glutine" id='Glutine' value="{{(!empty($bakery))?$bakery->Glutine : old('Glutine')}}">
        <input type="submit" value="Invia">
    </form>
@endsection