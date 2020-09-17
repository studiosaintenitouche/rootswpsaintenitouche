<div class="posts-list__item">
    <div class="article article--preview preview--<?php echo get_primary_category_slug(get_the_category()) ;?>">
    <a class="article__link" href="<?php the_permalink() ;?>">
        <div class="article__image-container">
        <?php if ( has_post_thumbnail() ) : ?>
        <img class="article__image images_loaded" src="<?php the_post_thumbnail_url('post-list');?>">
        <?php else : ; ?>
        <img class="article__image" src="<?= get_template_directory_uri() . '/assets/images/elements/placeholder_1-1.jpg'; ?>">
<?php endif; ?> 
            
        </div>
        <div class="article__title-container">
            <div class="article__title-inner-container">
                <div class="article__category-date">
                    <div class="article__category">/<?php echo get_primary_category_name(get_the_category());?></div>
                    <div class="article__date"><?php the_time('j F Y');?></div>
                </div>
                <h2 class="article__title"><?php the_title();?></h2>
            </div>
        </div>
    </a>
    </div>
</div>