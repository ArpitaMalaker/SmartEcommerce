@extends('Backend.layouts.master')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Create New Brand</h4>
                  
                                  <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownexport">
                                      <a class="dropdown-item" href="#">Export as PDF</a>
                                      <a class="dropdown-item" href="#">Export as DOCX</a>
                                      <a class="dropdown-item" href="#">Export as CDR</a>
                                    </div>
                                  </div>
                                
                              
                </div>
                <!-- //form -->
                <form method="post" action="{{ route('admin.brand.store')}}" enctype="multipart/form-data">
                    @csrf
                    @include('Backend.partials.message')
                  <div class="form-group">
                      <label for="exampleInputEmail1">Brand Name:</label>
                      <input type="text" class="form-control" name="brand_name" id="brand_name" aria-describedby="emailHelp" placeholder="Enter Brand Name">
                     
                    </div>

                     <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description (Optional)</label>
                    <textarea class="form-control" name="brand_description" id="brand_description" rows="3"></textarea>
                  </div>

                    
                    
                      <div class="form-group">
                      <label for="brand_image">Upload Brand Image (Optional)</label><br>
                      <input type="file" id="brand_image" name="brand_image">
                      
                      
                    </div>             
                 
                  <button type="submit" class="btn btn-primary">Add brand</button>
                </form>
              </div>
                            
            </div>
            <!-- Page Title Header Ends-->
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>

        <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        <!-- main-panel ends -->
      </div>
      @endsection