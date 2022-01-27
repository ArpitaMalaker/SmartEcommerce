@extends('Backend.layouts.master')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Manage Products</h4>
                  
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
                <div class="card-body">
                  
                  <table class="table table-hover table-striped">
                    <tr>
                      <th>#</th>
                      <th>Product Title</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Action</th>
                    </tr>

                    @foreach($products as $product)
                    <tr>
                      <td>#</td>
                      <td>{{ $product->title }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->quantity}}</td>
                      <td><a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-success">Edit</a>
                      <a href="#deleteModal{{ ($product->id) }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                      

                      <!-- Delete Modal -->
                          <div class="modal fade" id="deleteModal{{ ($product->id) }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{{ route('admin.products.delete', $product->id)}}" method="post" >
                                  @csrf
                                  <h5>Are you sure to delete? </h5>
                                  
                                 
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger" >Permanently Delete</button>
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                   </form>
                                </div>
                              </div>
                            </div>
                          </div>


                    </td>
                    </tr>
                    @endforeach
                  </table>



                </div>
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