<form method="GET" action="">
	<input name="search" type="text">
	<button type="submit">search</button>
</form>


<form action="<?php echo URL; ?>search" method="POST" class="mb20">
  <div class="row">                  
      <div class="input-wrap col-sm-12">
          <input type="text" placeholder="Type username" name="username" autocomplete="off" />
      </div>                                      
  </div></br> 
  <input type="submit" value="Search" name="search_user" />
</form> 

<?php

if (isset($checkUser)) {
  echo '<ul>';
  foreach ($checkUser as $key => $value) {
    echo '<li>';
    echo $value->name;
    echo '</li>';
  }
  echo '</ul>';
}