<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('partials/header.php'); ?>
<main class="l-fullscreen">
  <section class="l-fullscreen__content" data-aos="fade-up" data-aos-delay="300">
    <h1 class="m-404-title">404</h1>
    <p class="m-404-subtitle">未找到页面</p>
    <p class="m-404-text">
    非常抱歉, 页面找不到了.
    </p>
    <a href="<?php $this->options->siteUrl(); ?>" class="m-button outlined">返回首页</a>
  </section>
</main>
<?php $this->need('partials/footer.php'); ?>