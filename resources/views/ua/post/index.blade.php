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
                                <span>Dec 11, 2020</span>
                                <span>by <a href="">Admin</a></span>
                                <span><a href="">business</a>,<a href="">people</a></span>
                            </div>
                            <div>
                                {!! $post->content !!}
                            </div>

                            <a href="single-post.html" class="btn btn-dafault btn-details">Continue Reading</a>
                        </div>
                        @endforeach
                    </article>

                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="categories widget">
                            <h3 class="widget-head">Категорії</h3>
                            <ul>
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('ua.category.post.index', $category->id)}}">{{$category->title}}</a> <span class="badge"></span>
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
                                    <time>16 May, 2015</time>
                                </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--
    ==================================================
    Call To Action Section Start
    ================================================== -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h2>
                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                        <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
