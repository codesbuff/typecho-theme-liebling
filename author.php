<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('partials/header.php'); ?>
<div class="main-wrap">
<section class="m-hero no-picture" data-aos="fade">
  <div class="m-hero__content" data-aos="fade-down">
    <div class="m-hero-avatar" style="background-image: url(<?php $this->author->gravatar(200); ?>);"></div>
    <h1 class="m-hero-title"><?php $this->author(); ?></h1>
    <div class="m-hero__meta">
      <ul class="m-hero-social">
        <li>
          <a href="<?php $this->author('url'); ?>" target="_blank" rel="noopener" aria-label="Website">
            <span class="icon-globe"></span>
          </a>
        </li>
        <li>
          <a href="<?php $this->author('mail'); ?>" target="_blank" rel="noopener" aria-label="comments">
            <span class="icon-comments"></span>
          </a>
        </li>
      </ul>
    </div>
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