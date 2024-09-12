<!DOCTYPE html>
<html lang="en">
@include('includes.head')
  <!-- wrapper -->
  <div id="smooth-wrapper" class="mil-wrapper" style="background-color: #1B1717">

    <!-- preloader -->
    <div class="mil-preloader">
        <div class="mil-load"></div>
        <p class="h2 mil-mb-30"><span class="mil-light mil-counter" data-number="100">100</span><span class="mil-light">%</span></p>
    </div>
    <!-- preloader end -->

    <!-- scroll progress -->
    <div class="mil-progress-track">
        <div class="mil-progress"></div>
    </div>
    <!-- scroll progress end -->

    <!-- back to top -->
    <div class="progress-wrap active-progress"></div>
<!-- removed overlay loading  -->

    @include('includes.header')
   @yield('content')
    @include('includes.footer')
</body>
</html>