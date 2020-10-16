@extends('layouts.app')
@section('content')
    @foreach ($data as $item)

        <ul>
            <li>{{$item->Quantita}}</li>
            <li>{{$item->Glutine}}</li>
        </ul>
        
    @endforeach
@endsection