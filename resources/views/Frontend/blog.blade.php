@extends('Frontend.layouts.headerfooter')
@section('body-content')
    {{-- <img class="im"
        src="https://i0.wp.com/theconceptwriters.com.pk/wp-content/uploads/2022/09/What-is-article-writing..jpg"> --}}


    <section class="">
        <div class="row">
            <div class="col-12">
                <h1>Recent Blogs</h1>
            </div>
            @foreach ($blogs as $blog)
                <div class="col-md-4 col-6 mb-3">
                    <div class="card p-2">
                        <img class="card-img-top" src="{{ $blog->image }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $blog->title }}</h4>
                            <p class="card-text">{{ $blog->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
