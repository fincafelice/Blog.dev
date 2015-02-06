<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h2><a href="#">Blogs Galore!</a></h2>
    </div>

    <!-- Need action for search-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search" method="GET" action="{{{ action('PostsController@index') }}}">
        <div class="form-group">
          <input type="text" class="form-control" name = "search" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
        
        @if (Auth::guest())
        <li> <a href="{{{ action('HomeController@doLogin') }}}">Log In </a></li>
        @else 
        <h4>Welcome, {{{ Auth::user()->email }}}</h4>
        <li><a href="{{{ action('HomeController@doLogout') }}}">Log Out</a></li>

        @endif
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>