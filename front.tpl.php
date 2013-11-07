		<div id="front-header">
			<div class="container">
				<a id="banner" href="http://artsandsciences.osu.edu" title="Click here to visit the Arts and Sciences homepage">&nbsp;</a>
				<div id="front-image" class="span-13">
					<div id="rotor_left">
						<?php print $rotor_left; ?>
					</div>
					<div id="rotor_top">
						<?php print $rotor_top; ?>
					</div>
					<div id="rotor_bottom">
						<?php print $rotor_bottom; ?>
					</div>
				</div>
				<div id="front-links" class="span-8 last">
					<?php print $front_links; ?>
				</div>
			</div>
			<div id="front-header-tile">&nbsp;</div>
		</div>

	<div id="main-content" class="container">
		<div>
			<?php if($messages){ ?>
				<div id="message"><?php print $messages; ?></div>
			<?php } ?>

			<div class="content span-24">
				<div id="news-column" class="column">
					<h3 class="title"><a href="/news">News</a></h3>
					<div id="featured-news" class="">
						<?php print $front_news_feature; ?>
					</div>
					<div id="other-news" class="">
						<?php print $front_news_other; ?>
					</div>
				</div>
				<div id="events-column" class="column">
					<h3 class="title"><a href="/events">Events</a></h3>
					<?php print $front_events; ?>
				</div>
				<div id="faculty-column" class="column last">
					<h3 class="title"><a href="/faculty">Meet Our Faculty</a></h3>
					<?php print $front_faculty; ?>
				</div>
			</div>

		</div><!-- #leftcontent-nostyle -->

	</div>