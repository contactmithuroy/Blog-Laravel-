@extends('layouts.website')

@section('content')
    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_2.jpg'); max-height:450px">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white bg-success mb-3">Are You Want To</span>
              <h2 class="mb-4"><a href="#">Contact Us</a></h2>
              <div class="post-meta align-items-center text-center">
                <span class="d-inline-block mt-1">By </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="post-content-body">
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="{{ route('post.contact') }}" method="POST" class="p-5 bg-light">
                    @csrf
                    @include('include.errors')
                    @if(Session::has('massage_send'))
                    <div class="alart alart-success">{{ Session::get('massage_send') }}</div>
                    @endif
                  <div class="form-group ">
                    <label for="name"> Name <small style="color: red" >*</small></label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email <small style="color: red" >*</small></label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject">
                  </div>

                  <div class="form-group">
                    <label for="message">Message <small style="color: red" >*</small></label>
                    <textarea name="massage" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-left">
               <h5>Address</h5>
               <span>{{ $setting->address }}</span>

               <h5>Phone</h5>
               <span>{{ $setting->contact }}</span>

               <h5>Email Address</h5>
               <span>{{ $setting->email }}</span>
              </div>
            </div>
            <!-- END sidebar-box -->  

          </div>
          <!-- END sidebar -->

        </div>
      </div>
</section>
@endsection
  