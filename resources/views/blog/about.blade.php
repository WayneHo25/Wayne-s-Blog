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
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ page_image('safe-beach.png') }}" alt="Safe Beach" width="400" height="300">
                <a href="https://github.com/WayneHo25/Safe-Beach">
                    <strong>Safe Beach</strong>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ page_image('yeeplus-project.png') }}" alt="Yeeplus Project" width="400" height="300">
                <a href="https://github.com/WayneHo25/YeePlus">
                    <strong>Yeeplus Project</strong>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ page_image('sunglass-shop.png') }}" alt="Sunglass Shop" width="400" height="300">
                <a href="https://github.com/WayneHo25/Sunglass-Shop-Project">
                    <strong>Sunglass Shop</strong>
                </a>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ page_image('money-manager.png') }}" alt="Money Manager" width="400" height="300">
                <a href="https://github.com/WayneHo25/MoneyManager">
                    <strong>Money Manager</strong>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ page_image('liven.png') }}" alt="Liven" width="400" height="300">
                <a href="https://www.liven.com.au/">
                    <strong>Liven</strong>
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ page_image('parceltube.png') }}" alt="ParcelTube" width="400" height="300">
                <a href="http://www.parceltube.com.au/">
                    <strong>ParcelTube</strong>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection