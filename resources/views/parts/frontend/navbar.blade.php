    <nav class="navbar ownmenu">
      <div class="container"> 
        
        <!-- Categories -->
        <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i>Marcas </a>
          <div class="cate-bar-in">
            <div id="cater" class="collapse">
              <ul>
                  @foreach( $brands as $brand )
                    <li><a href="#.">{{ $brand->brand_name }}</a></li>
                  @endforeach
                  <!--<li><a href="#."> Giorgio Armani</a></li>
                  <li><a href="#."> Gucci</a></li>
                  <li><a href="#."> Bannana Republic</a></li>
                  <li class="sub-menu"><a href="#."> Lacoste</a>
                    <ul>
                      <li><a href="#."> L'Homme Lacoste Timeless</a></li>
                      <li><a href="#."> L'Homme Lacoste Intense Eau</a></li>
                      <li><a href="#."> French Panache per Lui</a>
                    </ul>
                  </li>
                  <li><a href="#."> Guess</a></li>
                  <li><a href="#."> Hugo boss</a></li>
                  <li><a href="#."> Tommy Hilfiger</a></li>
                  <li><a href="#."> Oscar de la Renta</a></li>
                  <li><a href="#."> Carolina Herrera</a></li>
                </ul>-->
            </div>
          </div>
        </div>
        
        <!-- Navbar Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <!-- Mega Menu Nav -->
            <li class="dropdown megamenu"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Perfumes </a>
              <div class="dropdown-menu animated-2s fadeInUpHalf">
                <div class="mega-inside">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6>Hombre</h6>
                      <ul>
                        <!--<li><a href="#."> Cell Phones & Accessories </a></li>
                        <li><a href="#."> Carrier Phones </a></li>
                        <li><a href="#."> Unlocked Phones </a></li>
                        <li><a href="#."> Prime Exclusive Phones </a></li>
                        <li><a href="#."> Accessories </a></li>
                        <li><a href="#."> Cases </a></li>
                        <li><a href="#."> Best Sellers </a></li>
                        <li><a href="#."> Deals </a></li>
                        <li><a href="#."> All Electronics </a></li>-->
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h6>Mujer</h6>
                      <ul>
                        <!--<li><a href="#."> Computers & Tablets</a></li>
                        <li><a href="#."> Monitors</a></li>
                        <li><a href="#."> Laptops & tablets</a></li>
                        <li><a href="#."> Networking</a></li>
                        <li><a href="#."> Drives & Storage</a></li>
                        <li><a href="#."> Computer Parts & Components</a></li>
                        <li><a href="#."> Printers & Ink</a></li>
                        <li><a href="#."> Office & School Supplies </a></li>-->
                      </ul>
                    </div>
                    <div class="col-sm-4"> 
                      <!--<img class=" nav-img" src="images/navi-img.png" alt="" > -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Mega Menu Nav -->
            <li class="dropdown megamenu"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Relojes </a>
              <div class="dropdown-menu animated-2s fadeInUpHalf">
                <div class="mega-inside">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6>Hombre</h6>
                      <ul>
                        <!--<li><a href="#."> Cell Phones & Accessories </a></li>
                        <li><a href="#."> Carrier Phones </a></li>
                        <li><a href="#."> Unlocked Phones </a></li>
                        <li><a href="#."> Prime Exclusive Phones </a></li>
                        <li><a href="#."> Accessories </a></li>
                        <li><a href="#."> Cases </a></li>
                        <li><a href="#."> Best Sellers </a></li>
                        <li><a href="#."> Deals </a></li>
                        <li><a href="#."> All Electronics </a></li>-->
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h6>Mujer</h6>
                      <ul>
                        <!--<li><a href="#."> Computers & Tablets</a></li>
                        <li><a href="#."> Monitors</a></li>
                        <li><a href="#."> Laptops & tablets</a></li>
                        <li><a href="#."> Networking</a></li>
                        <li><a href="#."> Drives & Storage</a></li>
                        <li><a href="#."> Computer Parts & Components</a></li>
                        <li><a href="#."> Printers & Ink</a></li>
                        <li><a href="#."> Office & School Supplies </a></li>-->
                      </ul>
                    </div>
                    <div class="col-sm-4"> 
                      <!--<img class=" nav-img" src="images/navi-img.png" alt="" > -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="dropdown megamenu"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Accesorios </a>
              <div class="dropdown-menu animated-2s fadeInUpHalf">
                <div class="mega-inside">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6>Hombre</h6>
                      <ul>
                        <li><a href="#."> Lentes </a></li>
                        <li><a href="#."> Billeteras </a></li>
                      </ul>
                    </div>
                    <div class="col-sm-3">
                      <h6>Mujer</h6>
                      <ul>
                        <li><a href="#."> Aretes</a></li>
                        <li><a href="#."> Pulseras</a></li>
                        <li><a href="#."> Fajas </a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4"> 
                      <!--<img class=" nav-img" src="images/navi-img.png" alt="" > -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!--<li> <a href="shop.html"> </a></li>-->
          </ul>
        </div>
        
        <!-- NAV RIGHT -->
        <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Telefono:</strong> (+504) 3182-0911</span> </div>
      </div>
    </nav>