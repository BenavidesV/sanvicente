<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .fa {
    padding: 20px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }

  .fa:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }

  .fa-pinterest {
    background: #cb2027;
    color: white;
  }

  .fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }

  .fa-skype {
    background: #00aff0;
    color: white;
  }

  .fa-android {
    background: #a4c639;
    color: white;
  }

  .fa-dribbble {
    background: #ea4c89;
    color: white;
  }

  .fa-vimeo {
    background: #45bbff;
    color: white;
  }

  .fa-tumblr {
    background: #2c4762;
    color: white;
  }

  .fa-vine {
    background: #00b489;
    color: white;
  }

  .fa-foursquare {
    background: #45bbff;
    color: white;
  }

  .fa-stumbleupon {
    background: #eb4924;
    color: white;
  }

  .fa-flickr {
    background: #f40083;
    color: white;
  }

  .fa-yahoo {
    background: #430297;
    color: white;
  }

  .fa-soundcloud {
    background: #ff5500;
    color: white;
  }

  .fa-reddit {
    background: #ff5700;
    color: white;
  }

  .fa-rss {
    background: #ff6600;
    color: white;
  }
  body {


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
            <a href="/" title="Volver a la página principal"><i class="fas fa-arrow-left"></i></a>
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
              <!-- Add font awesome icons -->
              @if($supplier->social_network_1)
                <a href="{{$supplier->social_network_1}}" class="fa fa-facebook"></a>
              @endif
              @if($supplier->social_network_2)
                <a href="{{'https://wa.me/506'.$supplier->social_network_2.'?text=Hola%20necesito%20información'}}" class="fa fa-whatsapp"></a>
              @endif
              @if($supplier->social_network_3)
                <a href="{{$supplier->social_network_3}}" class="fa fa-instagram"></a>
              @endif
              @if($supplier->social_network_4)

              <a href="{{$supplier->social_network_4}}" class="fa fa-android"></a>
              @endif

              <!--<a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google"></a>
              <a href="#" class="fa fa-linkedin"></a>
              <a href="#" class="fa fa-youtube"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-pinterest"></a>
              <a href="#" class="fa fa-snapchat-ghost"></a>
              <a href="#" class="fa fa-skype"></a>
              <a href="#" class="fa fa-dribbble"></a>
              <a href="#" class="fa fa-vimeo"></a>
              <a href="#" class="fa fa-tumblr"></a>
              <a href="#" class="fa fa-vine"></a>
              <a href="#" class="fa fa-foursquare"></a>
              <a href="#" class="fa fa-stumbleupon"></a>
              <a href="#" class="fa fa-flickr"></a>
              <a href="#" class="fa fa-yahoo"></a>
              <a href="#" class="fa fa-reddit"></a>
              <a href="#" class="fa fa-rss"></a>-->
              <!--redes sociales, telefono, whatsAp-->
            </div>

          </div>

          <div class="container-fluid">
            <h2 class="text-center mb-3"><a href="/supplier/{{$supplier->id}}">Conocer más</a></h2>
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
