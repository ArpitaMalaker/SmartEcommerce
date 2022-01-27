<!DOCTYPE html>
<html>
    <head>
        <title>SmartEcommerce</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/3fd720e879.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
        <body>
      <div class="wrapper">
         <!-- navber -->
             <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4ed9d2;">
              <div class="container">
                <h2>SmartEcommerce</h2>
                
                <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                  </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item ">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                       </li>
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                         <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                              </div>
                        </div>
                    </form>
                </div>
               </div>
             </nav>
             <!-- end navber -->

             <!-- start sideber and content -->
             <div class="container margin-top-20" >
              <!-- start grid  div -->
               <div class="row">
                <!-- grid div part 1 -->
                    <div class="col-md-4">
                        <div class="list-group">
                          <a href="#" class="list-group-item list-group-item-action">First item</a>
                          <a href="#" class="list-group-item list-group-item-action">Second item</a>
                          <a href="#" class="list-group-item list-group-item-action">Third item</a>
                        </div>  
                    </div>
                 <!-- end grid div part 1 -->  

                  <!-- start grid div part 2 --> 
                    <div class="col-md-8">
                        <div class="widget">
                            <h2>Features Products</h2>
                            <div class="row">
                                <!-- card-1 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-1 end -->
                                <!-- card-2 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-2 end -->

                                 <!-- card-3 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-3 end -->

                                <!-- card-4 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-4 end -->


                                 <!-- card-5 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-5 end --> 
                                <!-- card-6 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-6 end --> 
                                <!-- card-7 -->
                                <div class="col-md-3">
                                    <!-- start card design-->
                                    <div class="card" >
                                      <img class="card-img-top feature-img" src="{{ asset('images/products/Samsung-Galaxy-S21-Ultra-image.jpg')}}" alt="Card image">
                                        <div class="card-body">
                                          <h4 class="card-title">Samsung galaxy s21 ultra</h4>
                                          <p class="card-text">৳114,999</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-7 end -->
                            </div>
                        </div> 
                    </div>
                   <!-- end grid div part 2 --> 
               </div>
               <!-- end grid  div  -->
             </div>

             <!-- end sideber and content -->

        <!-- footer -->
        <footer class="footer-style">    
         <p class="text-center">&Copy; 2021 All rights reserved | <b>SmartEcommerce</b></p>

        </footer>
        <!-- end footer -->





      </div>









           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        </body>
</html>