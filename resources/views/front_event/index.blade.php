     
    @include('includes.event-header')
    <div class="freespace100"></div>

    <div class="site-section bg-light py-4">
        <div class="container">
            <div class="row mb-0">
                <div class="col-md-9 text-left">
                    <h3 class="font-weight-light text-primary">Event Spotlight</h3>
                </div>
                <div class="col-md-3 text-right">
                    <a href="login.php" class="btn btn-info rounded text-white">Create Event</a>
                </div>
            </div><hr>
            <div class="row">
                <div class="col-lg-9">
                @foreach( $users->slice(0, 1) as $var )
                    <div class="d-block d-md-flex listing">
                        <a href="{{ route('front_event.event-details')}}" class="popular-event-img d-block" style="background-image: url('images/new/{{ $var->Image }}')"></a>
                        <div class="lh-content">
                            <h2 class="font-size-22"><a href="{{ route('front_event.event-details')}}"><span class="icon icon-place"></span>{{ $var ->titile }}</a></h2>
                            <p class="date">{{date('r', strtotime(str_replace('-','/', $var->open)))}}  {{ $var ->start }} {{ $var ->close }} {{ $var ->end }} </p>
                            <address>{{ $var ->lat }} {{ $var ->lon }} {{ $var ->street }} {{ $var ->city }} {{ $var ->zip }} {{ $var ->country }}</address>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit eveniet, vel deleniti nisi expedita voluptates consequatur sequi quae consectetur! Ut veritatis placeat neque tenetur vitae quisquam, quas animi corporis ipsa?
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 sidebar pt-3">
                    <div class="row mb-0">
                        <div class="col-md-12 text-left">
                            <h5 class="font-weight-light">Browse Events</h5>
                        </div>
                    </div>
                    <ul class="sidebar-nav mb-2">
                        <li><a href="event.php"><span class="flaticon-house mr-2"></span>Festivals & Fairs</a></li>
                        <li><a href="event.php"><span class="flaticon-car mr-2"></span>Music</a></li>
                        <li><a href="event.php"><span class="flaticon-bunk-bed mr-2"></span>Nightlife</a></li>
                        <li><a href="event.php"><span class="flaticon-innovation mr-2"></span>Official Yelp Events</a></li>
                        <li><a href="event.php"><span class="flaticon-pizza mr-2"></span>Food & Drink</a></li>
                        <li><a href="event.php"><span class="flaticon-house mr-2"></span>Performing Arts</a></li>
                        <li><a href="event.php"><span class="flaticon-house mr-2"></span>Visual Arts</a></li>
                    </ul>
                        <a class="ml-2" href="event.php"><span class="icon icon-caret-right mt-2"></span> View All</a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-0">
            <div class="col-md-12 text-left">
                <h3 class="font-weight-light text-primary">Popular Events</h3>
                <ul class="home-popular-tab mb-0">
                <li><a href="event.php">All</a></li>
                <li><a href="event.php">Today</a></li>
                <li><a href="event.php">Tomorrow</a></li>
                <li><a href="event.php">This Weekend</a></li>
                </ul>
                <hr>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">

                <div class="row">
                <div class="col-lg-4">         
                @foreach( $users->slice(0, 3) as $var )       
                    <div class="d-block d-md-flex listing vertical">
                    <a href="event-details.php" class="img d-block" style="background-image: url('images/new/{{ $var->Image }}')"></a>
                    <div class="lh-content">
                        <h3><a href="event-details.php">{{ $var ->titile }}</a></h3>
                        <p class="date mb-0">{{ $var ->open }} {{ $var ->start }} {{ $var ->close }} {{ $var ->end }} </p>
                        <address class="mb-0">{{ $var ->lat }} {{ $var ->lon }} {{ $var ->street }} {{ $var ->city }} {{ $var ->zip }} {{ $var ->country }}</address>
                    </div>
                    </div>
                    @endforeach
                </div>

               
                
                <div class="col-lg-4"> 
                @foreach( $users->slice(0, 3) as $var )                
                    <div class="d-block d-md-flex listing vertical">
                    <a href="event-details.php" class="img d-block" style="background-image: url('images/new/{{ $var->Image }}')"></a>
                    <div class="lh-content">
                        <h3><a href="event-details.php">{{ $var ->titile }}</a></h3>
                        <p class="date mb-0">{{ $var ->open }} {{ $var ->start }} {{ $var ->close }} {{ $var ->end }} </p>
                        <address class="mb-0">{{ $var ->lat }} {{ $var ->lon }} {{ $var ->street }} {{ $var ->city }} {{ $var ->zip }} {{ $var ->country }}</address>
                    </div>
                    </div>
                    @endforeach
                </div>

                

                </div>

                <!-- <div class="col-12 mt-5 text-center">
                <div class="custom-pagination">
                    <span>1</span>
                    <a href="event-details.php">2</a>
                    <a href="event-details.php">3</a>
                    <span class="more-page">...</span>
                    <a href="event-details.php">10</a>
                </div>
                </div> -->

            </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-8">

            <div class="row mb-5">
              <div class="col-md-12 text-left border-primary">
                <h3 class="font-weight-light text-primary">Upcoming Events</h3>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
              <a href="event-details.php" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
              <div class="lh-content">
                <!-- <span class="category">Real Estate</span> -->
                <a href="event-details.php" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h3>
                <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                <address>10/12, Block: B Niketan, Gulshan, Dhaka-1212, Bangladesh</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Reviews)</span>
                </p>
              </div>
            </div>

            <div class="d-block d-md-flex listing">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/1.jpg')"></a>
                <div class="lh-content">
                    <!-- <span class="category">Real Estate</span> -->
                    <a href="event-details.php" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h3>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                    <address>Don St, Brooklyn, New York</address>
                    <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                    </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/2.jpg')"></a>
                <div class="lh-content">
                    <!-- <span class="category">Real Estate</span> -->
                    <a href="event-details.php" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h3>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                    <address>Don St, Brooklyn, New York</address>
                    <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                    </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/3.jpg')"></a>
                <div class="lh-content">
                    <!-- <span class="category">Real Estate</span> -->
                    <a href="event-details.php" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h3>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                    <address>Don St, Brooklyn, New York</address>
                    <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                    </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/4.jpg')"></a>
                <div class="lh-content">
                    <!-- <span class="category">Real Estate</span> -->
                    <a href="event-details.php" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h3>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                    <address>Don St, Brooklyn, New York</address>
                    <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                    </p>
                </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="row mb-5">
              <div class="col-md-12 text-left border-primary">
                <h3 class="font-weight-light text-primary">Recently Added Events</h3>
              </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/4.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/1.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/2.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/3.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/4.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/5.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/6.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

            <div class="d-block d-md-flex listing2">
                <a href="event-details.php" class="img d-block" style="background-image: url('images/events/1.jpg')"></a>
                <div class="lh-content py-2">
                    <h6><a href="event-details.php"><span class="icon icon-place"></span> House with Swimming Pool</a></h6>
                    <p class="date">Friday, Mar 13, 8:30 pm – Sunday, Mar 15, 1:00 am </p>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    
    <!-- <div class="site-section bg-white">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div> -->
    @include('includes.footer')
   