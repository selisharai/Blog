@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Category</h1>
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        <input type="text" name="name">
        <button type="submit">Create</button>
    </form>
@endsection
