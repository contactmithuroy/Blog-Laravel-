@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Tag</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Tag List</a></li>
                        <li class="breadcrumb-item active">Create Tag</li>
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
                                <h3 class="card-title">Update Tag {{ $tag->name }}</h3>
                                <a href="{{ route('tag.create') }}" class="btn btn-primary"> Create Tag</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="card card-primary">
                               <div class="row">
                                   <div class="col-12 col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('tag.update',[$tag->id]) }}"   method="post">
                                           @csrf
                                           @method('PUT')
                                            <div class="card-body">
                                                
                                               @include('include.errors')  {{-- for error --}}
                                                
                                               <div class="form-group">
                                                    <label for="name">Tag Name</label>
                                                    <input type="name" name="name" value="{{ $tag->name }}" class="form-control" id="name" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">   
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter your description" >
                                                        {{ $tag->description }} 
                                                    </textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Tag</button>
                                            </div>
                                        </form>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection