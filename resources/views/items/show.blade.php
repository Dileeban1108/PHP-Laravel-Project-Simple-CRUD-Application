@extends('layout')

@section('content')
    <h2>Item Details</h2>

    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <p><strong>Quantity:</strong> {{ $item->quantity }}</p>
    <p><strong>Price:</strong> {{ $item->price }}</p>

    <a href="{{ route('items.edit', $item->id) }}">Edit</a>
@endsection
