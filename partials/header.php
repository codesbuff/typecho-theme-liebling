<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      @font-face {
        font-family: 'icomoon';
        src: url("<?php $this->options->themeUrl('assets/fonts/icomoon.eot?jcg9f9'); ?>");
        src: url("<?php $this->options->themeUrl('assets/fonts/icomoon.eot?jcg9f9#iefix'); ?>") format('embedded-opentype'),
        url("<?php $this->options->themeUrl('assets/fonts/icomoon.ttf?jcg9f9'); ?>") format('truetype'),
        url("<?php $this->options->themeUrl('assets/fonts/icomoon.woff?jcg9f9'); ?>") format('woff'),
        url("<?php $this->options->themeUrl('assets/fonts/icomoon.svg?jcg9f9#icomoon'); ?>") format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/app.css'); ?>" media="screen" />
    <script>
      const ghostSearchApiKey = '85bc5848774a7256cf9f0febb7'
    </script>
    <script>
      WebFontConfig = {
        google: { families: ['Source+Sans+Pro:400,600,700&display=swap'] }
      };

      (function (d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
 </head>
<body class="home-template">
  <header class="m-header with-picture js-header">
    <div class="m-mobile-topbar" data-aos="fade-down">
      <button class="m-icon-button in-mobile-topbar js-open-menu" aria-label="Open menu">
        <span class="icon-menu"></span>
      </button>
    <?php if ($this->options->logoUrl): ?>
      <a href="<?php $this->options->siteUrl(); ?>" class="m-logo in-mobile-topbar">
        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>">
      </a>
      <?php else: ?>
      <a href="<?php $this->options->siteUrl(); ?>" class="m-site-name in-mobile-topbar">
        <?php $this->options->title() ?>
      </a>
      <?php endif; ?>
    <button class="m-icon-button in-mobile-topbar js-open-search" aria-label="Open search">
      <span class="icon-search"></span>
    </button>
  </div>

  <div class="m-menu js-menu">
    <button class="m-icon-button outlined as-close-menu js-close-menu" aria-label="Close menu">
      <span class="icon-close"></span>
    </button>
    <div class="m-menu__main" data-aos="fade-down">
      <div class="l-wrapper">
        <div class="m-nav">
          <nav class="m-nav__left">
            <ul role="submenu">
            <?php if ($this->options->logoUrl): ?>
                <li class="only-desktop" role="menuitem">
                  <a href="<?php $this->options->siteUrl(); ?>" class="m-logo">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>">
                  </a>
                </li>
                <?php else: ?>
                <li class="only-desktop" role="menuitem">
                  <a href="<?php $this->options->siteUrl(); ?>" class="m-site-name in-desktop-menu">
                    <?php $this->options->title() ?>
                  </a>
                </li>
            <?php endif; ?>
            <?php $this->need('partials/navigation.php'); ?>
              <li role="menuitem" class="js-submenu-option">
                <button class="m-icon-button in-menu-main more js-toggle-submenu" aria-label="Toggle submenu">
                  <span class="icon-more"></span>
                </button>
                <div class="m-submenu js-submenu">
                  <div class="l-wrapper in-submenu">
                    <section class="m-tags">
                      <h3 class="m-submenu-title">Tags</h3>
                      <ul>
                      <?php $this->widget('Widget_Metas_Tag_Cloud')->to($taglist); ?>
                      <?php while($taglist->next()): ?>              
                        <li>
                          <a href="<?php $taglist->permalink(); ?>"><?php $taglist->name(); ?></a>
                        </li>
                        <?php endwhile; ?>
                      </ul>
                    </section>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <div class="m-nav__right">
            <button class="m-icon-button in-menu-main js-open-search" aria-label="Open search">
              <span class="icon-search"></span>
            </button>
            <div class="m-toggle-darkmode js-tooltip" data-tippy-content="切换到暗色模式">
              <input type="checkbox" class="js-toggle-darkmode">
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="m-search js-search">
  <button class="m-icon-button outlined as-close-search js-close-search" aria-label="Close search">
    <span class="icon-close"></span>
  </button>
  <div class="m-search__content">
    <form class="m-search__form" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
      <fieldset>
        <span class="icon-search m-search-icon"></span>
        <input type="text" class="m-input in-search js-input-search" placeholder="输入关键词..." aria-label="Type to search">
      </fieldset>
    </form>
  </div>
</div>