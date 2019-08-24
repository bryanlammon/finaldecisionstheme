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

			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>sponsor</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--wrap'>
					<h2 class='container__heading'>latest posts</h2>
					<?php get_template_part( 'template-parts/front-page/front-page-excerpts-1' ); ?>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container fp-email-signup__container'>
					<h2 class='container__heading'>email signup</h2>
					<p>Sign up to receive a weekly email of new posts.</p>
					<form>Email</form>
					<button>Submit</button>
				</div>
			</div>

			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>advertisement</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--wrap'>
					<?php get_template_part( 'template-parts/front-page/front-page-excerpts-2' ); ?>
				</div>
			</div>


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
			</div>

			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>advertisement</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--wrap'>
					<?php get_template_part( 'template-parts/front-page/front-page-excerpts-3' ); ?>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--justify-center'>
					<a href='#' class='link-button link-button--border'>all posts</a>
				</div>
			</div>

			<div class='row row--bottom-margin '>
				<div class='container ad__container'>
					<h2 class='container__heading container__heading--advertisement'>advertisement</h2>
					<div class='advertisement--horizontal'>front page ad</div>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--wrap fp-categories__container'>
					<h2 class='container__heading'>categories</h2>
					<ul>
						<li>category</li>
						<li>category</li>
						<li>category</li>
					</ul>
				</div>
			</div>

			<div class='row row--bottom-margin'>
				<div class='container container--wrap fp-about__container'>
					<h2 class='container__heading'>about</h2>
					<div class='about'>
						<p>Truffaut actually hoodie selvage, tattooed before they sold out freegan lo-fi fashion axe ethical adaptogen butcher chillwave tumblr green juice. Etsy beard brooklyn umami cronut subway tile.</p>
					</div>
					<div class='about'>
						<p>Cray actually yr jean shorts leggings. Ugh heirloom artisan pork belly, vinyl ethical af fanny pack vegan chicharrones yr.</p>
					</div>
				</div>
			</div>

			<div class='row row--bottom-margin fp-bottom-picture__row fixed-background-image--c13'>
			</div>

		</main>

<?php get_footer(); ?>