<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('partials/header.php'); ?>
<div class="main-wrap">
<section class="m-hero no-picture" data-aos="fade">
  <div class="m-hero__content" data-aos="fade-down">
    <h1 class="m-hero-title bigger"><?php echo $this->getArchiveTitle(); ?></h1>
    <p class="m-heading__description">
    <?php echo $this->getDescription(); ?>
    </p>
  </div>
</section>

  
  <main>
    <div class="l-content">
      <div class="l-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="l-grid centered">
        <?php $this->need('partials/loop.php'); ?>
        </div>
      </div>
      <?php $this->need('partials/pagination.php'); ?>
    </div>
  </main>
</div>
<?php $this->need('partials/footer.php'); ?>