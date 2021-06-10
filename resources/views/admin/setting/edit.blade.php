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
                                        <form role="form" action="{{ route('setting.update') }}"   method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                 
                                                @include('include.errors')  {{-- for error --}}
                                                 
                                                <div class="form-group">
                                                     <label for="title">Site Name</label>
                                                     <input type="text" name="name" class="form-control" id="title" placeholder="Enter site name" value="{{ $setting->name }}">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="facebook">Facebook</label>
                                                            <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Enter facebook url" value="{{ $setting->facebook }}">
                                                       </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="twitter">Twitter</label>
                                                                <input type="text" name="twitter" class="form-control" id=twitter" placeholder="Enter twitter url" value="{{ $setting->twitter }}">
                                                           </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="instagram">Instagram</label>
                                                                <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Enter instagram url" value="{{ $setting->instagram }}">
                                                           </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="linkedin">LinkedIn</label>
                                                                <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Enter linkedin url" value="{{ $setting->linkedin }}">
                                                           </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">email</label>
                                                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email url" value="{{ $setting->email }}">
                                                            </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="copyright">Copyright</label>
                                                                <input type="text" name="copyright" class="form-control" id="copyright" placeholder="Enter copyright url" value="{{ $setting->copyright }}">
                                                           </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="copyright">Copyright</label>
                                                            <input type="text" name="copyright" class="form-control" id="copyright" placeholder="Enter copyright" value="{{ $setting->copyright }}">
                                                       </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="contact">Contact Number</label>
                                                            <input type="number" name="contact" class="form-control" id="contact" placeholder="Enter contact number url" value="{{ $setting->contact }}">
                                                       </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Location</label>
                                                            <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="{{ $setting->address }}">
                                                       </div>
                                                    </div>


                                                


                                                </div>
                                                 {{-- site logo --}}
                                                <div class="form-group">
                                                    <div class="row ">
                                                        <div class="col-md-8">
                                                            <label for="exampleInputFile">Site Logo</label>
                                                            <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose Your Logo</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                {{-- <span class="input-group-text" id="">Upload</span> --}}
                                                            </div>
                                                            </div>
                                                        </div>
                                                        @if($setting->logo)
                                                            <div class="col-md-4">
                                                                <div style="max-width:100px; max-height:100px; over-flow:hidden; margin-left:auto">
                                                                <img src="{{ $setting->logo }}" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        @endif    
                                                    </div> 
                                                </div>
                                                    
                                                        

                                                <div class="form-group">
                                                    <label for="about_site">About_site</label>
                                                    <textarea name="about_site" id="summernote" rows="4" class="form-control" placeholder="Enter your description">

                                                        {!! $setting->about_site !!}
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

