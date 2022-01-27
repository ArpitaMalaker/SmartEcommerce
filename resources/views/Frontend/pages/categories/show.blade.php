
@extends('Frontend.layouts.master')
@section('content')
<!-- start sideber and content -->
             <div class="container margin-top-20" >
              <!-- start grid  div -->
               <div class="row">
                <!-- grid div part 1 -->
                    <div class="col-md-4">
                          @include('Frontend.common.sideber') 
                    </div>
                 <!-- end grid div part 1 -->  

                  <!-- start grid div part 2 --> 
                    <div class="col-md-8">
                        <div class="widget">
                      <h3> All Products in <span class="badge badge-info">{{ $category->name }} Category</span></h3>
                      @php
                      $products = $category->products()->paginate(9);
                      @endphp

                      @if ($products->count() > 0)
                        @include('Frontend.pages.product.partials.all_products')
                      @else
                        <div class="alert alert-warning">
                          No Products has added yet in this category !!
                        </div>
                      @endif

                            
                        </div> 
                         <div class="widget">

                        </div>
                    </div>
                   <!-- end grid div part 2 --> 
               </div>
               <!-- end grid  div  -->
             </div>

             <!-- end sideber and content -->
@endsection
       