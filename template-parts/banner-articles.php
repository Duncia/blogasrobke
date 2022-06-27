<section class="container all-articles__banner">
    <div class="container__inner d-flex-2 pt-sm pb-sm">
        <div class="flex-2-child-50">
            <div class="text">
                <h1 class="pb-sm"><?php the_field('banner_title');?></h1>
                <p class="pb-sm"><?php the_field('banner_subtitle');?></p>
                </div>
        </div>
        <figure class="flex-2-child-50 txt-center">
            <img width="600" height="400" src="<?php the_field('banner_image');?>" alt="<?php the_field('banner_title'); ?>"/>
        </figure>
    </div>
</section>