@extends('Backend.layouts.master')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Edit New Category</h4>
                  
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
                <form method="post" action="{{ route('admin.category.update', $categories->id)}}" enctype="multipart/form-data">
                    @csrf
                    @include('Backend.partials.message')
                  <div class="form-group">
                      <label for="exampleInputEmail1">Category Name:</label>
                      <input type="text" class="form-control" name="category_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $categories->name }}">
                     
                    </div>

                     <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description (Optional)</label>
                    <textarea class="form-control" name="category_description" id="exampleFormControlTextarea1" rows="3">{{ $categories->description }}</textarea>
                  </div>

                    
                     <div class="form-group">
                    <label for="exampleInputPassword1">Parent Category (Optional)</label>
                    
                    <select class="form-control" name="parent_id">
                      <option value="">Please Select a Main Category</option>
                      @foreach($main_categories as $category)
                      <option value="{{ $category->id }}" {{ $category->id == $categories->parent_id ? 'selected' : ''}}>{{ $category->name}}</option>
                      @endforeach

                    </select>
                  </div>
                  
                      <div class="form-group">
                      <label for="old_image">Old Category Image:</label><br>
                      <img src="{{ asset('images/categories/' .$categories->image) }}" width="100"><br>
                       <label for="new_image">Upload New Category Image (Optional)</label><br>
                      <input type="file" id="new_image" name="category_image" >
                      
                      
                    </div>             
                 
                  <button type="submit" class="btn btn-success">Update Category</button>
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