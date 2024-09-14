@extends('layout')

@section('content')
    <h2>Edit Item</h2>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required>
        <label>Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="{{ $item->quantity }}" required>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $item->price }}" required>
        <button type="submit">Update Item</button>
    </form>
@endsection
