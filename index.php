<?php get_header(); ?>

<section id='home'>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block" src="<?php echo the_field('carousel_first_image') ?>" alt="First slide" width="100%" >
        <h1 class='carousel-caption-service title'><?php echo the_field('text_first_image') ?></h1>
      </div>
      <?php if(have_rows('caroulsel_intro')): while(have_rows('caroulsel_intro')) : the_row(); ?>
        <div class="carousel-item">
          <img class="d-block" src="<?php echo the_sub_field('img_carrousel') ?>" alt="First slide" width="100%">
          <h1 class='carousel-caption-service title'><?php echo the_sub_field('text_carousel') ?></h1>
        </div>
      <?php endwhile; else : endif; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section id='about' class='container'>
  <div class='about-content'>
    <h1 class='title-about title title-sections'><?php echo the_field('about_title') ?></h1>
    <p><?php echo the_field('description_about') ?></p>
  </div>
  <div class='img-about'>
    <img src="<?php echo the_field('image_about') ?>" alt="work people">
  </div>
</section>

<section id='services'>
  <div class='container'>
    <h1 class='title-services title-sections title'><?php echo the_field('services_title') ?></h1>

    <div class='services-container'>
    <?php if(have_rows('service_block')): while(have_rows('service_block')) : the_row(); ?>
      <div class='services-block'>
        <div class='circulo'>
        <img src="<?php echo the_sub_field('services_icon') ?>" alt="service icon">
        </div>
        <h2><?php echo the_sub_field('services_subtitle') ?></h2>
        <p><?php echo the_sub_field('services_description') ?></p>
      </div>
    <?php endwhile; else : endif; ?>
    </div>
  </div>
</section>

<section id='gallery' class='container'>
  <h1 class='title-gallery title-sections title'><?php echo the_field('gallery_title') ?></h1>
  <div class='wapper-gallery'>
    <?php if(have_rows('gallery_imgs')): while(have_rows('gallery_imgs')) : the_row(); ?>
      <div class='gallery-page'>
        <?php if(have_rows('gallery_img_page')): while(have_rows('gallery_img_page')) : the_row(); ?>
          <figure class='itemGallery item<?php echo the_sub_field('num_img_gallery') ?>'>
            <img src="<?php echo the_sub_field('img_gallery') ?>" alt="" class='imgGallery' onclick="openModal();currentSlide(<?php echo the_sub_field('num_img_gallery') ?>)">
          </figure>
        <?php endwhile; else : endif; ?>

              <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">
            <?php if(have_rows('gallery_img_page')): while(have_rows('gallery_img_page')) : the_row(); ?>          
              <div class="mySlides">
                <img src="<?php echo the_sub_field('img_gallery') ?>" width="100%">
                <div class="caption-container">
                <p id="caption"><?php echo the_sub_field('captions_gallery') ?></p>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    <?php endwhile; else : endif; ?>
    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</section>

<section id='contact'>
    <div class='container'>
      <h1 class='title-contact title-sections title'><?php echo the_field('contact_title') ?></h1>

      <div class='content-contact'>
        <section class='working-hour'>
            <h2>Working Hours</h2>
            <div id="open-hours"></div>
            <script>
              const hours = {
                "Monday":     { start: 700, end: 1900 },
                "Tuesday":    { start: 700, end: 1900 },
                "Wednesday":  { start: 700, end: 1900 },
                "Thursday":   { start: 700, end: 1900 },
                "Friday":     { start: 700, end: 1900 },
                "Saturday":   { start: 700, end: 1900 },
                "Sunday":     { start: 800, end: 1400}
              }

              OpenHours.generateTime(hours)
            </script>
            <p>(805) 243-8842</p>
            <a href="<?php echo the_field('link_instagram') ?>"><img src="<?php echo the_field('icone_instagram') ?>" alt=""></a>
        </section>
        <form action="" class='form'>
          <div>
            <label for="name">Name</label>
            <input type="text" id='name' name='name'>
          </div>
          <div>
            <label for="number">Phone Number</label>
            <input type="text" id='number' name='number'>
          </div>
          <div class='culuna'>
            <label for="email">E-mail</label>
            <input type="email" id='email' name='email' >
          </div>
          <div class='culuna'>
            <label for="msg">Mensagem:</label>
            <textarea id="msg"></textarea>
          </div>
          <div class="button">
            <button type="submit">Send message</button>
          </div>
        </form>
      </div>
</section>
<?php get_footer(); ?>