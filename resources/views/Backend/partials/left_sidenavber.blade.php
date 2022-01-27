<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Arpita</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product-pages" aria-expanded="false" aria-controls="product-pages">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Products</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="product-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.products')}}"> Manage Products </a>
                    <a class="nav-link" href="{{ route('admin.products.create')}}"> Create Products </a>
                  </li>
                  
                </ul>
              </div>
            </li>



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="category-pages">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Category</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="category-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.categories')}}"> Manage Category </a>
                    <a class="nav-link" href="{{ route('admin.category.create')}}"> Create Category </a>
                  </li>
                  
                </ul>
              </div>
            </li>


             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Manage Brand</span>
                <i class="menu-arrow"></i>
              </a>
                     <div class="collapse" id="brand-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands') }}">Manage Brand</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Brand</a></li>
                  </ul>
              </div>
            </li>
                  
                   <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png"> <span class="menu-title">
                      Manage Divisions</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="division-pages">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.divisions') }}">Manage Division</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.division.create') }}">Add Division</a></li>
                        </ul>
                    </div>
                  </li>


                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png"> <span class="menu-title">
                    Manage Districts</span><i class="menu-arrow"></i></a>
                  <div class="collapse" id="district-pages">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.districts') }}">Manage Districts</a></li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.district.create') }}">Add District</a></li>
                      </ul>
                  </div>
                </li>



                </ul>
              
        </nav>