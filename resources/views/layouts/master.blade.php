<!DOCTYPE html>
<html>
    <head>
        <title>SmartEcommerce</title>
        <!-- style -->
        @include('common.style')
        <!-- end style -->
    </head>
        <body>
      <div class="wrapper">
         <!-- navber -->
             
             <!-- end navber -->
             @include('common.navber')
             <!-- start sideber + content -->
             @yield('content')
             <!-- end sideber + content -->
              <!-- footer -->
             @include('common.footer')
              <!-- end footer -->

      </div>

           <!-- start script -->
            @include('common.script')
           <!-- end script -->
        </body>
</html>