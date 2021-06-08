@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User List</a></li>
                        <li class="breadcrumb-item active">Create User</li>
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
                                <h3 class="card-title">Create User </h3>
                                <a href="{{ route('user.index') }}" class="btn btn-primary"> Back To User</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="card card-primary">
                               <div class="row">
                                   <div class="col-12 col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('user.store') }}"   method="post" enctype="multipart/form-data" >
                                           @csrf
                                            <div class="card-body">
                                                
                                               @include('include.errors')  {{-- for error --}}
                                                
                                                <div class="form-group">
                                                    <label for="name">User Name<span style="color: red" >*</span></label>
                                                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="emal">User Email<span style="color: red" >*</span></label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="password">User password<span style="color: red" >*</span></label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputFile">Image</label>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                                      </div>
                                                      <div class="input-group-append">
                                                        {{-- <span class="input-group-text" id="">Upload</span> --}}
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter your description">

                                                        
                                                    </textarea>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                            
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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



