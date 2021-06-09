@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
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
                                <h3 class="card-title">Edit Site Setting</h3>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="card card-primary">
                               <div class="row">
                                   <div class="col-12 col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('setting.edit') }}"   method="setting" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                             <div class="card-body">
                                                 
                                                @include('include.errors')  {{-- for error --}}
                                                 
                                                <div class="form-group">
                                                     <label for="title">Setting Title</label>
                                                     <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ $setting->name }}">
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="title">Setting Catagory</label>
                                                     <select name="category_id" id="category" class="form-control" >
                                                         <option value="" style="display: none" selected >Select Category</option>
                                                         @foreach ($categories as $cat)
                                                             <option value="{{ $cat->id }}" @if($setting->category_id = $cat->id ) selected @endif >{{ $cat->name }}</option>
                                                         @endforeach
                                                     </select>
                                                 </div>
 
                                                    <div class="form-group">
                                                        <div class="row ">
                                                            <div class="col-md-8">
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

                                                            <div class="col-md-4">
                                                                <div style="max-width:100px; max-height:100px; over-flow:hidden; margin-left:auto">
                                                                    <img src="{{ asset($setting->image) }}" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    
                                                        

                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea name="description" id="summernote" rows="4" class="form-control" placeholder="Enter your description">
    
                                                            {{ $setting->description }}
                                                        </textarea>
                                                    </div>
                                             </div>
                                             <!-- /.card-body -->
                             
                                             <div class="card-footer">
                                                 <button type="submit" class="btn btn-primary">Update</button>
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

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/css/summernote-bs4.css') }}">
@endsection

@section('script')
    <script src="{{ asset('admin/js/summernote-bs4.js') }}"> </script>
    
    <script>
    $('#summernote').summernote({ // discription id is requered same
        placeholder: 'Write here something new...',
        tabsize: 2,
        height: 300
    });
    // if font have not show then change the font path. find(/font) replace(../font/)
    </script>
@endsection

