@extends('layouts.main')
@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @foreach($posts as $post)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{asset('storage/' . $post->preview_image)}}" alt="">
                                    </div>
                                    <div class="p-4">
                                        <a href="{{route('ua.post.show', $post->id)}}" class="blog-post-permalink">
                                            <h4 class="mb-3">{{$post->title}}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="m-auto">
                        {{$posts->links()}}
                    </div>

                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <div class="col-lg-4">

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Категории рецептов</h3>
                        </div>

                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach($categories as $category)
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="{{route('ua.category.post.index', $category->id)}}"><i
                                        class="bi bi-arrow-right me-2"></i>{{$category->title}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Приготуй навмання</h3>
                        </div>
                        @foreach($randomPosts as $post)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{asset('storage/' . $post->preview_image)}}"
                                     style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="{{route('ua.post.show', $post->id)}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{$post->title}}</a>
                            </div>
                        @endforeach
                    </div>
                    <!-- Recent Post End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection


