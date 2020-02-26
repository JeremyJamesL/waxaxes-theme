<?php get_header(); ?>

<main class="page-content">

<section class="section-dates">

<!-- Start gig Dates
===================== -->
<?php

if( have_rows('upcoming_gig') ): ?>

    <?php
    while ( have_rows('upcoming_gig') ) : the_row(); ?>

        <div class="row">

            <!-- Start gig
            ============== -->
            <div class="gig">

                <h2 class="gig-title" 
                
                <?php $font = get_sub_field( 'font_type' );
                    
                    if( $font ) { ?>
                            style="font-family: 

                            <?php echo $font; ?>, 

                            <?php if( $font === 'Times New Roman' ) {
                                echo 'sans-serif;';
                            } else {
                                echo 'cursive;';
                            }
                            echo '"'
                            ?>

                    <?php }
                
                ?>>

                    <a href="<?php esc_url(the_sub_field('link')); ?>" target="__blank">

                        <?php 
                            the_sub_field( 'city' ); 
                            echo '<br>';
                            the_sub_field('date'); 
                        ?>

                    </a>

                </h2>

            </div><!-- #end gig -->

        </div>

    <?php

    endwhile; ?>

<?php    

else :
    
echo '<div class="row txt-center">

    <p>Check back soon for more dates</p>

</div>';

endif;


?><!-- #end music videos -->

</section>


</main>
<?php get_footer(); ?>