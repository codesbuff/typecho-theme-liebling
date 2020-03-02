<?php while($this->next()): ?>
<?php if ($this->sequence == 1): ?>
<div class="m-featured-slider">
    <div class="m-featured-slider__list js-featured-articles">
        <div class="m-featured-slider__list__item">
			<?php if ($this->fields->thumb): ?>
			<article class="m-featured-article">
			<?php else: ?>
			<article class="m-featured-article no-picture">
			<?php endif;?>
				<div class="m-featured-article__picture">
					<div class="lozad no-fade-animation" data-background-image="<?php $this->fields->thumb() ?>"></div>
				</div>
				<div class="m-featured-article__meta">
					<a href="<?php $this->author->permalink(); ?>" class="m-featured-article__author js-tooltip" aria-label="Authors" data-tippy-content="<?php $this->author(); ?>">
						<div style="background-image: url(<?php $this->options->themeUrl('assets/images/default-avatar-square-small.jpg'); ?>);"></div>
					</a>
				</div>
                <a href="<?php $this->permalink() ?>" class="m-featured-article__content">
                    <h1 class="m-featured-article__title js-featured-article-title" title="<?php $this->title() ?>"><?php $this->title() ?></h1>
                    <div class="m-featured-article__timestamp">
                    <span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span>
                    <span>&bull;</span>
                    <span><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
                    </div>
                </a>
            </article>
        </div>
    </div>
</div>
<?php else: ?>
<?php if ($this->fields->thumb): ?>
<article class="m-article-card">
	<div class="m-article-card__picture lozad" data-background-image="<?php $this->fields->thumb() ?>">
	<?php else: ?>
    <article class="m-article-card no-picture">
		<div class="m-article-card__picture">
	<?php endif;?>
		<a href="<?php $this->permalink() ?>" class="m-article-card__picture-link" aria-label="Article"></a>
		<a href="<?php $this->author->permalink(); ?>" class="m-article-card__author js-tooltip" aria-label="Authors" data-tippy-content="<?php $this->author(); ?>">
			<div style="background-image: url(<?php $this->options->themeUrl('assets/images/default-avatar-square-small.jpg'); ?>);"></div>
		</a>
		</div>
		<div class="m-article-card__info no-tag">
			<a href="<?php $this->permalink() ?>" class="m-article-card__info-link">
				<div>
					<h2 class="m-article-card__title js-article-card-title" title="<?php $this->title() ?>"><?php $this->title() ?></h2>
				</div>
				<div class="m-article-card__timestamp">
					<span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span>
					<span>&bull;</span>
					<span><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></span>
				</div>
			</a>
	</div>
</article>
<?php endif; ?>
<?php endwhile; ?> 