<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Msadiq
 */

get_header();
?>


<main class="clearfix">
            <div id="section1">
                <div id="article">
                    <h3 class="marginbottom">Featured Article</h3>
                    <h6>HTML5 in Smashing Magazine!</h6>
                    <p>Discover how to use Graceful degradation and progressive enhanchement techniques to achieve an
                        outstanding, cross-browser <a href="">HTML5</a> an <a href="">CSS3</a> website today!</p>
                </div>
                <div id="logo">
                    <p class="marginbottom">
                        <img src="images/imagetop.jpg" alt="">
                    </p>
                </div>

            </div>
            <div id="section2">
						<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

            </div>
            <div id="section3">
                <div id="blogroll">
                    <h3>blogroll</h3>
                    <ul>
                        <li>HTML5 Doctor</li>
                        <li>W3C</li>
                        <li>HTML5 Doctor</li>
                        <li>W3C</li>
                        <li>HTML5 Doctor</li>
                        <li>W3C</li>
                    </ul>
                </div>
                <div id="draft">
                    <ul>
                        <li>HTML5 spec (Working draft)</li>
                        <li>Wordpress</li>
                        <li>HTML5 spec (Working draft)</li>
                        <li>Wordpress</li>
                        <li>HTML5 spec (Working draft)</li>
                        <li>Wordpress</li>
                    </ul>
                </div>
                <div id="wiki">
                    <ul>
                        <li>Smashing Magazine</li>
                        <li>Wikipedia</li>
                        <li>Smashing Magazine</li>
                        <li>Wikipedia</li>
                        <li>Smashing Magazine</li>
                        <li>Wikipedia</li>
                    </ul>
                </div>
                <div id="social">
                    <h3>Social</h3>
                    <ul>
                        <li><i class="fab fa-delicious"></i>delicious</li>
                        <li><i class="fab fa-digg"></i>digg</li>
                        <li><i class="fab fa-facebook-square"></i>facebook</li>
                        <li><i class="fab fa-lastfm-square"></i>last.fm</li>
                        <li><i class="fas fa-rss-square"></i>rss</li>
                        <li><i class="fab fa-twitter-square"></i>twitter</li>
                    </ul>
                </div>

            </div>
            <div id="section4">
                <div id="left">
                    <h4 class="marginbottom">Smashing Magazine</h4>
                    <p>Amazing Magazine</p>
                </div>
                <div id="middle">
                    <p class="marginbottom">
                        <img src="images/imagebottom.jpg" alt="">
                    </p>
                </div>
                <div id="right">
                    <p>
                        Smashing Magazine is a website and blog that offers ressources and advices to web developers and
                        web designers. it was founded by sven lennartz and Vitaly Friedman.
                    </p>
                </div>
            </div>


        </main>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
