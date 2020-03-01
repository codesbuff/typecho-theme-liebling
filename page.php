<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('partials/header.php'); ?>
  <div class="main-wrap">
  <section class="m-hero no-picture" data-aos="fade">
  <div class="m-hero__content" data-aos="fade-down">
    <h1 class="m-hero-title"><?php $this->title() ?></h1>
  </div>
  </section>
    <main>
      <article>
        <div class="l-content">
          <div class="l-wrapper in-post" data-aos="fade-up" data-aos-delay="300">
            <div class="l-post-content">
              <div class="pos-relative js-post-content">
              <?php $this->content(); ?>
              </div>
            </div>
          </div>
        </div>
      </article>
    </main>
  </div>
<script defer src="<?php $this->options->themeUrl('assets/js/page.js'); ?>"></script>
<?php $this->need('partials/footer.php'); ?>