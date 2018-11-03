@extends('blog.layouts.master', ['meta_description' => 'About'])

@section('page-header')
  <header class="intro-header"
          style="background-image: url('{{ page_image('about-bg.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>About Me</h1>
            <hr class="small">
            <h2 class="subheading">
              This is what I do.
            </h2>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

      </div>
    </div>
  </div>
@endsection