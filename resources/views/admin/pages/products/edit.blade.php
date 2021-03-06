@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Edit New Products</h4>
                  
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
                <form method="post" action="{{ route('admin.products.update', $product->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('admin.partials.message')
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Name:</label>
                      <input type="text" class="form-control" name="product_title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->title }}">
                     
                    </div>

                     <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $product->description }}</textarea>
                  </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Price:</label>
                      <input type="number" class="form-control"name="price" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->price }}">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Quantity:</label>
                      <input type="number" class="form-control"name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->quantity }}">
                     
                    </div>
                  
                      <div class="form-group">
                      <label for="exampleInputFile">Upload Product Image:</label><br>
                      <input type="file" id="exampleInputFile" name="product_image[]">
                      <input type="file" id="exampleInputFile" name="product_image[]">
                      <input type="file" id="exampleInputFile" name="product_image[]">
                      
                    </div>             
                 
                  <button type="submit" class="btn btn-primary">Update Product</button>
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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        <!-- main-panel ends -->
      </div>
      @endsection