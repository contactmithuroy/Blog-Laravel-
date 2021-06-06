@extends('layouts.website')

@section('content')
    
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_2.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white bg-success mb-3">Nature</span>
              <h2 class="mb-4"><a href="#">Contact Us</a></h2>
              <div class="post-meta align-items-center text-center">
                <span class="d-inline-block mt-1">By Carrol Atkinson and Hoverso contuct with us we will provide you our best product</span>
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
                <form action="#" class="p-5 bg-light">

                  <div class="form-group ">
                    <label for="name">First Name *</label>
                    <input type="text" class="form-control" id="fname">
                  </div>
                  <div class="form-group">
                    <label for="name">Last Name *</label>
                    <input type="text" class="form-control" id="lname">
                  </div>

                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
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
               <span>H43, R2, Section 12, Mirpur, Dhaka</span>

               <h5>Phone</h5>
               <span>177688996</span>

               <h5>Email Address</h5>
               <span>ethan@gmail.com</span>
              </div>
            </div>
            <!-- END sidebar-box -->  

          </div>
          <!-- END sidebar -->

        </div>
      </div>
</section>
@endsection
  