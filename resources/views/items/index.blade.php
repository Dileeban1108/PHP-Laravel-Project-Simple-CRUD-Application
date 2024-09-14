@extends('layout')

@section('content')
    <style>
        .inventory-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: #fff;
        }

        .inventory-table th, .inventory-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .inventory-table th {
            background-color: #f2f2f2;
        }

        .success-message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            background-color: #d4edda;
            color: #155724;
        }
    </style>

    <h2>Inventory List</h2>
    <a href="{{ route('items.create') }}">Add New Item</a>

    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <table class="inventory-table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a href="{{ route('items.show', $item->id) }}">View</a>
                <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
