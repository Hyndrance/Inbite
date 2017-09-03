<li class="nav-item start ">
	<a href="../home/" class="nav-link ">
		<i class="icon-home"></i>
		<span class="title">Home</span>
	</a>
</li>
<li class="nav-item start ">
	<a href="../home/?view=add" class="nav-link ">
		<i class="fa fa-plus-square-o"></i>
		<span class="title">Post</span>
	</a>
</li>
<li class="heading">
	<h3 class="uppercase">Follow</h3>
</li>
<li class="nav-item start ">
	<a href="../follow/?view=following" class="nav-link nav-toggle">
		<i class="icon-user-following"></i>
		<span class="title">Following</span>
        <span class="badge badge-danger"><?=countFollowing($username);?></span>
	</a>
</li>
<li class="nav-item start ">
	<a href="../follow/?view=follower" class="nav-link nav-toggle">
		<i class="icon-user"></i>
		<span class="title">Follower</span>
        <span class="badge badge-success"><?=countFollowers($username);?></span>
	</a>
</li>