<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SALON  Appointment Application</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
 <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">L.R SALON</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="#appointment">Book Appointment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#ourservices">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#reviews">Testimonials</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Login</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- navigation -->
<section class="drybn-full-width-media-text" id="appointment">
  <div class="drybn-full-width-media-text__overlay">
    <div class="drybn-full-width-media-text__content">
      
      <div class="drybn-image">
        
      </div>            
                        <div class="row">
                          <div class="col-md-6 mx-auto">
                
                            
                       <form class="text-light bg-dark px-5 py-5">
                        <h2 class="text-danger">Welcome TO London Rogue Salon</h2>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                            <option value="2:00 to 3:00">2:00 to 3:00</option>
                                            <option value="3:00 to 4:00">3:00 to 4:00</option>
                                            <option value="4:00 to 5:00">4:00 to 5:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment For</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Service#1">Service#1</option>
                                            <option value="Service#2">Service#2</option>
                                            <option value="Service#3">Service#3</option>
                                            <option value="Service#4">Service#4</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-danger" value="Book Appointment" onsubmit="bookAppointment()">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
      <!--
      <div class="drybn-copy">
        <h1>Lorem Ipsum</h1>
        <h2>dolor sit amet do eiusmod</h2>
        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="drbn-button">
          <a href="" class="btn btn-success">Learn More</a>
        </div>
      </div>
      -->
    </div>
  </div>
</section>
        

   <section class="we-offer-area text-center bg-gray" id="ourservices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <br>
                        <h2>What we <span>Offer</span></h2>
                        <h4>Lorem Ipsum is simply dummy text</h4>
                    </div>
                </div>
            </div>
                <div class="row our-offer-items less-carousel">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <img src="images/wellness.jpg" alt="wellness" style="width: 120px; height:120px; border-radius: 50%; object-fit: cover;">
                            <h4>Wellness</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <img src="images/facial.jpg" alt="Face Treatment" style="width: 120px; height:120px; border-radius: 50%; object-fit: cover;">
                            <!--<i class="fas fa-dharmachakra"></i>-->
                            <h4>Facial Treatment</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <img src="images/hair_treatment.jpg" alt="Face Treatment" style="width: 120px; height:120px; border-radius: 50%; object-fit: cover;">
                            <h4>Hair Treatment</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <img src="images/hair_wash.jpg" alt="Face Treatment" style="width: 120px; height:120px; border-radius: 50%; object-fit: cover;">
                            <h4>Washing Services</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <img src="images/make_up.jpg" alt="Face Treatment" style="width: 120px; height:120px; border-radius: 50%; object-fit: cover;">
                            <h4>Make Up</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <img src="images/hair_cut.jpg" alt="" style="width: 120px; height:120px; border-radius: 50%; object-fit: cover;">
                            <h4>Hair Cut</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
        </div>
    </section>

    <section class="myreview" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">

    <div class="title">
      <h3 class="text-center">What Our Customers Say</h3>
      <div class="underline"></div>
    </div>

    <article class="review">
      <div class="img-container">
        <img src="https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg" alt="" id="person-img" />
      </div>

      <h4 id="author">sara jones</h4>
      <p id="job">University Lecturer</p>
      <p id="info">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
        asperiores debitis incidunt, eius earum ipsam cupiditate libero?
        Iste, doloremque nihil?
      </p>

      <!-- prev next buttons-->
      <div class="button-container">
        <button class="prev-btn btn">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="next-btn btn">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

    </article>
</div>
</div>
</div>

  </section>
        <!--footer starts from here-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i>London Rogue Salon</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Product</a></li>
                            <li><a href="">Benefits</a></li>
                            <li><a href="">Partners</a></li>
                            <li><a href="">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Documentation</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Legal Terms</a></li>
                            <li><a href="">About</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
    </html>