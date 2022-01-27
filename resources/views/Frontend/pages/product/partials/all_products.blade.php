<div class="row">
                              
                              @foreach($products as $product)
                                <!-- card-1 -->
                                <div class="col-md-4">
                                    <!-- start card design-->
                                    <div class="card" >
                                      @php $i=1; @endphp

                                      
                                      @foreach($product->images as $image)
                                        @if($i>0)
                                         <a href="{!! route('products.show', $product->slug) !!}">
                                        <img class="card-img-top feature-img" src="{{ asset('uploads/products/'. $image->image)}}" alt="{{ $product->title }}">
                                      </a>
                                        @endif
                                        @php $i--; @endphp
                                      @endforeach
                                      
                                        <div class="card-body">
                                          <h4 class="card-title">
                                           
                                             <a href="{!! route('products.show', $product->slug) !!}">{{ $product->title }}</a>
                                          </h4>
                                          <p class="card-text">{{ $product->price }} Taka</p>

                                          <p class="card-text">{{ $product->description }}</p>
                                          @include('Frontend.pages.product.partials.cart-button')
                                          <!-- <a href="#" class="btn btn-outline-secondary">Add to Card</a> -->
                                        </div>
                                    </div>
                                    <!-- end card design-->
                                </div>
                                <!-- card-1 end -->
                              @endforeach
                               


                                  
                                 
                                
</div>

<div class="mt-4 pagination">
  {{ $products->links() }}
</div>


