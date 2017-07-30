
		<ul class="nav nav-pills nav-justified">
			<li <?php if ($thisPage == "news") echo "class=\"active\""; ?> ><a href="/">News</a></li>
			<li class="dropdown <?php if ($thisPage == "releases") echo "active"; ?>">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Releases <span class="glyphicon glyphicon-chevron-down"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/releases/">Releases</a></li>
					<li><a href="/digitalseries/">Digital Series</a></li>
					<li><a href="/samplers/">Samplers</a></li>
				</ul>
			</li>
			<li <?php if ($thisPage == "contact") echo "class=\"active\""; ?> ><a href="/contact/">Contact</a></li>
			<li><a href="http://store.likeyoungrecords.com">Store <span class="glyphicon glyphicon-circle-arrow-right"></span></a></li>
		</ul> <!-- pills -->
		</div> <!-- menu -->
	</div> <!-- row -->
