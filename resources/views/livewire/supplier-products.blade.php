<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="description" content="Pagina promocional de San Vicente Ciudad Quesada">
  <meta name="keywords" content="San Vicente, naturaleza, agricultura, turismo,
  turismo sostenible, bosque, Ciudad Quesada, comida, tours, cultura, natural,
  gente, comunidad">
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
  body {

    background-image: url("/sanvicente.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  </style>
</head>

<body>
  <div class="py-12" id="test">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="big-body overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
          <div class="flex">
            <div>
              <p class="text-sm">{{ session('message') }}</p>
            </div>
          </div>
        </div>
        @endif
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <div class="card render-sv">
          <div class="card">
            <a href="/" title="Volver a la página principal"><i class="fas fa-long-arrow-alt-left"></i></a>
            <div class="card-header text-center">
              Información del producto
            </div>

            <img class="card-img-top img img-fluid top-space" src="{{ asset($product1->image) }}" title="product.description" :alt="product.name">
            <div class="card-body text-center">
              <h4 class="card-title">{{ $product1->name }}</h4>
              <p class="card-text">{{ $product1->description }}</p>
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
              Contacto
            </div>
            <div class="card-body">
              <img alt="supplier.name" class=" img-rounded card-img-top img" src="{{ asset($supplier->profile_photo_url) }}" />

              <h5 class="card-title">{{ $supplier->name }}</h5>
              <p class="card-text">{{ $supplier->email }}</p>
              <!--redes sociales, telefono, whatsAp-->
            </div>

          </div>

          <div class="container-fluid">
            <h2 class="text-center mb-3">Además ofrece</h2>
            <div class="container">
              <div class="row">
                <div class="row">
                  <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                      <a class="left fa fa-chevron-left btn btn" href="#carousel-example"
                      data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example"
                      data-slide="next"></a>
                    </div>
                  </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="row">
                        @foreach($products as $index=>$product)
                        @if ($product->id != $product1->id)
                        <div class="col-sm-3">
                          <div class="col-item">
                            <div class="info">
                              <div class="row">
                                <div class="price col-md-6">
                                  <h5>{{ $product->name }}</h5>
                                </div>
                                <div class="rating hidden-sm col-md-6">
                                  <i class="fas fa-exclamation"></i>
                                </div>
                              </div>
                            </div>
                            <div class="photo">
                              <img src="{{ asset($product->image) }}" title="product.description" :alt="product.name" class="img-responsive" />
                            </div>
                            <div class="info">
                              <div class="separator clear-left">
                                <p class="btn-add">
                                  {{$product->description}}
                                </p>
                              </div>
                              <div class="clearfix">
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif

                        @endforeach
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
    .col-item
    {
      border: 2px solid #2323A1;
      border-radius: 5px;
      background: #FFF;
    }
    .col-item .photo img
    {
      margin: 0 auto;
      width: 100%;
    }

    .col-item .info
    {
      padding: 10px;
      border-radius: 0 0 5px 5px;
      margin-top: 1px;
    }
    .col-item:hover .info {
      background-color: rgba(215, 215, 244, 0.5);
    }
    .col-item .price
    {
      /*width: 50%;*/
      float: left;
      margin-top: 5px;
    }

    .col-item .price h5
    {
      line-height: 20px;
      margin: 0;
    }

    .price-text-color
    {
      color: #00990E;
    }

    .col-item .info .rating
    {
      color: #003399;
    }

    .col-item .rating
    {
      /*width: 50%;*/
      float: left;
      font-size: 17px;
      text-align: right;
      line-height: 52px;
      margin-bottom: 10px;
      height: 52px;
    }

    .col-item .separator
    {
      border-top: 1px solid #FFCCCC;
    }

    .clear-left
    {
      clear: left;
    }

    .col-item .separator p
    {
      line-height: 20px;
      margin-bottom: 0;
      margin-top: 10px;
      text-align: center;
    }

    .col-item .separator p i
    {
      margin-right: 5px;
    }
    .col-item .btn-add
    {
      width: 50%;
      float: left;
    }

    .col-item .btn-add
    {
      border-right: 1px solid #CC9999;
    }

    .col-item .btn-details
    {
      width: 50%;
      float: left;
      padding-left: 10px;
    }
    .controls
    {
      margin-top: 20px;
    }
    [data-slide="prev"]
    {
      margin-right: 10px;
    }
    .img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .card {
      /*margin: 2% auto; /* Added */
      float: center; /* Added */
      /*margin-bottom: 10rem; /* Added */

    }
    .top-space{
      margin-top: 1%
    }
    .big-body{
      /*background-image: url("/sanvicente.jpg");*/
      background-image: url("/assets/hideaway.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    @media only screen and (min-width: 600px) {
      .render-sv{
        max-width: 50%;
        margin-left: 25%;
      }
    }

    </style>

    <!--scripts-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
  </html>