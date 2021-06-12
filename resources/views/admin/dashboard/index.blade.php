@extends('layouts.admin')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
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

                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-warning" ><i style="color: white" class=" fas fa-pen-square"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Posts</span>
                      <span class="info-box-number">{{ $postCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i style="color: white" class="far fa-flag"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Categories</span>
                      <span class="info-box-number">{{ $categoryCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>

                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i style="color: white" class="fas fa-chart-pie"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Tags</span>
                      <span class="info-box-number">{{ $tagCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>


                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i style="color: white" class="far fa-user"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Users</span>
                      <span class="info-box-number">{{ $userCount }}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>

                <!-- /.col -->
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          
                          <div class=" d-flex justify-content-between align-item-center ">
                                <h3 class="card-title">Post List</h3>
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
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
@endsection