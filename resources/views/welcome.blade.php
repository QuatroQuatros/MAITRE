@extends('layouts.index');

@section('title', 'MAITRÊ')

@section('content')
<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
      <div class="swiper-wrapper text-sm-left">
        <div class="swiper-slide context-dark" data-slide-bg="/images/TESTETCC.png">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                  <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Na palma da sua MÃO!</span></h1>
                  <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">Busque conforme a sua vontade!</p>
                  <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">Veja os restaurantes</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/slide-1-1920x753.jpg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                  <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Os melhores restaurantes!</span></h1>
                  <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Aqui você obtem as melhores experiencias!</p><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">Veja os restaurantes</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination" data-bullet-custom="true"></div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev">
        <div class="preview">
          <div class="preview__img"></div>
        </div>
        <div class="swiper-button-arrow"></div>
      </div>
      <div class="swiper-button-next">
        <div class="swiper-button-arrow"></div>
        <div class="preview">
          <div class="preview__img"></div>
        </div>
      </div>
    </section>

    <section class="section section-sm bg-default">
      <div class="container">
        <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
          <article class="box-icon-megan wow fadeInUp">
            <div class="box-icon-megan-header">
              <div class="box-icon-megan-icon linearicons-pizza"></div>
            </div>
            <h5 class="box-icon-megan-title"><a href="#">Pizzas!</a></h5>
            <p class="box-icon-megan-text">Aqui você encontra restaurantes avaliados por nossos usúarios!</p>
          </article>
          <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
            <div class="box-icon-megan-header">
              <div class="box-icon-megan-icon linearicons-hamburger"></div>
            </div>
            <h5 class="box-icon-megan-title"><a href="#">Hamburguers!</a></h5>
            <p class="box-icon-megan-text">Pesquise conforme a sua localização!</p>
          </article>
          <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
            <div class="box-icon-megan-header">
              <div class="box-icon-megan-icon linearicons-fish"></div>
            </div>
            <h5 class="box-icon-megan-title"><a href="#">Peixes!</a></h5>
            <p class="box-icon-megan-text">Com a nossa tecnologia você não fica mais na fila de espera!</p>
          </article>
          <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
            <div class="box-icon-megan-header">
              <div class="box-icon-megan-icon linearicons-heart"></div>
            </div>
            <h5 class="box-icon-megan-title"><a href="#">Comidas saudáveis!</a></h5>
            <p class="box-icon-megan-text">Entregamos sempre o melhor a você!</p>
          </article>
        </div>
      </div>
    </section>
    
<br><br>
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Nossos Restaurantes</span></h3>
<br><br>


<section class="section section-md bg-default">
      <div class="container">
       
        <div class="row row-md row-30">
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Services Terri-->
              <article class="services-terri wow slideInUp">
                <div class="services-terri-figure"><img src="images/retaurante.jpg" alt="" width="370" height="278" />
                </div>
                <div class="services-terri-caption"><span class="services-terri-icon linearicons-leaf"></span>
                  <h5 class="services-terri-title"><a href="restaurante.php">NOME DO RESTAURANTE</a></h5>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Services Terri-->
              <article class="services-terri wow slideInDown">
                <div class="services-terri-figure"><img src="images/menu-2-370x278.jpg" alt="" width="370" height="278" />
                </div>
                <div class="services-terri-caption"><span class="services-terri-icon linearicons-pizza"></span>
                  <h5 class="services-terri-title"><a href="restaurante.php">NOME DO RESTAURANTE</a></h5>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Services Terri-->
              <article class="services-terri wow slideInUp">
                <div class="services-terri-figure"><img src="images/menu-3-370x278.jpg" alt="" width="370" height="278" />
                </div>
                <div class="services-terri-caption"><span class="services-terri-icon linearicons-hamburger"></span>
                  <h5 class="services-terri-title"><a href="restaurante.php">NOME DO RESTAURANTE</a></h5>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Services Terri-->
              <article class="services-terri wow slideInDown">
                <div class="services-terri-figure"><img src="images/menu-4-370x278.jpg" alt="" width="370" height="278" />
                </div>
                <div class="services-terri-caption"><span class="services-terri-icon linearicons-ice-cream"></span>
                  <h5 class="services-terri-title"><a href="restaurante.php">NOME DO RESTAURANTE</a></h5>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Services Terri-->
              <article class="services-terri wow slideInUp">
                <div class="services-terri-figure"><img src="images/menu-5-370x278.jpg" alt="" width="370" height="278" />
                </div>
                <div class="services-terri-caption"><span class="services-terri-icon linearicons-coffee-cup"></span>
                  <h5 class="services-terri-title"><a href="restaurante.php">NOME DO RESTAURANTE</a></h5>
                </div>
              </article>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="oh-desktop">
              <!-- Services Terri-->
              <article class="services-terri wow slideInDown">
                <div class="services-terri-figure"><img src="images/menu-6-370x278.jpg" alt="" width="370" height="278" />
                </div>
                <div class="services-terri-caption"><span class="services-terri-icon linearicons-steak"></span>
                  <h5 class="services-terri-title"><a href="restaurante.php">NOME DO RESTAURANTE</a></h5>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Section Services  Last section-->

<br><br>
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Nossos pratos mais conhecidos</span></h3>
<br><br>
    <section class="section section-last bg-default">
      <div class="container-fluid container-inset-0 isotope-wrap">
        <div class="row row-10 gutters-10 isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
          <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="images/gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-1-310x585.jpg" alt="" width="310" height="585" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">Best Ingredients</a></h6>
                  <div class="thumbnail-mary-location">Tasty Pizza</div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight"><a class="thumbnail-mary-figure" href="images/gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-2-631x587.jpg" alt="" width="631" height="587" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">Comfortable interior</a></h6>
                  <div class="thumbnail-mary-location">Modern Design</div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown"><a class="thumbnail-mary-figure" href="images/gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-3-311x289.jpg" alt="" width="311" height="289" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">quality Dishware</a></h6>
                  <div class="thumbnail-mary-location">Top-notch utensils</div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary wow slideInUp"><a class="thumbnail-mary-figure" href="images/gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-4-631x289.jpg" alt="" width="631" height="289" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">Refreshing cocktails</a></h6>
                  <div class="thumbnail-mary-location">Exclusive selection</div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp"><a class="thumbnail-mary-figure" href="images/gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-5-311x289.jpg" alt="" width="311" height="289" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">Exotic Salads</a></h6>
                  <div class="thumbnail-mary-location">Summer Taste</div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight"><a class="thumbnail-mary-figure" href="images/gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-6-311x289.jpg" alt="" width="311" height="289" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">All Types of pizza</a></h6>
                  <div class="thumbnail-mary-location">Special Recipes</div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">

          
            <!-- Thumbnail Mary-->
            <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="images/gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-7-311x289.jpg" alt="" width="311" height="289" /></a>
              <div class="thumbnail-mary-caption">
                <div>
                  <h6 class="thumbnail-mary-title"><a href="#">Diverse menu</a></h6>
                  <div class="thumbnail-mary-location">Pick Your Favorite dish</div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
@endsection

  
