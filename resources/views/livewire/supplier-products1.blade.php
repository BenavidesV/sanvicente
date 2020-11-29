<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="description" content="Pagina promocional de San Vicente Ciudad Quesada">
  <meta name="keywords" content="San Vicente, naturaleza, agricultura, turismo, turismo sostenible, bosque, Ciudad Quesada, comida, tours">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="author" content="Novlic">


  <!--site title-->
  <title>{{$supplier->name}} | San Vicente</title>


  <!-- ====================
  stylesheet
  ======================-->
  <!--bootstrap-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  {{--bxslider--}}

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>

<body style="">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
          <div class="flex">
            <div>
              <p class="text-sm">{{ session('message') }}</p>
            </div>
          </div>
        </div>
        @endif

        <div class="card w-75">
          <img class="card-img-top" src="{{ asset($supplier->image) }}"
          alt="Card image cap"
          sizes="(min-width: 1200px) 50vw,
          100vw"
          >
          <div class="card-body">
            <h5 class="card-title">{{ $supplier->name }}</h5>
            <p class="card-text">{{$supplier->email}}</p>
            <p class="card-text">{{$supplier->id}}</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset($product1->image) }}" title="product.description" :alt="product.name">
          <div class="card-body">
            <h4 class="card-title">{{ $product1->name }}</h4>
            <p class="card-text">{{ $product1->description }}</p>
          </div>
        </div>
        <div class="container-fluid">
          <h1 class="text-center mb-3">Además se ofrece</h1>
          <div id="demo" class="carousel slide" data-ride="carousel">

            @foreach($products as $index=>$product)
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset($product->image) }}" title="product.description" :alt="product.name" width="1100" height="500">
              </div>
            </div>
            @endforeach
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
              @foreach($products as $index=>$product)

              <div class="carousel-item col-md-4 active">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{ asset($product->image) }}" title="product.description" :alt="product.name">
                  <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><small class="text-muted">Producto calidad ---> {{ $supplier->name }}</small></p>
                  </div>
                </div>
              </div>

              @endforeach

              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--scripts-->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
