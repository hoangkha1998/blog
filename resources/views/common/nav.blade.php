<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
  <div class="container">

       <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="icon icon-bar"></span>
                 <span class="icon icon-bar"></span>
                 <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">My Blog</a>
       </div>

       <!-- MENU LINKS -->
       <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">              
                 <li class="{{request()->is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
                 <li class="{{request()->is('blog') ? 'active' : ''}}"><a href="/blog">Blog</a></li>
                 <li class="{{request()->is('about') ? 'active' : ''}}"><a href="/about">About Us</a></li>
                 <li class="{{request()->is('team') ? 'active' : ''}}"><a href="/team">Authors</a></li>
                 <li class="{{request()->is('contact') ? 'active' : ''}}"><a href="/contact">Contact Us</a></li>
            </ul>
       </div>

  </div>
</section>