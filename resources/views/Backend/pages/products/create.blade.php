@extends('Backend.layouts.master')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Create New Products</h4>
                  
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
                <form method="post" action="{{ route('admin.products.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('Backend.partials.message')
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Name:</label>
                      <input type="text" class="form-control" name="product_title" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                    </div>

                     <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description:</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Price:</label>
                      <input type="number" class="form-control"name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Quantity:</label>
                      <input type="number" class="form-control"name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                    </div>
                      
                     <div class="form-group">
                        <label for="exampleInputEmail1">Select Category</label>
                        <select class="form-control" name="category_id">
                          <option value="">Please select a category for the product</option>
                          @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>

                            @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                              <option value="{{ $child->id }}"> ------> {{ $child->name }}</option>

                            @endforeach

                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Brand</label>
                        <select class="form-control" name="brand_id">
                          <option value="">Please select a brand for the product</option>
                          @foreach (App\Models\Brand::orderBy('name', 'asc')->get() as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                      <label for="exampleInputFile">Upload Product Image:</label><br>
                      <input type="file" id="exampleInputFile" name="product_image[]">
                      <input type="file" id="exampleInputFile" name="product_image[]">
                      <input type="file" id="exampleInputFile" name="product_image[]">
                      
                    </div>             
                 
                  <button type="submit" class="btn btn-primary">Add Product</button>
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