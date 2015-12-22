<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HomePage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="col-md-offset-1 col-md-3 navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a id="img" class="navbar-brand" href="#">
                <img id="img" src ="img/logo.png" alt="logo">
                </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active">
                    <a href="#">
                      Inicio <span class="sr-only">(actual)</span>
                    </a>
                  </li>



                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portafolio <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Fotografias</a></li>
                      <li><a href="#">Videos</a></li>
                      <li><a href="#">wordpress</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">javascript</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Bootstrap</a></li>
                    </ul>

                    <li><a href="#">Acerca de mi</a></li>
                    <li><a href="#">Contactame</a></li>
                    <li><button id="btn" class=" btn-default btn-sm">Blog</button></li>
                  </li>
                </ul>

                 <form class="navbar-form navbar-left" role="search">
                  <button id= "btn2" type="submit" class="btn btn-default btn-search">
                  <img src ="img/search.png" alt="search">
                  </button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">css</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>

           <div class="row" id="header ">
        <div class="col-md-offset-1 col-md-10 ">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
              </li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img   width="1200" class="img-responsive" src ="img/fondo.png" alt="fondo">
                <div class="carousel-caption">
                  <H1>GOOD DESGIN IS GOOD BUSINESS</H1>
                  <P id="pn"><br><br>Bootstrap es un framework o conjunto de herramientas de software libre para diseño de sitios y aplicaciones web. Contiene plantillas de diseño con tipografía, formularios, botones, cuadros, menús de navegación y otros elementos de diseño basado en HTML y CSS, así como, extensiones de JavaScript opcionales adicionales.<br><br></P>
                  <button id= "btn3" type="submit" class="btn btn-default ">LEARN MORE</button>


                 <!--  Imagen 1 -->
                </div>
              </div>
              <div class="item">
                <img  width="1200" class="img-responsive" src ="img/fo1.jpg" alt="fondo1">
                <div class="carousel-caption">
                  <H1>GOOD DESGIN IS GOOD BUSINESS</H1>
                  <P id="pn"><br><br>Bootstrap fue desarrollado por Mark Otto y Jacbod Thornton de Twitter, como un marco de trabajo (framework) para fomentar la consistencia a través de herramientas internas. Antes de Bootstrap, se usaban varias librerías para el desarrollo de interfaces de usuario, las cuales guiaban a inconsistencias y a una carga de trabajo alta en su mantenimiento.<br><br></P>
                  <button id= "btn3" type="submit" class="btn btn-default ">LEARN MORE</button>
                  <!-- Imagen 2 -->
                </div>
              </div>
              <div class="item">
                <img  width="1200" class="img-responsive" src ="img/fo3.jpg" alt="fondo2">
                <div class="carousel-caption">
                  <H1>GOOD DESGIN IS GOOD BUSINESS</H1>
                  <P id="pn"><br><br>Bootstrap tiene un soporte relativamente incompleto para HTML5 y CSS 3, pero es compatible con la mayoría de los navegadores web. La información básica de compatibilidad de sitios web o aplicaciones está disponible para todos los dispositivos y navegadores<br><br></P>
                  <button id= "btn3" type="submit" class="btn btn-default ">LEARN MORE</button>
                  <!-- Imagen 3 -->
                  </div>
              </div>
              <div class="item">
                <img  width="1200" class="img-responsive" src ="img/fo2.jpg" alt="fondo3">
                <div class="carousel-caption">
                  <H1>GOOD DESGIN IS GOOD BUSINESS</H1>
                  <P id="pn"><br><br>Bootstrap es modular y consiste esencialmente en una serie de hojas de estilo LESS que implementan la variedad de componentes de la herramienta. Una hoja de estilo llamada bootstrap.less incluye los componentes de las hojas de estilo. Los desarrolladores pueden adaptar el mismo archivo de Bootstrap, seleccionando los componentes que deseen usar en su proyecto.<br><br></P>
                  <button id= "btn3" type="submit" class="btn btn-default ">LEARN MORE</button>
                 <!--  Imagen 4 -->
                  </div>
              </div>
              
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

       <div id="dos" class="row">
        <div class="col-md-offset-1 col-md-10" id="services">
          <a id="service" class="text-center" href="#">
                <img id="service" src ="img/services.jpeg" alt="logo " >
          </a>
        </div>
      </div>


      <div id="cuatro" class="row">
        <div class="col-md-offset-1 col-md-10" id="serv">

        <div class="row" id="contenido">
        <div class="col-md-3" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/servi.png" alt="logo " >
          </a>
          <p id="p1"><br>Web Design</p>
          <p id="p1"><br>Bootstrap es un framework o conjunto de herramientas de software libre para diseño de sitios.<A id="link" HREF="http://www.htmlpoint.com">Details...</A></p>
        </div>
        <div class="col-md-3" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/servi1.png" alt="logo " >
          </a>
          <p id="p1"><br>Search Optimization</p>
          <p id="p1"><br>Contiene plantillas de diseño con tipografía, formularios, botones, cuadros, menús de navegación y otros elementos de diseño. <A id="link" HREF="http://www.htmlpoint.com">Details...</A></p>
        </div>
        <div class="col-md-3" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/servi2.png" alt="logo " >
          </a>
          <p id="p1"><br>Online Shop</p>
          <p id="p1"><br>Bootstrap es modular y consiste  en una serie de hojas de estilo que implementan la variedad de componentes. <A id="link" HREF="http://www.htmlpoint.com">Details...</A></p>
        </div>
        <div class="col-md-3" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/servi3.png" alt="logo " >
          </a>
          <p id="p1"><br>Social Media</p>
          <p id="p1"><br>Los desarrolladores pueden adaptar el mismo archivo de Bootstrap, seleccionando los componentes que deseen usar . <A id="link" HREF="http://www.htmlpoint.com">Details...</A></p>
        </div>
      </div>
      </div>
      </div>


      <div id="cinco" class="row">
        <div class="col-md-offset-1 col-md-10" id="serv5">


          <div class="row">
            <div class="col-md-offset-0 col-md-8">
              <h3 id="h3"><br>OUR PORTFOLIO AWESOME  </h3>
            </div>
            <div class="col-md-3">
              <button id= "btn4" type="submit" class="btn btn-default ">MORE WORKS</button>
            </div>
          </div>
        <div class="row" id="contenido5">
        <div class="col-md-4" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/d1.png" alt="logo " >
          </a>
          <p id="p2"><br>Lorem Ipsum Dolar Sit Amet </p>
          <p id="p3"><br>Web design encompasses many different skills and disciplines.</p>
        </div>
        <div class="col-md-4" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/d1.png" alt="logo " >
          </a>
          <p id="p2"><br>Lorem Ipsum</p>
          <p id="p3"><br>Web design encompasses many different. </p>
        </div>
        <div class="col-md-4" id="centro">
          <a id="servicea" class="text-center" href="#">
                <img id="servicea" src ="img/d2.png" alt="logo " >
          </a>
          <p id="p2"><br>Ipsum Amet Lorem Sit </p>
          <p id="p3"><br>Web design encompasses many different skills and disciplines. </p>
          <br><br>
        </div>
      </div>
        </div>
      </div>


      <div id="seis" class="row">
        <div class="col-md-offset-1 col-md-10" id="serv6">


          <div class="row">
            <div class="col-md-12">
              <h2 id="h2"><br>WHAT WE OFFER  </h3>
            </div>
            <div class="col-md-12">
              <p id="p4" > Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh <br/>euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
          </div>

        

        <div class="row" id="contenido6">
        <div class="col-md-3" id="centro">
          <p id="p5"><br>Web Design</p>
          <p id="p6"><br>Bootstrap consiste en un framework o conjunto de herramientas de software libre para diseño de sitios.</p>
          <button id= "btn5" type="submit" class="btn btn-default ">Details</button>
        </div>
        <div class="col-md-3" id="centro">
          <p id="p5"><br>Search Optimization</p>
          <p id="p6"><br>Bootstrap consiste en un framework o conjunto de herramientas de software libre para diseño de sitios.<A id="link" HREF="http://www.htmlpoint.com">Details...</A></p>
        </div>
        <div class="col-md-3" id="centro">
          <p id="p5"><br>Online Shop</p>
          <p id="p6"><br>Bootstrap consiste en un framework o conjunto de herramientas de software libre para diseño de sitios.</p>
          <button id= "btn5" type="submit" class="btn btn-default ">Details</button>
          <br><br>
        </div>

        <div class="col-md-3" id="centro">
          <p id="p5"><br>Social Media</p>
          <p id="p6"><br>Bootstrap consiste en un framework o conjunto de herramientas de software libre para diseño de sitios.<A id="link" HREF="http://www.htmlpoint.com">>>></A></p>
          <br><br>
        </div>

      </div>
        </div>
      </div>

      <hr align="center" size="50" width="75%"/>

      <div id="seis" class="row">
        <div class="col-md-offset-1 col-md-10" id="serv6">


          <div class="row">
            <div class="col-md-12">
              <h2 id="h2"><br>TESTIMONIALS </h2>
            </div>
            <div class="col-md-12">
              <p id="p7" > " Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh <br/>euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "<br><br><br></p>
            </div>
          </div>

         <div class="row">
            <div class="col-md-offset-4 col-md-4">
              <p id="p8" > Joen Doe/ CEO of Lorelpsum</p>
            </div>
          </div>

           <div id="hj" class="col-md-offset-4 col-md-4">
            <nav class="navbar1 navbar-default">
            <div class="container-fluid">
              <div id="hj" class="navbar-header"></div>
              <div>
                <ul id="nav1" class="nav navbar-nav">
                  
                  <li><a href="#"><img id="img" src ="img/CONTACTO.png" alt="logo"></a></li>
                  <li class="active"><a href="#"><img id="img" src ="img/CONTACTO1.png" alt="logo"></a></li>
                  <li><a href="#"><img id="img" src ="img/CONTACTO2.png" alt="logo"></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

</div>


        <div id="siete" class="row">
        <div class="col-md-offset-1 col-md-10" id="serv7">


        <div class="row" id="contenido7">
        <div class="col-md-3" id="centro">
          <p id="p9"><br>TWITTER FEEDS</p>
          <p id="p15"><br><br>Check out this great theme item</p>
          <p id="p15"><A id="link" HREF="http://www.htmlpoint.com">https://twitter.com</A></p>
          <p id="p15">2 Weeks Ago</p>
          <hr align="center" size="50" width="100%"/>
          <p id="p15">Check out this great theme item for</p>
          <p id="p15"><A id="link" HREF="http://www.htmlpoint.com">https://twitter.com</A></p>
          <p id="p15">2 Weeks Ago</p>
          
          <hr align="center" size="50" width="100%"/>

          <p id="p15">Check out this great theme item for you</p>
          <p id="p15"><A id="link" HREF="http://www.htmlpoint.com">https://twitter.com</A></p>
          <p id="p15">2 Weeks Ago<br><br></p>

          
        </div>
        <div class="col-md-3" id="centro">
          <p id="p9"><br>NEWSLETTER</p><br>
          <p id="p10">Lorem ipsum dolor sit amet,consectetuer adipiscing elit dolor sit</p>
          
          <hr id="hrn" align="center" size="50" width="100%"/>
          <p id="p11"><br> <label for="nombre">Your Email Address </label><br></p>
          <p id="p10"><br> <input name="nombre" type="text" id="nombre" value=""><br></p>
          <button id= "btn5" type="submit" class="btn btn-default ">Sign Up</button>
          
      
        </div>
        <div class="col-md-3" id="centro">
          <p id="p9"><br>RECENT PROJECTS<br><br></p>
          <a id="serviced" class="text-center" href="#">
                <img id="serviced" src ="img/blanco.png" alt="logo " >
          </a>
          <p id="p10" >Skeltchy Business Card<BR>
          <A HREF="https://twitter.com/" style="color:#58ACFA"> https://twitter.com </A><BR>
            2 weeks ago</p>
          
          <hr id="hrn1 " align="center" size="50" width="100%"/>

          <a id="serviced" class="text-center" href="#">
                <img id="serviced" src ="img/blanco.png" alt="logo " >
          </a>
          <p id="p10" >Mesage Board in Nature<BR>
          <A HREF="https://twitter.com/" style="color:#58ACFA"> https://twitter.com </A><BR>
            2 weeks ago</p>
          
          <hr id="hrn1 " align="center" size="50" width="100%"/>

          <a id="serviced" class="text-center" href="#">
                <img id="serviced" src ="img/blanco.png" alt="logo " >
          </a>
          <p id="p10" >Website Design kit<BR>
          <A HREF="https://twitter.com/" style="color:#58ACFA"> https://twitter.com </A><BR>
            2 weeks ago</p>
          <br><br>
        </div>

        

        <div class="col-md-3" id="centro">

          <p id="p9"><br>CONTACT</p>
          <br>

          <a id="serviced" class="text-center" href="#">
                <img id="serviced" src ="img/e1.png" alt="logo " >
          </a>
           <p id="p10" >1 - 000 - 000 - 0000</p>
           <p id="p10" >1 - 000 - 000 - 0000</p>
        

          <a id="serviced" class="text-center" href="#">
                <img id="serviced" src ="img/e2.png" alt="logo " >
          </a>
           <p id="p10" >1 - 000 - 000 - 0000</p>
           <p id="p10" >1 - 000 - 000 - 0000</p>

          <a id="serviced" class="text-center" href="#">
                <img id="serviced" src ="img/e3.png" alt="logo " >
          </a>
          <p id="p10" >abcdefg@gmail.com</p>
           <p id="p10" >mnopqrsg@gmail.com</p>
        </div>

      </div>
        </div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>