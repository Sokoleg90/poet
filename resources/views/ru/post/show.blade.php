@extends('ru.layouts.main')
@section('content')
    <section class="single-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post-title">
                        <h1 class="mb-4">{{$post->title}}</h1>
                    </div>
                    <div class="blog-meta">
                        <span>{{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}} • {{$date->format('H:i')}}</span>
                        <span>/by Oleg Sokolovskiy </span>
                    <div class="post-content">
                        <div>
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="comments">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="mb-0">Комментарии ({{$post->comments->count()}})</h3>
                            </div>
                            <div class="media">
                                @foreach($post->comments as $comment)
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            {{$comment->name}}</h4>
                                        <div class="text-muted">
                                            {{$comment->dateAsCarbon->diffForHumans()}}
                                        </div>
                                        <div>
                                            {{$comment->message}}
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                            <form class="form-horizontal" action="{{route('ru.post.comment.store', $post->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-lg-6">
                                        <input type="text" class="col-lg-12 form-control" name="name" placeholder="Введите ваше имя">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <textarea class=" form-control" rows="8" name="message" placeholder="Напишите ваш комментарий"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-send" type="submit">Оставить комментарий</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
