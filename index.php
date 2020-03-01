<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho Replica Theme 
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('partials/header.php');
 ?>

<div class="main-wrap">
<?php $this->need('partials/hero.php'); ?>
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
<script defer src="<?php $this->options->themeUrl('assets/js/home.js'); ?>"></script>
<?php $this->need('partials/footer.php'); ?>