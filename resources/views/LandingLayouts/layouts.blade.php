<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">QWords</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>        

          <li class="dropdown"><a href="#"><span>Cloud Hosting</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($cloudhost as $c)               
              <li class="dropdown"><a href="#"><span>{{$c}}</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Explainer (Hot)</a></li>
                </ul>
              </li>              
              @endforeach              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Server</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
               <!-- //taro sini-->
              <li class="dropdown" id="array"><a href="#"><span id="arrayspan"></span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Explainer (Hot)</a></li>
                </ul>
              </li>              
                            
            </ul>
          </li>

          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>

          <li><a href="contact.html">Contact</a></li>
          <li><a href="index.html" class="getstarted">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  