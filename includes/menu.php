<ul class="nav nav-pills">
	<li <?php if ($thisPage == "news") echo "class=\"active\""; ?> ><a href="/">NEWS</a></li>
	<li class="dropdown <?php if ($thisPage == "releases") echo "active"; ?>">
    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">RELEASES<b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="releases.php">Releases</a></li>
			<li><a href="digitalseries.php">Digital Series</a></li>
      	</ul>
    </li>
	<li <?php if ($thisPage == "contact") echo "class=\"active\""; ?> ><a href="contact.php">CONTACT</a></li>
	<li><a href="http://likexyoung.bigcartel.com">STORE</a></li>
</ul> <!-- pills -->