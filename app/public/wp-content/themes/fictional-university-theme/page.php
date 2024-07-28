<?php
    get_header();
    while(have_posts()){
        the_post(); ?>
            <div class="page-banner">
                <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>)"></div>
                <div class="page-banner__content container container--narrow">
                    <h1 class="page-banner__title"><?php the_title(); ?></h1>
                    <div class="page-banner__intro">
                    <p>Dont forget to replace me later.</p>
                    </div>
                </div>
                </div>

                <div class="container container--narrow page-section">
                
                <!-- breadcrumbs -->
                <?php 
                    $the_parent = wp_get_post_parent_id(get_the_ID());
                    if($the_parent){ ?>
                    <div class="metabox metabox--position-up metabox--with-home-link">
                        <p>
                        <a class="metabox__blog-home-link" href="<?php echo get_permalink($the_parent)?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($the_parent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
                        </p>
                    </div>
                <?php }?>
                <!-- end breadcrumbs -->


                <!-- sidebar -->
                <?php
                $testArray = get_pages(array( 'child_of' => get_the_ID() ));
                if($the_parent or $testArray) { ?> <!-- to determine if naay parent or parent ang page -->
                    <div class="page-links">
                        <h2 class="page-links__title"><a href="<?php echo get_permalink($the_parent);?>"><?php echo get_the_title($the_parent); ?></a></h2>
                        <ul class="min-list">
                            <?php 
                                if($the_parent){
                                    $findChildrenOf = $the_parent;
                                } else {
                                    $findChildrenOf = get_the_ID();
                                }
                                wp_list_pages(array(
                                    'title_li' => NULL,
                                    'child_of' => $findChildrenOf,
                                    'sort_column' => 'menu_order' 
                                ));
                            ?>
                        </ul>
                    </div>
                <?php }?>
                <!-- end sidebar -->

                <div class="generic-content">
                    <?php the_content(); ?>
                </div>
            </div>
    <?php }
    get_footer();
?>


<!--
#FUNCTIONS 
*** get_theme_file_uri() >>>>> file path 
*** wp_get_post_parent_id() >>>>> returns number(page ID of a parent page , 0 if no parent)
*** get_the_ID() >>>>> returns number (page ID of the current page)
*** the_title() >>>>> display title of the current page or post
*** get_the_content() >>>>> returns the content of the post
*** the_content() >>>>> display the current content of a page or a post
*** get_the_title() >>>>> returns title of the page
*** the_permalink() >>>>> permalink of the current post
*** get_permalink() >>>>> returns permalink
*** wp_list_pages() >>>>> returns list of all pages (outputing the pages out of the screen)
*** get_pages() >>>>> almost identical to wp_list_pages but (outputing the pages on the memory) if has children returns collection of children pages if none returns null which is equals to falsy value
*** the_post() >>>>> iterator ni siya sa while loop
*** language_attributes() >>>>> para sa language sa site butang sa HTML tag
*** bloginfo('charset') >>>>> para sa charset, butang sa head meta
*** body_class() >>>>> para classes sa body in different pages, butang sa body class
*** is_page('14')  >>>>>  return boolean value '14' is page id
*** the_author_posts_link() >>>>> author of the post/blog
*** the_time('n.j.y') >>>>> date when the post/blog is created
*** the_excerpt()  >>>>> gamay nga content ra ang ipakita
*** is_category() >>>>> return booleans 
*** single_cat_title(); >>>>> prints the category title
*** is_author() >>>>> return booleans 
*** the_author() >>>>> prints the author of the post
*** the_archive_title() >>>>> prints the title of an archive
*** the_archive_description() >>>>> prints the biography(author archive)/description(blog category)
*** wp_reset_postdata() >>>>> butang na katapusan sa while loop after using custom queries(REMEMBER)
*** has_excerpt() >>>>> check if naay excerpt ang post
*** get_post_type() >>>>> returns the type of the post
*** the_field('event_date') >>>>> prints the value from the plugin(ACF)
*** get_field('event_date') >>>>> returns the value from the plugin(ACF)
*** echo get_the_excerpt(); >>>>> print the excerpt.
*** echo paginate_links() >>>>> add pagination in blog page
*** echo site_url('/blog') >>>>> manual linking into pages
*** echo wp_trim_words(get_the_content(), 18) >>>>> trimming the content
*** echo get_the_category_list(', ') >>>>> returns the category of a post
*** echo get_post_type_archive_link('event') >>>>> automatically get url of a post type archive(in this example is event post)
-->



<!-- 
 #HOOKS
 *** wp_enqueue_scripts => gamit para sa scripts and styles
 *** after_setup_theme => gamit para sa title ug sa menu
 *** init => gamit pag creat ug custom post types (naa sa mu-plugins)
-->


<!-- 
#PLUGINS
*** advanced custom fields
-->