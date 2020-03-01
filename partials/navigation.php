
<!-- 导航菜单 -->
<li class="nav<?php if($this->is('index')): ?> nav-current<?php endif; ?>">
  <a href="<?php $this->options->siteUrl(); ?>">首页</a>
</li>

<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
<?php while($categorys->next()): ?>
<li class="nav<?php if($this->is('category', $categorys->slug)): ?> nav-current<?php endif; ?>">
  <a href="<?php $categorys->permalink(); ?>"><?php $categorys->name(); ?></a>
</li>
<?php endwhile; ?>

<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
<li class="nav<?php if($this->is('page', $pages->slug)): ?> nav-current<?php endif; ?>">
  <a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
</li>
<?php endwhile; ?>