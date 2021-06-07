@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post List</a></li>
                        <li class="breadcrumb-item active">Update Post</li>
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
                                <h3 class="card-title">Edit Post {{ $post->name }}</h3>
                                <a href="{{ route('post.index') }}" class="btn btn-primary"> Back To Post</a>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="card card-primary">
                               <div class="row">
                                   <div class="col-12 col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                                        <!-- form start -->
                                        <form role="form" action="{{ route('post.update',[$post->id]) }}"   method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                             <div class="card-body">
                                                 
                                                @include('include.errors')  {{-- for error --}}
                                                 
                                                <div class="form-group">
                                                     <label for="title">Post Title</label>
                                                     <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{ $post->title }}">
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="title">Post Catagory</label>
                                                     <select name="category_id" id="category" class="form-control" >
                                                         <option value="" style="display: none" selected >Select Category</option>
                                                         @foreach ($categories as $cat)
                                                             <option value="{{ $cat->id }}" @if($post->category_id = $cat->id ) selected @endif >{{ $cat->name }}</option>
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
                                                                    <img src="{{ asset($post->image) }}" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    
                                                    @foreach ($tags as $tag)
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                            <input class="form-check-input" name="tags[]" value="{{ $tag->id }}" type="checkbox" id="tag{{ $tag->id }}" 
                                                            @foreach ($post->tags as $i)
                                                                @if($tag->id == $i->id) checked @endif
                                                            @endforeach
                                                            >
                                                            <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter your description">
    
                                                            {{ $post->description }}
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