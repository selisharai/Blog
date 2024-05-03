@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Edit Category</h1>
    <form method="post" action="{{ route('category.update', $category->id) }}">
        @csrf
        @foreach ($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @endforeach
        @method('put')
        <input type="text" name="name" value="{{ $category->name }}">
        <button type="submit">Update</button>
    </form>
@endsection
