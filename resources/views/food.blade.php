 <!-- ***** Menu Area Starts ***** -->
 <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                     @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post">
                    @csrf

                    <div class="item">

        <div style="background-image: url('/foodimage/{{$data->image}}');" class='card'> 

                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                            <div class="title"><h6>{{$data->title}}</h6></div>
                              <h1 class='title'></h1>
                            <div class="description"><h6>{{$data->description}}</h6></div>
                              <p class='description'></p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>


                        <input type="number" name="quantity" min="1" value="1" style="width:80px;">
                        <input type="submit" value="addcart">


                    </div>
                    </form>
                    @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->