@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление стихотворения</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.ru.post.index')}}">Стихи на русском языке</a></li>
                            <li class="breadcrumb-item active">Написание стихотворения</li>
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

                    <div class="col-12">


                        <form action="{{route('admin.ru.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="title" placeholder="Название стихотворения"
                                value="{{old('title')}}"
                                >
                            @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea id="summernote" name="content">
                                    {{old('content')}}
                                </textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value={{$category->id}}
                                    {{$category->id == old('category_id') ? 'selected' : ''}}
                                    >{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                            <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div><!--./col -->
                </div><!--/.row -->
            </div><!--container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
