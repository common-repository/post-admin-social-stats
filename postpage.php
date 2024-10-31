<?php //Facebook ?>

<div class="sharebutton">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=458455517547328";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="fb-like" data-href="<?php echo the_permalink(); ?>" data-layout="standard" data-width="250" data-action="like" data-show-faces="true" data-share="false"></div>
</div>

<div class="sharebutton">
	<?php //Twitter ?>
	<a href="<?php echo the_permalink(); ?>" class="twitter-share-button" data-lang="en">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="sharebutton">
	<?php //Google+ ?>
	<div class="g-plusone" data-size="medium" data-annotation="inline" data-href="<?php echo the_permalink(); ?>"></div>
	<script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/platform.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
</div>

<div class="sharebutton">
	<script src="//platform.linkedin.com/in.js" type="text/javascript">
	 lang: en_US
	</script>
	<script type="IN/Share" data-url="<?php echo the_permalink(); ?>" data-counter="right"></script>
</div>

<div class="sharebutton">
	<?php //Reddit ?>
	<script type="text/javascript" src="http://www.reddit.com/buttonlite.js?i=1&url=<?php echo the_permalink(); ?>&newwindow=1"></script>
</div>
	
<div class="gearside">
	<span>Post Admin Social Stats by <a href="http://gearside.com/post-admin-social-stats?utm_source=wordpress&utm_medium=plugin&utm_campaign=post%20admin%20social%20stats">Gearside Creative</a></span>
</div>
