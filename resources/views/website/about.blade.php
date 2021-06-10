@extends('layouts.website')

@section('content')
    
<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_2.jpg'); max-height:450px ">
  <div class="container">
    <div class="row same-height justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="post-entry text-center">
          <span class="post-category text-white bg-success mb-3">Let's Talk to!</span>
          <h2 class="mb-4"><a href="#">About Us</a></h2>
          <div class="post-meta align-items-center text-center">
            <span class="d-inline-block mt-1">By Carrol Atkinson and Hoverso contuct with us we will provide you our best product</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
    <section class="custom-site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate mt-10">

          <div class="col-md-12 col-lg-6 main-content">
            
            <div class="post-content-body">
              <h3>{{ $user->name }}</h3>
              <p>{{ $user->description }}</p>
            </div>
          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-5 sidebar">
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="row mb-5 mt-5 d-flex flex-row justify-content-center ">
                  <img src="@if($user->image){{ $user->image }}@else{{ asset('website/storage/users/avatar.png') }}@endif" alt="Image placeholder" class="img-fluid rounded  " style="width: 200px; height:200px;">
                
              </div>
            </div>
            <!-- END sidebar-box -->  
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>


    {{-- <section class="custom-site-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <div class="subscribe-1 ">
              <h2>Meet The Team</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
            </div>
          </div>


          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <div class="bio text-center">
                  <img src="{{ asset('website') }}/images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">
                  <div class="bio-body">
                    <h2>Craig David</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span>Facebook</a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span>Twitter</a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span>Instagram</a>
                     
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="bio text-center">
                  <img src="{{ asset('website') }}/images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">
                  <div class="bio-body">
                    <h2>Craig David</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span>Facebook</a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span>Twitter</a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span>Instagram</a>
                     
                    </p>
                  </div>
                </div>
              </div>


              <div class="col-md-4">
                <div class="bio text-center">
                  <img src="{{ asset('website') }}/images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">
                  <div class="bio-body">
                    <h2>Craig David</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                    <p class="social">
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span>Facebook</a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span>Twitter</a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span>Instagram</a>
                     
                    </p>
                  </div>
                </div>
              </div>


            </div>
          </div>


        </div>
      </div> 
    </section>
       --}}
    {{-- <section class="custom-site-section">
          <div class="col-md-12 justify-content-center">
            <div class="row justify-content-center">
              <div class="col-md-12 col-lg-4 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.</p>
                <p>Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.</p>
                
              </div>
              <div class="col-md-12 col-lg-4 ">
                <div class="col-md-12 mb-4">
                  <img src="{{ asset('website') }}/images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                </div>
              </div>
              
            </div>
          </div>
    </section> --}}

    <section>
      <div class="custom-site-section bg-lightx justify-content-center">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-5">
              <div class="subscribe-1 ">
                <h2>Subscribe to our newsletter</h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                <form action="#" class="d-flex">
                  <input type="text" class="form-control" placeholder="Enter your email address">
                  <input type="submit" class="btn btn-primary" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



        

@endsection
  