@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item active">Вірші</li>
                        </ol>
                    </div><!--col -->
                </div><!--/.row -->
            </div><!--/.container-fluid -->
        </section><!--/.content-header -->

        <!--Main content -->
        <section class="content">
            <div class="container-fluid">
                <!--Small boxes (Start box) -->
                <div class="row">
                    <div class="col-1 mb-3">
                        <a href="{{route('admin.ua.post.create')}}" class="btn btn-block btn-primary">Додати</a>
                    </div>
                </div>
                        <div class="row">
                            <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th colspan="3" class="text-center">Дія</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td><a href="{{route('admin.ua.post.show', $post->id)}}"> <i class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="{{route('admin.ua.post.edit', $post->id)}}" class="text-success"><i class="fa-solid fa-pencil"></i></a></td>
                                        <td>
                                            <form action="{{route('admin.ua.post.destroy', $post->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-0 bg-transparent">
                                                <i class="fa-solid fa-trash-can text-danger" role="button" ></i>
                                                </button>
                                            </form>

                                            </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div><!--./col -->
                </div><!--/.row -->
            </div><!--container-fluid -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
