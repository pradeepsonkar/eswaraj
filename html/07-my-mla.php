<?php include("header.php"); ?>
<div class="container-fluid">
	<div class="about-mla">
		<h1>Rajnath Singh, MLA</h1>
		<img src="images/issues/issues.png" alt="">
		<div class="desc-wrapper">
			<div class="desc">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sapiente eius doloremque nostrum numquam incidunt iste architecto reiciendis enim reprehenderit officiis, minima fugiat nihil accusamus ipsam totam dicta atque voluptates voluptas officia. Fugiat ipsam sit optio recusandae temporibus eos sequi cumque nulla, debitis doloremque perferendis labore animi accusantium. Voluptatum mollitia nihil minus repudiandae. Ducimus cum ex fugiat eos! Id, beatae quidem neque minima doloribus quos optio ipsum atque dolorem vitae nobis harum. Libero quasi aspernatur officia, ab maxime sit molestiae provident quod corporis fuga adipisci quam illo laborum atque laudantium fugit reprehenderit dolor aliquid aperiam repellat possimus molestias commodi perferendis?
				</p>
				<button class="btn btn-primary btn-xs">read more</button>
			</div>
		</div>
	</div>
	<hr>
	<div class="row mla-record">
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Education Records</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item">Graduate Professional</li>
					<li class="list-group-item">B.Sc in 1977-78, B.ed in 1980-81 from Pune Vidyapeeth</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Legal Records</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#" target="_blank">Accused</a>
						<span class="value label label-danger">Yes</span>
					</li>
					<li class="list-group-item">
						Convicted
						<span class="value label label-info">No</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Financial Records</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						<a href="#" target="_blank">Movable Assets</a>
						<span class="value">Rs 200000/-</span>
					</li>
					<li class="list-group-item">
						<a href="#" target="_blank">Immovable Assets</a>
						<span class="value">Rs 200000/-</span>
					</li>
					<li class="list-group-item">
						<a href="#" target="_blank">Liability</a>
						<span class="value">Rs 200000/-</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<h3 class="sub-header">MLA on Social Media</h3>
	<div class="row">
		<div class="col-xs-6">
			<div class="eswaraj-int-facebook">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-show-border="false" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="eswaraj-int-twitter">
				<a class="twitter-timeline" href="https://twitter.com/somnath_sn" data-widget-id="505705935222747136">Tweets by @somnath_sn</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</div>
	<h3  class="sub-header">MLA Calender</h3>
	<div class="row">
		<div class="col-sm-12">
			<img src="images/mla-calendar.png" width="100%" alt="">
		</div>
	</div>
</div>
<?php include("footer.php"); ?>