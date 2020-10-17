@extends('layouts.app')
@section('content')
    @foreach ($data as $item)
        <ul>
            <a href="{{route('bakery.show',$item->id)}}"><li>{{$item->nome_dolce}}</li></a>
            <li>{{$item->Quantita}}</li>
            <li>{{$item->Glutine}}</li>
        </ul>
        
    @endforeach
@endsection