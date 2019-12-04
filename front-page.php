<?php

//
// Final Decisions rev 3
// Single-post template
// Last update: Rev 3a1 on August 11, 2019
//

get_header();
?>

		<main>

			<div class='row row--bottom-margin hero-row' style='background-image: url("<?php bloginfo( 'template_url' ); ?>/images/c<?= rand(2, 12) ?>--1600.jpg")'>
				<div class='container hero-container'>
					<h1 class='copy--hero title--hero'>final decisions</h1>
					<h2 class='copy--hero subtitle--hero'>Appellate jurisdiction and procedure.</h2>
					<p class='copy--hero paragraph--hero'>By Bryan Lammon</p>
				</div>
			</div>

			<!-- Currently inactive
			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>Sponsor</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div> -->

			<div class='row row--bottom-margin'>
				<div class='container container--wrap'>
					<h2 class='container__heading'>Latest Posts</h2>
					<?php get_template_part( 'template-parts/front-page/front-page-excerpts-1' ); ?>
				</div>
			</div>

			<!-- Currently inactive
			<div class='row row--bottom-margin'>
				<div class='container fp-email-signup__container'>
					<h2 class='container__heading'>Email Signup</h2>
					<p>Sign up to receive a weekly email of new posts.</p>
					<form>Email</form>
					<button>Submit</button>
				</div>
			</div> -->

			<!-- Currently inactive
			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>Advertisement</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div> -->

			<div class='row row--bottom-margin'>
				<div class='container container--wrap'>
					<?php get_template_part( 'template-parts/front-page/front-page-excerpts-2' ); ?>
				</div>
			</div>

			<!-- Currently inactive
			<div class='row row--bottom-margin fp-projects__row'>
				<div class='container container--wrap fp-projects__container'>
					<div class='fp-projects__project'>
						<h3 class='heading--fp-projects'>The<br><i>Qualified-Immunity Appeals</i><br>Project</h3>
						<p class='copy--fp-projects'>Data-driven analysis of interlocutory qualified-immunity appeals in federal court.</p>
						<div class='fp-projects__buttons'>
							<a href='#' class='link-button link-button--light-accent'>Learn more</a>
							<a href='#' class='link-button link-button--dark-accent'>Download the data</a>
						</div>
					</div>
					<div class='fp-projects__project'>
						<h3 class='heading--fp-projects'>The<br><i>Class-Certification Appeals</i><br>Project</h3>
						<p class='copy--fp-projects'>Data-driven analysis of interlocutory class-certification appeals in federal court.</p>
						<div class='fp-projects__buttons'>
							<a href='#' class='link-button link-button--light-accent'>Learn more</a>
							<a href='#' class='link-button link-button--dark-accent'>Download the data</a>
						</div>
					</div>
				</div>
			</div> -->

			<!-- Currently inactive
			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>advertisement</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div> -->

			<div class='row row--bottom-margin'>
				<div class='container container--wrap'>
					<?php get_template_part( 'template-parts/front-page/front-page-excerpts-3' ); ?>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--justify-center'>
					<a href='/blog' class='link-button link-button--border'>All Posts</a>
				</div>
			</div>

			<!-- Currently inactive
			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>Advertisement</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div> -->

			<div id='fp-categories' class='row row--bottom-margin' aria='post categories'>
				<div class='container container--wrap fp-categories__container'>
					<h2 class='container__heading'>Categories</h2>
					<ul>
						<?php wp_list_categories( array(
							'title_li' => ''
						)) ?>
					</ul>
				</div>
			</div>

			<div class='row row--bottom-margin' aria='about'>
				<div class='container container--wrap fp-about__container'>
					<h2 class='container__heading'><a class='light' href='/about'>About</a></h2>
					<div class='about'>
						<p>Final Decisions covers appellate jurisdiction and procedure: recent decisions, cert petitions, scholarship, rule changes, and more—including a weekly rundown of notable decisions and developments.</p>
					</div>
					<div class='about'>
						<img class='author-photo' src='<?php bloginfo( 'template_url' ); ?>/images/lammon-800.jpg' alt='Photo of Bryan Lammon'>
					</div>
					<div class='about'>
						<p>Bryan Lammon is law professor at the University of Toledo College of Law. He studies federal appellate jurisdiction and procedure, primarily if and when litigants can appeal.</p>
					</div>
					<div class='fp-about__buttons'>
						<a href='/about' class='link-button link-button'>Read More</a>
					</div>
				</div>
			</div>

			<div class='row row--bottom-margin fp-bottom-picture__row fixed-background-image--c13'>
			</div>

		</main>

<?php get_footer(); ?>