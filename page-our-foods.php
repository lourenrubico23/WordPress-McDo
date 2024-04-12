<?php get_header()?>

<section class="banner banner--food" style="background-image: url(<?php echo get_field('banner')?>)"></section>

<section class="category bg-primary">
        <div class="container">
            <!-- Card 1 -->
            <div class="category__wrapper">
                <?php
                if(have_rows('foods_menu')) : ?>
                <?php while(have_rows('foods_menu')) : the_row(); ?>
                <a href="">
                    <div class="category__card">
                        <img src="<?php echo get_sub_field('foods_image')?>" alt="">
                        <h5><?php echo get_sub_field('foods_label')?></h5>
                    </div> 
                </a>
                <?php  endwhile;
                else :
                echo "No More Menu";
                endif;
                ?>
            </div>
        </div>
</section>

<section class="quality">
    <div class="container">
            <div class="quality__header">
                <h3 class="mb-1"><?php echo get_sub_field('quality_h2')?></h3>
                <h5 class="mb-1 text-accent"><?php echo get_sub_field('quality_p1')?></h5>
                <p><?php echo get_sub_field('quality_p2')?></p class="bg-primary p-3">
            </div>
        </div>
            <!-- QUALITY CARD -->
            <div class="quality__wrapper">
                <div class="container">
                    <div class="quality__cards">

                    <?php
                        if(have_rows('food_quality')) : ?>
                        <?php while(have_rows('food_quality')) : the_row(); ?>
                        <div class="quality__card">
                            <img src="<?php echo get_sub_field('quality_image')?>" alt="">
                            <h4><?php echo get_sub_field('quality_name')?></h4>
                            <p class="bg-primary p-3"><?php echo get_sub_field('quality_desc')?></p class="bg-primary p-3">
                        </div>
                        <?php  endwhile;
                            else :
                            echo "No More Slider";
                            endif;
                        ?>
                    </div>
                </div>
            </div>
</section>

<?php get_footer()?>
