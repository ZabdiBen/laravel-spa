<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <title>@yield('title')</title>
  </head>
  
  <body>
    
    <nav>
			{{  dump(request()->path())	}}
			<ul>
					<li> <a href="/" >Home</a> </li>
					<li> <a href="/about" >About</a> </li>
					<li> <a href="/portfolio" >Portfolio</a> </li>
					<li> <a href="/contact" >Contact</a> </li>
			</ul>
    </nav>
    
    <div>
			@yield('content')
    </div>
    
    
  </body>
 
</html>  
  
  