@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Single Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post List</a></li>
                        <li class="breadcrumb-item active">Show Post</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          
                          <div class=" d-flex justify-content-between align-item-center ">
                                <h3 class="card-title">View Post </h3>
                                <a href="{{ route('post.index') }}" class="btn btn-primary"> Back To Post</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-bordered ">
                                <tbody>
                                    <tr>
                                        <th style="width: 200px">Image</th>
                                        <td>
                                            <div style="max-width:300px; max-height:300px; over-flow:hidden; margin-center:auto">
                                                <img src="{{ asset($post->image) }}" class="img-fluid">
                                            </div>    
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ $post->title }}</td>
                                    </tr>

                                    <tr>
                                        <th>Category</th>
                                        <td>{{ $post->category->name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Author Name</th>
                                        <td>{{ $post->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Post Tags</th>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <span class="badge badge-primary">{{ $tag->name }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{!! $post->description !!}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection



