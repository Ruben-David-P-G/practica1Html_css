<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

  body {
   font: 24px Helvetica;
   background: #999999;
  }

  #main {
   min-height: 800px;
   display: -webkit-flex;
   display:         flex;
   -webkit-flex-flow: row;
           flex-flow: row;
   }
 
  #main > .article {
  
   background: #dddd88;
   -webkit-flex: 3 1 60%;
           flex: 3 1 60%;
   -webkit-order: 2;
           order: 2;
   }
  
  #main > .nav {
   margin: 0px;
   background: #ccccff;
   -webkit-flex: 1 6 20%;
           flex: 1 6 20%;
   -webkit-order: 1;
           order: 1;
   }
  
  #main > .saside {
   background: #ccccff;
   -webkit-flex: 1 6 20%;
           flex: 1 6 20%;
   -webkit-order: 2;
           order: ;
   }
 
  header, footer {
   display: block;
   margin: 0px;
   min-height: 200px;
   background: #ffeebb;
   }
 
  /* Too narrow to support three columns */
  @media all and (max-width: 640px) {
  
   #main{
    
            flex-flow: column;
   }


  
 
  }

 </style>
  </head>
  <body>
 <header>header</header>
 <div id='main'>
    <div class="article">article</div>
    <div class="nav">nav</div>
    <div class="aside">aside</div>
 </div>
 <footer>footer</footer>
  </body>
</html>