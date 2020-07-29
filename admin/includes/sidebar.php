 <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="posts.php">
        <i class="far fa-file-word"></i>
        <span>Posts</span>
      </a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="create.php">
       	<i class="fas fa-folder-plus"></i>
        <span>Create New</span>
      </a>
    </li>

    <?php 
    	if($user->data()->role === 'admin') 
    	{
    ?>

	    <li class="nav-item active">
	      <a class="nav-link" href="index.php">
	       	<i class="fas fa-users"></i>
	        <span>Users</span>
	      </a>
	    </li>

	    <li class="nav-item active">
	      <a class="nav-link" href="index.php">
	        <i class="fas fa-list"></i>
	        <span>Subscriptions</span>
	      </a>
	    </li>

    <?php
    	}
    ?>

    
  </ul>