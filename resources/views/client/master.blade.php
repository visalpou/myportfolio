<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('client.pages.head')
</head>

<body>
    <!-- Preloader -->
    {{-- @include('client.pages.preloader') --}}
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    @include('client.pages.get-pro-button')

    @include('client.pages.header') 
	@yield('main')
	@include('client.pages.footer')

    @include('client.pages.js')
</body>

</html>
