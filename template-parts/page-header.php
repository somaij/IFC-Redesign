<section class="page-header <?php echo basename( get_page_template() ); ?> <?php if (has_post_thumbnail()): echo'image'; endif;?>"  <?php if (has_post_thumbnail()):?> style="background-image:linear-gradient(to right, rgba(18, 60, 105, 0.70), rgba(0, 0, 0, 0.20)),url(<?php the_post_thumbnail_url();?>" <?php endif;?> >
<?php if ( has_post_thumbnail() ) {?> <div class="overlay"></div><?php }?>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center justify-content-center">
           
                <?php 
                if ( is_archive() ) {
                    echo "<h1>All ";
                    echo post_type_archive_title();
                    echo "</h1>";
                }
                else if (is_home()){
                    echo "<h1>Blog</h1>";
                }
                else{
                    echo '<div class="sub brown">';
                    echo '<small>';
                    the_field('header_subtitle');
                    echo '</small>';
                    if(get_field('page_header')): echo '<h1>' . get_field('page_header') . '</h1>';
                    else: the_title('<h1>', '</h1>');
                    endif;
                    the_field('header_body');
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php if (has_post_thumbnail()): echo'<div class="overlay"></div>'; endif;?>
</section>