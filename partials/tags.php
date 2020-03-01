<?php $this->related(3)->to($relatedPosts); ?>
  <?php while($relatedPosts->next()): ?>
    <div class="slick-slide slick-active">
      <div>
        <div class="m-recommended-slider__item">
          <?php if ($this->fields->thumb): ?> 
          <article class="m-article-card post">
              <div class="m-article-card__picture lozad" data-background-image="<?php $relatedPosts->fields->thumb() ?>">
              <?php else: ?>
            <article class="m-article-card no-picture post">
              <div class="m-article-card__picture">
              <?php endif;?>
              <a href="<?php $relatedPosts->permalink() ?>" class="m-article-card__picture-link" aria-label="Article"></a>
            </div>
              <div class="m-article-card__info no-tag">
              <a href="<?php $relatedPosts->permalink() ?>" class="m-article-card__info-link">
                <div>
                  <?php if ($this->fields->thumb): ?> 
                  <h2 class="m-article-card__title js-article-card-title" title="<?php $relatedPosts->title() ?>">
                  <?php else: ?>
                  <h2 class="m-article-card__title js-article-card-title js-article-card-title-no-image" title="<?php $relatedPosts->title() ?>">
                  <?php endif;?>
                    <?php $relatedPosts->title() ?>
                  </h2>
                </div>
                <div class="m-article-card__timestamp">
                  <span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span>
                  <span>&bull;</span>
                  <span><?php $relatedPosts->author(); ?></span>
                </div>
              </a>
            </div>
          </article>
        </div>
      </div>
    </div>
  <?php endwhile; ?>