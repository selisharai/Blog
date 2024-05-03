@extends('Backend.layouts.headerfooter')
@section('body-content')
    <div class="container">
        <h2>Basic Table</h2>
        <a class="btn-success" href="{{ route('blog.create') }}">Add Blog</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>
                            <img class="image" src="{{ asset($data->image) }}" alt="">
                        </td>
                        <td>{{ $data->content }}</td>
                        <td>{{ $data->category ? $data->category->name : 'undefined' }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('category.edit', $data->id) }}"
                                role="button">Edit</a>
                            <form method="POST" action="{{ route('category.destroy', $data->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endsection
