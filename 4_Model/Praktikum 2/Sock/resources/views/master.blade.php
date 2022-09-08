<!DOCTYPE html>
<html lang="en">
   @include('layouts.css')
   <!-- Bagian judul -->
   <title>@yield('title')</title>
   
   <!-- Bagian body -->
   <body>
      <!-- Bagian loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('/images/loading.gif') }}" alt="#" /></div>
      </div>
      <!-- Akhir loader -->

      <!-- Bagian header -->
      <header>
         <!-- Header inner -->
        <div class="header_main">
         <div class="header_main">
         @include('layouts.header')
         </div>
        </div>
        <!-- Akhir header inner -->
      </header>
      <!-- Akhir header -->

      <!-- Bagian Content -->
      @yield('content')
      <!--Akhir Content -->

      <!-- Bagian Footer -->
      @include('layouts.js')
      
      <div class="copyright_text">
          @include('layouts.footer')
      </div>
</body>
</html>