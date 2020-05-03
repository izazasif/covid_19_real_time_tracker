@include('includes.header') 
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/health.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <!-- <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                
              </div>
            </div>

            
          </div>
        </div>
      </div> -->
    </div>  
 
    <div class="site-section bg-light">             
        <div class="container">
            <div class="row"> 
            @foreach( $dis['features'] as $var )
             <div class="col-sm-6">
               <div class="card">
                  <div class="card-body">
                  <h9 class="card-title">District : {{ $var['properties']['name'] }}</h9>
                      <br>
                      <h9 class="card-title">confirmed : {{ $var['properties']['confirmed'] }} </h9>
                      </div>
              </div>
              <br>
              </div>
                @endforeach
            </div>
        </div>
    </div>
    


    <h9 class="card-title">District : {{ $var['properties']['name'] }}</h9>
                      <br>
                      <h9 class="card-title">confirmed : {{ $var['properties']['confirmed'] }} </h9>

    <div class="site-section">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-5">           
                    <h5><a href="event-details.php">Download Now</a></h5>
                    <span class="store_logo">
                        <a href="#" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/play_store.png">
                        </a>
                        <a href="#" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/app_store.png">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')