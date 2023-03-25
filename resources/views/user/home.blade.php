@extends('user.app')

  @section('main-content')
  
  
    <div style="height: 113px;"></div>

    <div class="site-blocks-cover overlay" style="background-image: url('{{asset('user/images/hero_1.jpg')}}');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>Search IMEI</h1>
            <form action="{{ route('checks.store') }}" method="post" >
              {{csrf_field()}}
              <div class="">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9 mb-3 mb-md-0">
                      <input type="number" class="mr-3 form-control border-0 px-4" placeholder="Search IMEI  " name="imei" required="true" min="0">
                    </div>
                    <div class="col-md-3">
                  <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
                </div>
                  </div>
                </div>
              
              </div>
            
              
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mx-auto text-center mb-12 section-heading">
            <h2 class="mb-5">Enhanced Smart Phone Ecosystem Analysis</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-calculator mb-3 text-primary"></span>
              <h2>Registered Users</h2>
              <span class="counting">{{$registerUsers}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-wrench mb-3 text-primary"></span>
              <h2>Registered Admins</h2>
              <span class="counting">{{$registerAdmins}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Registered Shops</h2>
              <span class="counting">{{$registerShops}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Shops Requests</h2>
              <span class="counting">{{$count}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Registered Retailers</h2>
              <span class="counting">{{$registerRetailers}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-computer-graphic mb-3 text-primary"></span>
              <h2>Retailers Requests</h2>
              <span class="counting">{{$counts}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-calculator mb-3 text-primary"></span>
              <h2>Registered Devices</h2>
              <span class="counting">{{$registerDevices}}</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
            <a href="#" class="h-100 feature-item">
              <span class="d-block icon flaticon-calculator mb-3 text-primary"></span>
              <h2>BlackListed Devices</h2>
              <span class="counting">{{$blackListed}}</span>
            </a>
          </div>
        </div>

      </div>
    </div>


    

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                
                  <span class="icon-wrap">
                    
                  </span>
                  <img src="{{asset('user/images/click1.jpg')}}" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>Stolen Devices Information</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
       
            
          </div>
        </div>
      </div>
    </div>



     <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                
                  <span class="icon-wrap">
                    
                  </span>
                  <img src="{{asset('user/images/click.jpg')}}" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>Users Information</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
            
          </div>
        </div>
      </div>
    </div>




        <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
               
                  <span class="icon-wrap">
                    
                  </span>
                  <img src="{{asset('user/images/click2.jpg')}}" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>Shops Information</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
   
          </div>
        </div>
      </div>
    </div>


  

    

  

    



    


  
  </div>
  @endsection