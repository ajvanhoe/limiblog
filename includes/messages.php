<?php
// uspeh
if(Session::exists('success')) {
	echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'. Session::msg('success').		    		    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
         </div>';
}
// greska
if(Session::exists('error')) {
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'. Session::msg('error').		    		    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
         </div>';
}
// greske
if(Session::exists('errors')) {
	$errors = Session::msg('errors');

	foreach ($errors as $error) {
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'.$error.
		'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
         </div>';
	}
}

// upozorenje
if(Session::exists('warning')) {
	echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'. Session::msg('warning').		    		    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
         </div>';
}