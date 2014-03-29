<?php
/**
 ** Theme Name: Wedy
 ** Theme URI: http://www.drinkentrepreneurs.org/
 ** Description: The 2013 default theme for Drinkentrepreneurs.
 ** Author: Antoine Angot
 ** Author URI: http://antoine.angot.me
 ** Version: 1.0
 ** Tags: black, blue, white
 ** License:
 ** License URI:
 **/
?>
<?php get_header(); ?>
  <div id="tagline_overlay">
    <img alt="" src="/wp-content/themes/wedy/images/bullehome2.png"/>
  </div><!-- #tagline_overlay -->
  <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
 
  <div id="main_content" > 
    <div id="actions_wrap">
    <ul>

      <li class="actions_facebook">
         
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Faperoentrepreneurs&amp;width=523&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false&amp;appId=424706350978789" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:523px; height:150px;" allowTransparency="true"></iframe>

         
      </li>
      <li class="actions_entrepreneur">
        <span style="font-size:16px"><b>Entrepreneurs:</b> join us </span>
        <p> More than 2000 entrepreneurs attending every month at our events! So ... </p>
        <a href="#newsletter" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-envelope"></span> Inscrivez vous</a>
      </li>
  </ul>
  </div><!-- #actions_wrap -->


  <div id="first_time" class="clearfix">
    <h3><img alt="How it goes the first time" src="/wp-content/themes/wedy/images/step0_home.png"></h3>
    <ul>
      <li>
        <h2><img alt="Vous venez" src="/wp-content/themes/wedy/images/step1_home.png"></h2>
        <p>DrinkEntrepreneurs is open to everybody. If you have created your business or not yet. It is very simple to join: just show up at the appointment near 7pm, that's all !</p>
      </li>
      <li>
        <h2><img alt="Vous discutez" src="/wp-content/themes/wedy/images/step2_home.png"></h2>
        <p>Going to a DrinkEntrepreneurs is like meeting friends for a drink: no badges, no speeches, no ceremony. Enter a group and simply join the discussion! If you're shy, make an effort and simply say "It's the first time I come."
</p>
      </li>
      <li>
        <h2><img alt="Vous revenez" src="/wp-content/themes/wedy/images/step3_home.png"></h2>
        <p>This is an important step, you will see that you will quickly find pleasure to meet entrepreneurs you saw past events... and many more! Then go all the 1st Thursday of the month at 7pm!
</p>
      </li>
    </ul>
  </div><!-- #first_time -->

  <div id="newsletter" style="text-align: center;">
    <?php 
       // Custom widget Area Start
       if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter Widget Area') ) : ?>
      <?php endif;
      // Custom widget Area End
      ?>
  </div>

  <?php
/*
         $mypages = get_pages( array( 'include' => '22,20', sort_order => 'desc') );
  foreach ($mypages as $page ) {
    $content = $page->post_content;
    if ( ! $content ) // Check for empty page
      continue;

    $content = apply_filters( 'the_content', $content );

    echo $content;

  }
*/
  ?>
  </div><!-- #main_content -->
<?php get_footer(); ?>

