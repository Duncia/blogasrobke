<section class="container all-articles__banner">
    <div class="container__inner d-flex-2 pt-sm pb-sm">
        <div class="flex-2-child-50">
            <div class="text">
                <h1 class="pb-sm"><?php the_field('banner_title');?></h1>
                <p class="pb-sm">I realized that I already have 18+ years of experience in various companies and as a freelancer and was lucky to have some awesome adventures in my personal life. So it's about time to start writing!</p>
                <p class="pb-sm">Interested in specific category articles? Check them by clicking the button!</p>
                <div>
                    <a href="#"><button class="btn btn--white mb-md mr-md">Web & work</button></a>
                    <a href="#"><button class="btn btn--white mb-md mr-md">Life & experiences</button></a>
                </div>
                </div>
        </div>
        <figure class="flex-2-child-50 txt-center">
            <img width="600" height="400" src="<?php echo get_template_directory_uri() . '/img/web-dev.webp'; ?>" alt="Web development"/>
        </figure>
    </div>
</section>