 <div class="row">
        <div class="mb-5 col-2">

        <?php if ($thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail'   )):
        $thumbnail_src = $thumbnail_html['0']; ?>
        <img class="img-fluid img-thumbnail" src="<?php echo $thumbnail_src; ?>" alt="">
        <?php 
        endif; ?>

        </div>
        <div class="mb-5 col-10">
            <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>

            <p>
            <?php echo inpulsa_give_me_meta_01(
                                        esc_attr(get_the_date( 'c') ),
                                        esc_html( get_the_date()),
                                        get_the_category_list( ', '),
                                        get_the_tag_list('', ', ')
                                        ); ?>
            </p>


            
            <?php the_excerpt(); ?>
        </div>
    </div>