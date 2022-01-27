
@extends('layouts.master')
@section('content')
<!-- start sideber and content -->
             <div class="container margin-top-20" >
              <!-- start grid  div -->
               <div class="row">
                <!-- grid div part 1 -->
                    <div class="col-md-4">
                          @include('common.sideber') 
                    </div>
                 <!-- end grid div part 1 -->  

                  <!-- start grid div part 2 --> 
                    <div class="col-md-8">
                        <div class="widget">
                            <h2>Features Products</h2>
                            <div class="row">
                            	
                            	@foreach($products as $product)
                                <!-- card-1 -->
                                <div class="col-md-4">
                                    <!-- start card design-->
                                    <div class="card" >
                                    	@php $i=1; @endphp

                                    	
                                    	@foreach($product->images as $image)
                                    	  @if($i>0)
                                    	   
                                    	  <img class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image)}}" alt="Card image">
                                    	  @endif
                                    	  @php $i--; @endphp
                                    	@endforeach
                                      
                                        <div class="card-body">
                                          <h4 class="card-title">{{ $product->title }}</h4>
                                          <p class="card-text">{{ $product->price }}</p>
                                          <a href="#" class="btn btn-outline-secondary">Add to Card</a>
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-1 end -->
                         	    @endforeach
                               


                                  
                                 
                                
                            </div>
                        </div> 
                    </div>
                   <!-- end grid div part 2 --> 
               </div>
               <!-- end grid  div  -->
             </div>

             <!-- end sideber and content -->
@endsection
       