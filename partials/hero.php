<style>
.m-hero__picture {background-image: url(<?php $this->options->topimg() ?>);}
</style>
<?php if ($this->options->topimg): ?> 
<section class="m-hero with-picture" data-aos="fade">
  <div class="m-hero__picture"></div>
  <?php else: ?>
<section class="m-hero no-picture" data-aos="fade">
 <?php endif;?>
  <div class="m-hero__content" data-aos="fade-down">
    <h1 class="m-hero-title bigger"><?php $this->options->title() ?></h1>
    <p class="m-hero-description bigger"><?php $this->options->description() ?></p>
  </div>
</section>