@extends('master')

@section('content')


	<!--NAVBAR --> 
  <nav>
    <div class="nav-wrapper">
	  	<a href="/perfil" class="brand-logo center">Logo</a>
	  	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  		<ul class="right hide-on-med-and-down">
    		<li><a href="/perfil">Perfil</a></li>
    		<li class="active"><a href="/matricula">Situação Matricula</a></li>
    		<li><a href="collapsible.html">Sair da conta</a></li>
  		</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
    	<li><a href="sass.html">Sass</a></li>
    	<li><a href="badges.html">Components</a></li>
    	<li><a href="collapsible.html">Javascript</a></li>
    	<li><a href="mobile.html">Mobile</a></li>
  </ul>



@stop