@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Categories Table</h1>
    <a class="btn-success" href="{{ route('category.create') }}">Add Category</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('category.edit', $data->id) }}" role="button">Edit</a>
                        <form method="POST" action="{{ route('category.destroy', $data->id) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
        </tbody>
        @endforeach
    @endsection
