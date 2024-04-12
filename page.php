<?php get_header()?>

<section class="banner banner--activities" style="background-image: url(<?php echo get_field('banner')?>)">
    </section>

    <section class="activities">
        <div class="container">
            <div class="activities__wrapper">

            <?php 
                $activity = new WP_Query(array('post_type' => 'post'))
            ?>

                <?php if($activity->have_posts()) : while($activity->have_posts()) : $activity->the_post();?>
                <!-- Card 1 -->
                <div class="activities__cards">
                    <div class="activities__card">
                        <div class="activities__img">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }?>
                    </div>
                    <div class="activities__details">
                        <h2><?php the_title()?></h4>
                        <p><?php the_content()?></p>
                        <a class="btn-primary p-2">LEARN MORE</a>
                    </div>
                </div>
                <?php endwhile;
                    else:
                        echo "No more activity";
                    endif;
                ?>
            </div>
        </div>
    </section>
<?php get_footer()?>