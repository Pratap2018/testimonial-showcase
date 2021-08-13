<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="testimony.png" type="image/gif" sizes="16x16">

    

    <title>Testomonial Showcase</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!-- Jag Theme CSS -->
    <link href="css/theme-1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .layout-list {
            right: 10px;
            top: 40px;
            text-align: center;
        }

        .layout-list a {
            display: inline-block;
        }

        .layout-list img {
            max-width: 100px;
            margin: 10px;
            border: 1px solid #ccc;
            padding: 5px;
            height: 70px;
        }

    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <h1 class="text-center">Testomonial Showcase</h1>
    <br>


    <!-- Grid Demo 2 -->
    <div class="container">
        <div class="row">
            <br><br>
            <div class="jag-tst-theme-1 jag-tst-theme-orange jag-equalheight">
                @foreach ($data as $d )
                    
                
				<div class="col-md-4 jag-tst-col">
                    <div class="jag-tst-wrapper">
                        <div class="jag-tst-color-bg"></div>
                        <div class="jag-tst-avatar">
                            <img src= {{ asset('storage/img/'.$d->imagepath) }} class="img-responsive" alt="">
                        </div>
                        <div class="jag-tst-details">
                            <div class="jag-name">{{$d->name.' '.$d->surname}}</div>
                            <div class="jag-designation"> {{'- '.$d->position}} </div>
                            <div class="jag-rating">
                                @for ($r=0 ;$r<$d->rating;$r++ )
                                                                   
                                 <i class="fa fa-star"></i>
                                        @endfor
                                @for ($r=0 ;$r<5-$d->rating;$r++ )
                                                                   
                                        <i class="fa fa-star-o"></i>
                                        @endfor
                                
                            </div>
                            <hr>
                            <div class="jag-testimonial-title">{{$d->experience_title}}</div>
                            <div class="jag-message">
                                <i class="fa fa-quote-left"></i>
                                {{$d->experience_details}}

                            </div>
                        </div>
                    </div>
                </div>
                
              @endforeach
                             
                            
                
                
                
                
                

            </div>
        </div>
    </div>

    <br><br><br>
    <!-- Jquery -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script src="js/jquery.matchHeight.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
