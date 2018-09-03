<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title></title>
  <style type="text/css">
    /** 
        Set the margins of the page to 0, so the footer and the header
        can be of the full height and width !
     **/
    @page {
      margin: 0cm 0cm;
    }

    /** Define now the real margins of every page in the PDF **/
 
    body {  
      display: block;
      position: relative;
      height:100%;
      width:100%;
      margin-top: 0.1cm;
      margin-left: 0cm;
      margin-right: 0cm;
      margin-bottom: 0cm;      
    }

    body::after {
      content: "";
      /*background:url('http://www.alfaplas.cl/wp-content/themes/alfaplas/assets/img/logo-alfaplas.png') 50% 50% no-repeat;*/
      opacity: 0.2;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      position: absolute;
      z-index: 1;  
      height:100%;
      width:100%;
    }    
  </style>
</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col-xs-12">
            @yield('content')
          </div>
      </div>
  </div>
</body>
</html>