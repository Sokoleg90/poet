@extends('ua.layouts.main')
@section('content')

    <!--=============================================
    =            Blog With Right Sidebar            =
    ==============================================-->
    <section id="blog-full-width">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                        @foreach($posts as $post)
                            <div class="blog-content">
                                <h2 class="blogpost-title">
                                    <a href="{{route('ua.post.show', $post->id)}}">{{$post->title}}</a>
                                </h2>
                                <div class="blog-meta">
                                    <span>{{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}} • {{$date->format('H:i')}}</span>
                                    <span>by Oleg Sokolovskiy </span>
                                </div>
                                <div>
                                    {!! \Illuminate\Support\Str::words($post->content, 20, $end='...') !!}
                                </div>
                                <a href="{{route('ua.post.show', $post->id)}}" class="btn btn-dafault btn-details">Читати повністю</a>
                            </div>
                        @endforeach
                    </article>
                    <div class="m-auto">
                        {{$posts->links()}}
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="categories widget">
                            <h3 class="widget-head">Категорії</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('ua.category.post.index', $category->id)}}">{{$category->title}}</a> <span class="badge">{{$category->posts()->count()}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="recent-post widget">
                            <h3>Випадкові вірші</h3>
                            <ul>
                                @foreach($randomPosts as $post)
                                    <li>
                                        <a href="{{route('ua.post.show', $post->id)}}">{{$post->title}}</a><br>
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
