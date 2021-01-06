<?php
/**
 * The template for displaying all pages
 * Template Name: Test User Count
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize
 */

get_header();
?>

<div id="primary" class="content-area wp-react-app mt-5 pt-5">
  <main id="main" class="site-main">

    <div id="root" class="p-5">
      <?php 
      /**
       * GETTING ATHLETE COUNT BY SPORTS
       */
      function get_athlete_count_by_sports() {
   
        // The Main Sports Array which will be JSON
        $sports_count = [];
        // Single Sports Vars to add the Count
        $baseball_count = 0;
        $us_football_count = 0;
        $basketball_count = 0;
        $bowling_count = 0;
        $cheerleading_count = 0;
        $cross_country_count = 0;
        $cycling_count = 0;
        $equestrain_count = 0;
        $e_sports_count = 0;
        $fencing_count = 0;
        $field_hockey_count = 0;
        $golf_count = 0;
        $gymnastics_count = 0;
        $ice_hockey_count = 0;
        $lacrosse_count = 0;
        $rifle_count = 0;
        $rowing_count = 0;
        $rugby_count = 0;
        $sailing_count = 0;
        $soccer_count = 0;
        $softball_count = 0;
        $swimming_and_diving_count = 0;
        $tennis_count = 0;
        $track_and_field_count = 0;
        $volleyball_count = 0;
        $water_polo_count = 0;
        $wrestling_count = 0;
        
        // Args for User Query
        $args = array(
          'role' => 'athlete'
        );
       
         // The Query
         $user_query = new WP_User_Query( $args );
       
           // User Loop
           if ( ! empty( $user_query->get_results() ) ) {
             foreach ( $user_query->get_results() as $user ) {
               $user_id = $user->id;
       
              // SPORTS 
              $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
              
              // CALLING GET COUNT SUB FUNCTION
              switch ( $sport ) {
        
                case 'BASEBALL': 
                  $baseball_count++;
                  break;
                case 'BASKETBALL': 
                  $basketball_count++;
                  break;
                case 'BOWLING': 
                  $bowling_count++;
                  break;
                case 'CHEERLEADING': 
                  $cheerleading_count++;
                  break;
                case 'CROSS-COUNTRY': 
                  $cross_country_count++;
                  break;
                case 'CYCLING': 
                  $cycling_count++;
                  break;  
                  case 'EQUESTRAIN': 
                  $equestrain_count++;
                  break;
                case 'E-SPORTS': 
                  $e_sports_count++;
                  break;
                case 'FENCING': 
                  $fencing_count++;
                  break;
                case 'FIELD-HOCKEY': 
                  $field_hockey_count++;
                  break;
                case 'GOLF': 
                  $golf_count++;
                  break;
                case 'GYMNASTICS': 
                  $gymnastics_count++;
                  break;    
                case 'ICE-HOCKEY': 
                  $ice_hockey_count++;
                  break;
                case 'LACROSSE': 
                  $lacrosse_count++;
                  break;
                case 'RIFLE': 
                  $rifle_count++;
                  break;
                case 'ROWING': 
                  $rowing_count++;
                  break;
                case 'RUGBY': 
                  $rugby_count++;
                  break;
                case 'SAILING': 
                  $sailing_count++;
                  break;  
                case 'SOCCER': 
                  $soccer_count++;
                  break;
                case 'SOFTBALL': 
                  $softball_count++;
                  break;
                case 'SWIMMING-AND-DIVING': 
                  $swimming_and_diving_count++;
                  break;
                case 'TENNIS': 
                  $tennis_count++;
                  break;
                case 'TRACK-AND-FIELD': 
                  $track_and_field_count++;
                  break;
                case 'VOLLEYBALL': 
                  $volleyball_count++;
                  break;      
                case 'US-FOOTBALL': 
                  $us_football_count++;
                  break;  
                case 'WATER-POLO': 
                  $water_polo_count++;
                  break;      
                case 'WRESTLING': 
                  $wrestling_count++;
                  break;    
                default: 
                  echo '';
              }
       
             }
           } else {
       
             echo 'No users found.';
             
           }

         
        echo 'BASEBALL' . ' has ' . $baseball_count . '<br>';
        echo 'US-FOOTBALL' . ' has ' . $us_football_count . '<br>';

        array_push( $sports_count, [
          'BASEBALL' => $baseball_count,
          'BASKETBALL' => $baseball_count,
          'BOWLING' => $bowling_count,
          'CHEERLEADING' => $cheerleading_count,
          'CROSS-COUNTRY' => $cross_country_count,
          'CYCLING' => $cycling_count,
          'EQUESTRAIN' => $equestrain_count,
          'E-SPORTS' => $e_sports_count,
          'FENCING' => $fencing_count,
          'FIELD-HOCKEY' => $field_hockey_count,
          'GOLF' => $golf_count,
          'GYMNASTICS' => $gymnastics_count,
          'ICE-HOCKEY' => $ice_hockey_count,
          'LACROSSE' => $lacrosse_count,
          'RIFLE' => $rifle_count,
          'ROWING' => $rowing_count,
          'RUGBY' => $rugby_count,
          'SAILING' => $sailing_count,
          'SOCCER' => $soccer_count,
          'SOFTBALL' => $softball_count,
          'SWIMMING-AND-DIVING' => $swimming_and_diving_count,
          'TENNIS' => $tennis_count,
          'TRACK-AND-FIELD' => $track_and_field_count,
          'US-FOOTBALL' => $us_football_count,
          'VOLLEYBALL' => $volleyball_count,
          'WATER-POLO' => $water_polo_count,
          'WRESTLING' => $wrestling_count,
        ]);

        echo '<pre>';
        print_r( $sports_count );   
        echo '</pre>';         

       }

       //RUNNING THE FUNCTION
       get_athlete_count_by_sports();
      
      ?>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();