<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer class="m-footer">
  <div class="m-footer__content">
    <p class="m-footer-copyright">
      <span><?php $this->options->title(); ?> &copy; <?php echo date('Y'); ?></span>
      <span>&nbsp; &bull; &nbsp;</span>
      <span> Crafted with <a href="http://www.wolone.wang" target="_blank" rel="noopener">wolone</a></span>
    </p>
    <p class="m-footer-copyright">
    <a href="http://www.typecho.org" target="_blank" rel="noopener">由Typecho强力驱动</a>
    </p>
  </div>
</footer>
<script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver%2CPromise%2CArray.prototype.includes%2CString.prototype.endsWith%2CString.prototype.startsWith%2CObject.assign%2CNodeList.prototype.forEach"></script>
    <script defer src="https://unpkg.com/@tryghost/content-api@1.2.7/umd/content-api.min.js"></script>
    <script defer src="<?php $this->options->themeUrl('assets/js/manifest.js'); ?>"></script>
    <script defer src="<?php $this->options->themeUrl('assets/js/vendor.js'); ?>"></script>
    <script defer src="<?php $this->options->themeUrl('assets/js/app.js'); ?>"></script>
    <?php $this->footer(); ?>
  </body>
</html>