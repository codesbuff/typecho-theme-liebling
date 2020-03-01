<?php
/**
 * 美观 干净 易用
 * 
 * @package Typecho-Theme-Liebling 
 * @author wolone
 * @version 1.0
 * @link http://www.wolone.wang
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