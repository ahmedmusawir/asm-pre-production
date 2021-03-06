<?php
/**
 *
 * Template Name: Athlete Dashboard
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<div id="page-asm-dashboard">

    <header id="general-page-header" class="text-center">
        <section class="top-page-menu clearfix">

            <h3 class="menu-title float-left">DASHBOARD</h3>

        </section>
    </header>



    <section id="dashboard-task-board">
        <?php 
      $logged_in_user_obj = wp_get_current_user();

      $athlete_name = $logged_in_user_obj->display_name;
      $athlete_slug = $logged_in_user_obj->user_nicename;
   
      $user_id = get_current_user_id();
      $total_profile_visit = visitors_get_profile_visit_count($user_id);
      // $total_unique_visitors = visitors_get_unique_visitors_count( $user_id );
    ?>

    </section>

    <div id="asm-dashboard-content" class="content-area container-fluid">

        <div class="row">

            <main id="main" class="site-main col-sm-12 col-md-12 col-lg-8">

                <!-- MEMBERSHIP WIDGET START  -->

                <section id="membership-widget" class="member-widget-mobile">
                    <div class="top-task-box text-center row">

                        <!-- <span class="btn btn-danger btn-lg">
                            <?php //the_field('top_right_title'); ?>
                        </span> -->

                        <a href="<?php the_field('top_right_button_url'); ?>" target="_blank"
                            class="btn btn-danger btn-lg">
                            <?php the_field('top_right_button_text'); ?>
                        </a>

                    </div><!-- #top-task-block end -->
                    <!-- PROFILE VIEW & NEW MESSAGES -->
                    <div id="bottom-task-box" class="row">

                        <!-- FLEXBOX IS USED HERE FOR COLS  -->

                        <div class="task-box text-center">
                            <i class="fas fa-eye"></i>
                            <h6 class="text-only">PROFILE VIEWS</h6>
                            <!-- <h1 class="text-number"><?php //echo $total_profile_visit; ?></h1> -->
                            <h1 id="view-count-holder" class="text-number"><?php echo $total_profile_visit; ?></h1>
                            <a href="/members/<?php echo $athlete_slug; ?>/" class="btn btn-info">View Profile</a>
                        </div>

                        <div class="task-box text-center">
                            <i class="fas fa-envelope-square"></i>
                            <!-- <img src="/wp-content/uploads/dashboard-email-icon.png" alt=""> -->
                            <h6 class="text-only">NEW MESSAGES</h6>
                            <?php 
                    /** 
                     * CHECKING TO SEE IF THERE IS NEW MESSAGE
                     */
                    $new_message = do_shortcode('[fep_shortcode_new_message_count]');
                    $new_message_length = strlen($new_message);

                    ?>
                            <?php if ( $new_message_length != 245 ) : ?>
                            <h1 class="text-number"><?php echo $new_message; ?></h1>
                            <?php else :?>
                            <h1 class="text-number">0</h1>
                            <?php endif; ?>
                            <a href="/athlete-email-inbox/" class="btn btn-info">View Messages</a>
                        </div>

                    </div> <!-- #bottom-task-block end -->
                </section>

                <!-- MEMBERSHIP WIDGET END  -->

                <div id="top-task-block" class="row">
                    <article class="col-md-12">
                        <?php 
          $logged_in_user_obj = wp_get_current_user();
          echo '<pre>';
          // print_r($logged_in_user_obj);
          echo '</pre>';
          $athlete_name = $logged_in_user_obj->display_name;
        ?>
                        <h4 class="block-title"><?php the_field('top_left_title'); ?> <?php echo $athlete_name; ?>?</h4>
                    </article>
                </div>

                <?php 
        // check if the repeater field has rows of data
        if( have_rows('bottom_task_video_box') ):

          // loop through the rows of data
          while ( have_rows('bottom_task_video_box') ) : the_row();
        ?>

                <!-- TASK ITEM START -->
                <div id="item-<?php the_sub_field('task_id'); ?>" class="row task-item mt-4"
                    data-task="<?php the_sub_field('task_id'); ?>">

                    <!-- <div class="col-sm-3 text-center video-box"> -->
                    <div class="col-sm-3 video-box">

                        <!-- <span><?php // the_sub_field('task_id'); ?></span> -->

                        <a type="button" class="asm-task-button" data-toggle="modal"
                            data-target="#<?php the_sub_field('left_box_youtube_video_id'); ?>">

                            <img src="<?php the_sub_field('left_box_image'); ?>" alt="" class=" w-100">

                        </a>
                    </div>
                    <div class="col-sm-6 text-box">
                        <!-- <article class="text-only text-center"> -->
                        <article class="text-only">
                            <h3 class="title"><?php the_sub_field('middle_box_title'); ?></h3>
                            <p class="sub-title">
                                <?php the_sub_field('middle_box_subtitle'); ?>
                            </p>
                        </article>
                    </div>
                    <!-- <div id="<?php the_sub_field('task_id'); ?>" class="col-sm-3 text-center icon-box"> -->
                    <div id="<?php the_sub_field('task_id'); ?>" class="col-sm-3 text-center icon-box">
                        <h4 class="status-text <?php the_sub_field('task_id'); ?>">
                            <!-- CONTENT COMES FROM JS -->
                        </h4>
                        <i class="d-none fas fa-exclamation-circle text-danger <?php the_sub_field('task_id'); ?>"></i>
                        <i class="d-none far fa-clock text-info <?php the_sub_field('task_id'); ?>"></i>
                        <i class="d-none fas fa-check-circle text-success <?php the_sub_field('task_id'); ?>"></i>
                    </div>

                    <!-- YOUTUBE VIDEO MODAL -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg"
                        id="<?php the_sub_field('left_box_youtube_video_id'); ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item mt-2"
                                            src="https://www.youtube.com/embed/<?php the_sub_field('left_box_youtube_video_id'); ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
                                        </iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary modal-mark-complete-btn">Mark
                                        Complete</button>
                                    <button type="button" class="btn btn-danger modal-task-reset-btn">Reset</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YOUTUBE VIDEO MODAL END -->

                </div> <!-- TASK ITEM END -->


                <?php 
        endwhile;

        else :
        
            // no rows found
            echo "No rows found!";
        
        endif;
        ?>

                <!-- SCHOLARSHIP CONSULTANCY START -->

                <div class="row task-item mt-4" data-task="task-status-11">

                    <div class="col-sm-3 text-center video-box">

                        <a type="button" class="asm-task-button" data-toggle="modal"
                            data-target="#scholarship-consultancy-modal">

                            <img src="<?php the_field('scholarship_consultancy_image'); ?>" alt="" class=" w-100">

                        </a>
                    </div>
                    <!-- <div class="col-sm-6 text-center text-box"> -->
                    <div class="col-sm-6 text-box">
                        <h3 class="title"><?php the_field('scholarship_consultancy_title'); ?></h3>
                        <p class="sub-title">
                            <?php the_field('scholarship_consultancy_sub_title'); ?>
                        </p>
                    </div>
                    <div id="<?php //the_field('task_id'); ?>" class="col-sm-3 text-center icon-box">
                        <h4 class="status-text">

                        </h4>
                        <i class="d-none fas fa-exclamation-circle text-danger"></i>
                        <i class="d-none far fa-clock text-info"></i>
                        <i class="d-none fas fa-check-circle text-success"></i>
                    </div>

                    <!-- BOOTSTRAP MODAL -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="scholarship-consultancy-modal" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="gravity-form-shortcode">
                                        <a class="btn btn-lg btn-primary btn-block"
                                            href="<?php the_field('scholarship_consultancy_button_url'); ?>"
                                            target="_blank">
                                            <?php the_field('scholarship_consultancy_button_text'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary modal-mark-complete-btn">Mark
                                        Complete</button>
                                    <button type="button" class="btn btn-danger modal-task-reset-btn">Reset</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOOTSTRAP MODAL END -->

                </div>

                <!-- SCHOLARSHIP CONSULTANCY END -->

                <!-- HOW TO GET SCHOLARSHIP START -->

                <div class="row task-item mt-4" data-task="task-status-12">

                    <div class="col-sm-3 text-center video-box">

                        <a type="button" class="asm-task-button" data-toggle="modal"
                            data-target="#get-scholarship-modal">

                            <img src="<?php the_field('get_scholarship_image'); ?>" alt="" class=" w-100">

                        </a>
                    </div>
                    <!-- <div class="col-sm-6 text-center text-box"> -->
                    <div class="col-sm-6 text-box">
                        <h3 class="title"><?php the_field('get_scholarship_title'); ?></h3>
                        <p class="sub-title">
                            <?php the_field('get_scholarship_sub_title'); ?>
                        </p>
                    </div>
                    <div id="<?php //the_field('task_id'); ?>" class="col-sm-3 text-center icon-box">
                        <h4 class="status-text">

                        </h4>
                        <i class="d-none fas fa-exclamation-circle text-danger"></i>
                        <i class="d-none far fa-clock text-info"></i>
                        <i class="d-none fas fa-check-circle text-success"></i>
                    </div>

                    <!-- BOOTSTRAP MODAL -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="get-scholarship-modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="gravity-form-shortcode">
                                        <a class="btn btn-lg btn-primary btn-block"
                                            href="<?php the_field('get_scholarship_button_url'); ?>" target="_blank">
                                            <?php the_field('get_scholarship_button_text'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary modal-mark-complete-btn">Mark
                                        Complete</button>
                                    <button type="button" class="btn btn-danger modal-task-reset-btn">Reset</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOOTSTRAP MODAL END -->

                </div>

                <!-- HOW TO GET SCHOLARSHIP END -->

                <!-- SEARCH UNIVERSITY START -->

                <div class="row task-item mt-4" data-task="task-status-11">

                    <div class="col-sm-3 text-center video-box">

                        <a type="button" class="asm-task-button" data-toggle="modal"
                            data-target="#search-universities-modal">

                            <img src="<?php the_field('search_universities_image'); ?>" alt="" class=" w-100">

                        </a>
                    </div>
                    <!-- <div class="col-sm-6 text-center text-box"> -->
                    <div class="col-sm-6 text-box">
                        <h3 class="title"><?php the_field('search_universities_title'); ?></h3>
                        <p class="sub-title">
                            <?php the_field('search_universities_sub_titles'); ?>
                        </p>
                    </div>
                    <div id="<?php //the_field('task_id'); ?>" class="col-sm-3 text-center icon-box">
                        <h4 class="status-text">

                        </h4>
                        <i class="d-none fas fa-exclamation-circle text-danger"></i>
                        <i class="d-none far fa-clock text-info"></i>
                        <i class="d-none fas fa-check-circle text-success"></i>
                    </div>

                    <!-- BOOTSTRAP MODAL -->

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="search-universities-modal" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="gravity-form-shortcode">
                                        <a class="btn btn-lg btn-primary btn-block"
                                            href="<?php the_field('search_universities_button_url'); ?>"
                                            target="_blank">
                                            <?php the_field('search_universities_button_text'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary modal-mark-complete-btn">Mark
                                        Complete</button>
                                    <button type="button" class="btn btn-danger modal-task-reset-btn">Reset</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOOTSTRAP MODAL END -->

                </div>

                <!-- SEARCH UNIVERSITY END -->


            </main><!-- #main -->

            <aside id="asm-dashboard-sidebar" class="asm-sidebar col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <!-- MOOSE TEST START -->
                <section id="membership-widget" class="member-widget-desktop">
                    <div class="top-task-box text-center row">

                        <!-- <span class="btn btn-danger btn-lg">
                            <?php //the_field('top_right_title'); ?>
                        </span> -->

                        <a href="<?php the_field('top_right_button_url'); ?>" target="_blank"
                            class="btn btn-danger btn-lg">
                            <?php the_field('top_right_button_text'); ?>
                        </a>

                    </div><!-- #top-task-block end -->
                    <!-- PROFILE VIEW & NEW MESSAGES -->
                    <div id="bottom-task-box" class="row">

                        <!-- FLEXBOX IS USED HERE FOR COLS  -->

                        <div class="task-box text-center">
                            <i class="fas fa-eye"></i>
                            <h6 class="text-only">PROFILE VIEWS</h6>
                            <!-- <h1 class="text-number"><?php //echo $total_profile_visit; ?></h1> -->
                            <h1 id="view-count-holder" class="text-number"><?php echo $total_profile_visit; ?></h1>
                            <a href="/members/<?php echo $athlete_slug; ?>/" class="btn btn-info">View Profile</a>
                        </div>

                        <div class="task-box text-center">
                            <i class="fas fa-envelope-square"></i>
                            <!-- <img src="/wp-content/uploads/dashboard-email-icon.png" alt=""> -->
                            <h6 class="text-only">NEW MESSAGES</h6>
                            <?php 
                    /** 
                     * CHECKING TO SEE IF THERE IS NEW MESSAGE
                     */
                    $new_message = do_shortcode('[fep_shortcode_new_message_count]');
                    $new_message_length = strlen($new_message);

                    ?>
                            <?php if ( $new_message_length != 245 ) : ?>
                            <h1 class="text-number"><?php echo $new_message; ?></h1>
                            <?php else :?>
                            <h1 class="text-number">0</h1>
                            <?php endif; ?>
                            <a href="/chat-room/" class="btn btn-info">View Messages</a>
                            <!-- <a href="/athlete-email-inbox/" class="btn btn-info">View Messages</a> -->

                        </div>

                    </div> <!-- #bottom-task-block end -->
                </section>
                <!-- MOOSE TEST END -->
                <!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR START -->

                <?php get_asm_profile_views(); ?>

                <!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR END -->
            </aside><!-- #aside -->

        </div> <!-- END ROW -->
    </div><!-- #primary -->

</div> <!-- #page-asm-dashboard end  -->

<!-- FOLLOWING JS IS TO SUPPLY THE VIEW COUNT TO THE TOP NAVIGATION EYE ICON -->
<script>
jQuery(document).ready(function($) {
    var viewCountHolder = $('#view-count-holder');
    var theViewCount = viewCountHolder.text();
    var numberValue = Number(theViewCount);
    // alert(theCount);
    localStorage.setItem('theViewCount', JSON.stringify(numberValue));
});
</script>


<?php
get_footer();