<!DOCTYPE HTML>
<html>
    <head>
    
      @include('users.layouts.headerFiles')

    </head>
    <body>
        
 

       @include('users.layouts.header')
       @include('users.layouts.sidebar')
            @section('main-content')

                @show 
             
       @include('users.layouts.footerFiles')
       
  
    </body>
</html>

