<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *  *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Msadiq
 *
 * Template Name: old My Front Page.
 */

get_header();
?>

<main id="primary" class="site-main">
      <!--Start primary-section //-->
      <div id="primary-section">
        <div id="primary-section-box1">
          <h1 class="brand-color"> Featured Article</h1>
          <h1>HTML5 in Smashing Magazine!</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero sequi expedita odio, soluta consequuntur
            assumenda aut nulla accusantium facilis provident delectus? Pariatur, eius! Aliquam, reiciendis quisquam
            earum <a class="" href="">HTML5</a> and <a href="">CSS3</a> website today!
          </p>
        </div>
        <div id="primary-section-box2">
          <p>
            <img src= "<?php echo get_template_directory_uri() . '/assets/images/capture1.jpg' ?>" alt="">
          </p>
          <div id="social-media">
            <i class="fab fa-2x fa-facebook-f"></i>
            <i class="fab fa-2x fa-twitter"></i>
            <i class="fab fa-2x fa-instagram"></i>
            <i class="fab fa-2x fa-youtube"></i>
          </div>
        </div>
      </div>
      <!--End primary-section //-->
      <!-- Start seconday-section //-->
      <div id="seconday-section">
        <div class="seconday-section-box">

          <div class="seconday-section-box-a">
            <p>
              10th October 2005<br />
              By <a href="">Enrique Ramirez</a>
            </p>
          </div>
          <div class="seconday-section-box-b">
            <h2 class="brand-color">
              This be the title
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti nisi molestiae modi commodi quas,
              quisquam voluptatem quibusdam reiciendis voluptatum mollitia? Eum <a href="">asperiores iste</a> mollitia,
              illo porro
              odit quia iusto dolore.
            </p>
          </div>
        </div>

        <div class="seconday-section-box">

          <div class="seconday-section-box-a">
            <p>
              10th October 2005<br />
              By <a href="">Enrique Ramirez</a>
            </p>
          </div>
          <div class="seconday-section-box-b">
            <h2 class="brand-color">
              This be the title
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti nisi molestiae modi commodi quas,
              quisquam voluptatem quibusdam reiciendis voluptatum mollitia? Eum <a href="">asperiores iste</a> mollitia,
              illo porro
              odit quia iusto dolore.
            </p>
          </div>
        </div>

        <div class="seconday-section-box">

          <div class="seconday-section-box-a">
            <p>
              10th October 2005<br />
              By <a href="">Enrique Ramirez</a>
            </p>
          </div>
          <div class="seconday-section-box-b">
            <h2 class="brand-color">
              This be the title
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti nisi molestiae modi commodi quas,
              quisquam voluptatem quibusdam reiciendis voluptatum mollitia? Eum <a href="">asperiores iste</a> mollitia,
              illo porro
              odit quia iusto dolore.
            </p>
          </div>
        </div>
      </div>
      <!-- End seconday-section //-->

      <!-- Start third-section //-->
      <div id="third-section">
        <div class="third-section-box">
          <h2 class="brand-color">blogroll</h2>
          <ul>
            <li>HTML5 Doctor</li>
            <li>W3C</li>
            <li>HTML5 Doctor</li>
            <li>W3C</li>
            <li>HTML5 Doctor</li>
            <li>W3C</li>
          </ul>
        </div>
        <div class="third-section-box">
          <h2 class="hide">blogroll</h2>
          <ul>
            <li>HTML5 Spec (working draft)</li>
            <li>Wordpress</li>
            <li>HTML5 Spec (working draft)</li>
            <li>Wordpress</li>
            <li>HTML5 Spec (working draft)</li>
            <li>Wordpress</li>
          </ul>
        </div>
        <div class="third-section-box">
          <h2 class="hide">blogroll</h2>
          <ul>
            <li>Smashing Magazine</li>
            <li>Wikipedia</li>
            <li>Smashing Magazine</li>
            <li>Wikipedia</li>
            <li>Smashing Magazine</li>
            <li>Wikipedia</li>
          </ul>
        </div>
        <div class="third-section-box">
          <h2 class="brand-color">social</h2>
          <ul>
            <li><i class="fab fa-delicious"></i> delicious</li>
            <li><i class="fab fa-digg"></i> digg</li>
            <li><i class="fab fa-facebook-f"></i> facebook</li>
            <li><i class="fab fa-lastfm"></i> last.fm</li>
            <li><i class="fas fa-rss-square"></i> rss</li>
            <li><i class="fab fa-twitter"></i> twitter</li>

          </ul>
        </div>
      </div>
      <!-- End third-section //-->

      <!-- Start fourth-section //-->
      <div id="fourth-section">
        <div id="fourth-section-box1">
          <div id="fourth-section-box1a" class="left">
            <h3 class="brand-color">
              Smashing Magazine
            </h3>
            <p>
              Amazing Magazine
            </p>
          </div>
          <div id="fourth-section-box1b">
            <p>
							<img src= "<?php echo get_template_directory_uri() . '/assets/images/capture-bottom.png' ?>" alt="">
            </p>
          </div>
        </div>
        <div id="fourth-section-box2">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis iusto alias ullam in, cupiditate
            temporibus ea voluptatum aut hic maiores, aliquam quaerat nihil tenetur esse explicabo fugit dolorum ex
            recusandae!
          </p>
        </div>
      </div>
      <!-- End fourth-section //-->

			</main><!-- #main -->



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


<?php
get_sidebar();
get_footer();
