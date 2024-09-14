@extends('layout')

@section('content')
    <h2>Add New Item</h2>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <label>Quantity:</label>
        <input type="number" name="quantity" required>
        <label>Price:</label>
        <input type="text" name="price" required>
        <button type="submit">Add Item</button>
    </form>
@endsection
