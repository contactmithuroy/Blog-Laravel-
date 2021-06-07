@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Post List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Post</li>
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
                                <h3 class="card-title">Post List</h3>
                                <a href="{{ route('post.create') }}" class="btn btn-primary"> Create Post</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Tags</th>
                                <th>Author</th>
                                <th style="width: 40px">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($posts->count() > 0)
                                @foreach ($posts as $posts)
                            
                                <tr>
                                  <td>{{ $posts->id }}</td>

                                  <td>
                                    <div style="max-width:70px; max-height:70px; over-flow:hidden">
                                      <img src="{{ asset($posts->image) }}" class="img-fluid">
                                    </div>
                                  </td>
  
                                  <td>{{ $posts->title }}</td>
                                  <td>{{ $posts->category->name }}</td>
                                  <td>
                                    @foreach ($posts->tags as $tag)
                                      <span class="badge badge-primary">{{ $tag->name }}</span>
                                    @endforeach
                                  </td>
                                  <td>{{ $posts->user->name }}</td>
                                  <td class="d-flex">
                                    <a href="{{ route('post.show',[$posts->id]) }}" class="btn btn-success mr-1"> <i class="fas fa-eye"></i> </a>

                                    <a href="{{ route('post.edit', [$posts->id]) }}" class="btn btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                   
                                    <form action="{{ route('post.destroy',[$posts->id]) }}" method="POST" class="mr-1">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                    
                                    </form>

                                  </td>
                                </tr>
                                @endforeach
                              
                              @else

                                <td colspan="6">
                                  <h5 class="text-center">No Post Found</h5>
                                </td>
                              
                              @endif 
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