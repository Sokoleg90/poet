@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання категорії</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.ua.category.index')}}">Категорії</a></li>
                            <li class="breadcrumb-item active">Створення категорії</li>
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
                        <form action="{{route('admin.ua.category.store')}}" method="POST" class="w-25">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Назва категорії">
                            @error('title')
                                <div class="text-danger">Ця строка повинна бути заповнена</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary m-2" value="Додати">
                        </form>
                    </div><!--./col -->
                </div><!--/.row -->
            </div><!--container-fluid -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
