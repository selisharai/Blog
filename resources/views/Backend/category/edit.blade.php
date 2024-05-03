@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Edit Category</h1>
    <form method="post" action="{{ route('category.update', $category->id) }}">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $category->name }}">
        <button type="submit">Update</button>
    </form>
@endsection
