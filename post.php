<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('partials/header.php'); ?>
<div class="main-wrap">
<?php if ($this->fields->thumb): ?> 
<style>
.m-hero__picture {background-image: url(<?php $this->fields->thumb() ?>);}
</style>
<section class="m-hero with-picture aos-init aos-animate" data-aos="fade">
    <div class="m-hero__picture in-post"></div>
    <div class="m-hero__content" data-aos="fade-down">
    <h1 class="m-hero-title bigger"><?php $this->title() ?></h1>
    <p class="m-heading__description"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></p>
  </div>
</section>
<?php else: ?>
<section class="m-hero no-picture" data-aos="fade">
  <div class="m-hero__content" data-aos="fade-down">
    <h1 class="m-hero-title bigger"><?php $this->title() ?></h1>
    <p class="m-heading__description"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></p>
  </div>
</section>
<?php endif;?>
  <main>
    <article>
      <div class="l-content in-post">
        <div class="l-wrapper in-post js-aos-wrapper" data-aos="fade-up" data-aos-delay="300">
          <div class="l-post-content js-progress-content">
           <!-- <header class="m-heading">
              <h1 class="m-heading__title in-post"><?php $this->title() ?></h1>
              <div class="m-heading__meta">
                <a href="<?php $this->author->permalink(); ?>" class="m-heading__meta__tag"><?php $this->author(); ?></a>
                <span class="m-heading__meta__divider">&bull;</span>
                <span class="m-heading__meta__time"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span>
              </div>
            </header> -->
            <div class="pos-relative js-post-content">
              <div class="m-share">
                <div class="m-share__content js-sticky">
                  <button class="m-icon-button filled in-share progress js-scrolltop" aria-label="Scroll to top">
                    <span class="icon-arrow-top"></span>
                    <svg>
                      <circle class="progress-ring__circle js-progress" fill="transparent" r="0" />
                    </svg>
                  </button>
                </div>
              </div>
              <?php $this->content(); ?>
            </div>
          </div>
        </div>

        <section class="m-recommended">
          <div class="l-wrapper in-recommended">
            <h3 class="m-section-title in-recommended">相关推荐</h3>
            <div class="m-recommended-articles">
              <div class="m-recommended-slider js-recommended-articles">
                  <?php $this->need('partials/tags.php'); ?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </article>
  </main>
</div>
<script defer src="<?php $this->options->themeUrl('assets/js/post.js'); ?>"></script>
<?php $this->need('partials/footer.php'); ?>