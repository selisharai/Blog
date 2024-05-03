@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Blog</h1>
    <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
        @csrf
        @foreach ($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @endforeach
        <label for="">Title</label>
        <input type="text" name="title"> <br>

        <label for="">slug</label>
        <input type="text" name="slug"> <br>

        <label for="">image</label>
        <input type="file" name="image"> <br>

        <label for="">content</label>
        <input type="text" name="content"> <br>

        <label for="">category</label>
        <select name="category_id" id="">
            <option value="">select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select> <br>
        <button type="Submit">Create</button>
    @endsection
