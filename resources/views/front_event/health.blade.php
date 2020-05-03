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

    <div class="site-section ">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6">                
                    <a href="event-details.php" class="">
                        <img src="images/checkin.png" class="img" alt="">
                    </a>
                    <br>
                    <br>
                      <h9 class="card-title">New Confirmed : {{ $users['Global']['NewConfirmed'] }}</h9>
                      <br>
                      <h9 class="card-title">Total Confirmed : {{ $users['Global']['TotalConfirmed'] }} </h9>
                      <br> 
                      <h9 class="card-title">New Deaths : {{ $users['Global']['NewDeaths'] }}</h9>
                      <br>
                      <h9 class="card-title">TotalDeaths : {{ $users['Global']['TotalDeaths'] }} </h9>
                      <br>
                      <h9 class="card-title">New Recoverd : {{ $users['Global']['NewRecovered'] }}</h9>
                      <br>
                      <h9 class="card-title">Total Recovered : {{ $users['Global']['TotalRecovered'] }} </h9>
                      <br>
                      </div>
            
                <div class="col-lg-4">                
                    <a href="{{route('front_event.dis')}}" class="">
                        <img src="images/check-in.jpg" class="img" alt="">
                    </a>
                    <br>
                      <h9 class="card-title">New Confirmed : {{ $users['Countries']['18']['NewConfirmed'] }}</h9>
                      <br>
                      <h9 class="card-title">Total Confirmed : {{ $users['Countries']['18']['TotalConfirmed'] }} </h9>
                      <br> 
                      <h9 class="card-title">New Deaths : {{ $users['Countries']['18']['NewDeaths'] }}</h9>
                      <br>
                      <h9 class="card-title">TotalDeaths : {{ $users['Countries']['18']['TotalDeaths'] }} </h9>
                      <br>
                      <h9 class="card-title">New Recoverd : {{ $users['Countries']['18']['NewRecovered'] }}</h9>
                      <br>
                      <h9 class="card-title">Total Recovered : {{ $users['Countries']['18']['TotalRecovered'] }} </h9>
                      <br>
                      </div>
            </div>
        </div>
    </div>

    
 <!-- <div class="container">
    <form method="get" action="">
        <div class="input-group stylish-input-group">
           <input type="text" id="txtSearch" name="txtSearch" class="form-control"  placeholder="Search..." >
        </div>
     </form> 
</div> -->


<div class="site-section bg-light">             
    <!-- <div class="container">
      <div class="row">
         <div class="col-sm-12 mb-3">
           <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
          </div>
       </div>
       <div class="row" id="myItems"> 
            @foreach( $users['Countries'] as $var )
             <div class="col-sm-6">
               <div class="card"  >
                  <div class="card-body" >
                      <h9 class="card-title">Country : {{ $var['Country'] }}</h9>
                      <br>
                      <h9 class="card-title">New Confirmed : {{ $var['NewConfirmed'] }} </h9>
                      <br>
                      <h9 class="card-title">Total Confirmed : {{ $var['TotalConfirmed'] }} </h9>
                      <br>
                      <h9 class="card-title">New Deaths : {{ $var['NewDeaths'] }} </h9>
                      <br>
                      <h9 class="card-title">Total Deaths : {{ $var['TotalDeaths'] }} </h9>
                      <br>
                      <h9 class="card-title">New Recoverd : {{ $var['NewRecovered'] }} </h9>
                      <br>
                      <h9 class="card-title">Total Recovered : {{ $var['TotalRecovered'] }} </h9>
                      </div>
              </div>
              <br>
              </div>
                @endforeach
            </div>
        </div> -->
        
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mb-3">
      <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
    </div>
  </div>
      <div class="row" id="myItems"> 
            @foreach( $users['Countries'] as $var )
             <div class="col-sm-6">
                  <div class="card"  >
                     <div class="card-body" >
                      <h9 class="card-title">Country : {{ $var['Country'] }}</h9>
                      <br>
                      <h9 class="card-title">New Confirmed : {{ $var['NewConfirmed'] }} </h9>
                      <br>
                      <h9 class="card-title">Total Confirmed : {{ $var['TotalConfirmed'] }} </h9>
                      <br>
                      <h9 class="card-title">New Deaths : {{ $var['NewDeaths'] }} </h9>
                      <br>
                      <h9 class="card-title">Total Deaths : {{ $var['TotalDeaths'] }} </h9>
                      <br>
                      <h9 class="card-title">New Recoverd : {{ $var['NewRecovered'] }} </h9>
                      <br>
                      <h9 class="card-title">Total Recovered : {{ $var['TotalRecovered'] }} </h9>
                      <br>
                      <h9 class="card-title">Date : {{ $var['Date'] }} </h9>
                      </div>
                  </div>
      
                  <br>
              </div>
                @endforeach
            </div>
    </div>


<script>

function myFunction() {
    var input, filter, cards, cardContainer, h9, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h9.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}


</script>



    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">           
                    <h3><a href="event-details.php">Try Kompass for Free!</a></h3>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur iusto earum, dolor in commodi porro et autem laborum ratione, eum atque ullam?</!--> 
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="email" class="form-check-input" name="" id="" value="" checked>
                      </label>
                    </div>
                </div>
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