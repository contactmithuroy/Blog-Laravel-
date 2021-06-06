@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                                <h3 class="card-title">Category List</h3>
                                <a href="{{ route('category.create') }}" class="btn btn-primary"> Create Category</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Post Category</th>
                                <th style="width: 40px">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($categories->count() > 0)
                                @foreach ($categories as $categorie)
                            
                                <tr>
                                  <td>{{ $categorie->id }}</td>
                                  <td>{{ $categorie->name }}</td>
                                  <td>{{ $categorie->slug }}</td>
                                  <td>
                                    <div>
                                      {{ $categorie->id }}
                                    </div>
                                  </td>
                                  <td class="d-flex">
                                    <a href="{{ route('category.edit', [$categorie->id]) }}" class="btn btn-primary mr-1"> <i class="fas fa-edit"></i> </a>
                                   
                                    <form action="{{ route('category.destroy',[$categorie->id]) }}" method="POST" class="mr-1">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                    
                                    </form>

                                    {{-- <a href="{{ route('category.show',[$categorie->id]) }}" class="btn btn-success mr-1"> <i class="fas fa-eye"></i> </a> --}}
                                  </td>
                                </tr>
                                @endforeach
                              
                              @else

                                <td colspan="5">
                                  <h5 class="text-center">No Text Found</h5>
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