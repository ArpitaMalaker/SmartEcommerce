<!DOCTYPE html>
<html>
    <head>
        <title>
    @yield('title', 'SmartEcommerce')
  </title>
        <!-- style -->
        @include('Frontend.common.style')
        <!-- end style -->
    </head>
        <body>
      <div class="wrapper">
         <!-- navber -->
             
             <!-- end navber -->
             @include('Frontend.common.navber')
             @include('Frontend.common.message')
             <!-- start sideber + content -->
             @yield('content')
             <!-- end sideber + content -->
              <!-- footer -->
             @include('Frontend.common.footer')
              <!-- end footer -->

      </div>

           <!-- start script -->
            @include('Frontend.common.script')
            @yield('scripts')
           <!-- end script -->
        </body>
</html>