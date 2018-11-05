<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $meta_description }}">
  <meta name="author" content="{{ config('blog.author') }}">

  <title>{{ config('blog.title') }}</title>

  {{-- Styles --}}
  <link href="/assets/css/blog.css" rel="stylesheet">
  @yield('styles')

  {{-- HTML5 Shim and Respond.js for IE8 support --}}
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
        background-color: #eeeeee;
    }
    .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
    }
    .thumbnail a:link {
      font-size:18px;
      font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      font-weight: 500;
    }
    .thumbnail a:hover {
      text-decoration: none;
    }
  </style>
</head>
<body>
@include('blog.partials.page-nav')

@yield('page-header')
@yield('content')

@include('blog.partials.page-footer')

{{-- Scripts --}}
<script src="/assets/js/blog.js"></script>
@yield('scripts')

</body>
</html>