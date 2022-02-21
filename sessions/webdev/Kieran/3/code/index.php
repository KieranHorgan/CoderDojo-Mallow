<!--

Hello there.
I see you looking at my source code. That's good! It's one of the best ways to learn how to code.
All the code you see here (bar jQuery and Modernizr) was done by me.

The biggest thing I had trouble with was the nav (Oh God!!!!), trying to get it fully responsive
so it look sweet on those troublesome smartphones, as well on those pesky 1920x1080 monitors!
The article and aside also put up a good fight but I managed to put them back where they belong!

The site is fully responsive, lightweight, has a clean, modern look, and is commmented throughout,
to make the learning process much easier, and to give a bit of insight into why I did what.

Anyways, you better get on with exploring!
Happy coding!

  -Kieran H.

-->

<!DOCTYPE html>

<html lang="en">
  <head>
    <?php include("../../../../../head.php"); ?>
    <?php include("../../../../sessionsHead.php"); ?>
    <script type="text/javascript" src="/resources/shBrushXml.js"></script>
    <script type="text/javascript" src="/resources/shBrushCss.js"></script>
  </head>
  <body>
    <?php include("../../../../../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (IE under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt IE 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <div id="contentWrapper">
      
        <!-- Main content, Larger section on the left -->
        <article class="articleFull">
        
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">
          
            <section id="sessionsMain">
            
              <h2>Website Navigation Menu</h2>

              <p class="alignCenter">The code for this week's session contains:</p>

              <ul>
                <li>A simple navigation bar, made with:</li>

                <ul>
                  <li>A heading,</li>
                  <li>Some links,</li>
                  <li>And a &lt;nav> element (similar to a div).</li>
                </ul>

                <li>And the main content(article) with your own content.</li>

              </ul>
              
              <p>The source code consists of two files, one for the homepage and one for the CSS.</p>
              <p class="alignCenter">The HTML code for the homepage for this week is as follows:</p>
            
              <div class="code">
                <pre class="brush: xml">
&lt;!DOCTYPE html>

&lt;html>
  &lt;head>
    &lt;title>My Website&lt;/title>
	
	&lt;link href="CD Week3.css" type="text/css" rel="stylesheet">
	
  &lt;/head>
  &lt;body>
    
	&lt;nav>
	  
	  &lt;a href="home.html">Home&lt;/a>
	  &lt;a href="about.html">About&lt;/a>
	  &lt;a href="contact.html">Contact&lt;/a>
	  
	  &lt;h1>Manchester United&lt;/h1>
	  
	&lt;/nav>
	
	&lt;article>
	
	  &lt;h2>Welcome!&lt;/h2>
	  
	  &lt;p>Hi, this is my website&lt;/p>
	
	&lt;/article>
	
  &lt;/body>
&lt;/html>
                </pre>
              </div>
              
              <p class="alignCenter">The CSS code for this week is as follows:</p>
            
              <div class="code">
                <pre class="brush: css">
html, body {
  margin: 0;
  height: 100%;
  background: lightgrey;
}

nav {
  background: darkblue;
}

nav h1 {
  display: inline;
  margin-left: 150px;
  color: lightblue;
}

nav a {
  display: inline-block;
  color: lightblue;
  padding: 10px;
  margin-right: -5px;
}

article {
  min-height: 100%;
  width: 80%;
  background: white;
  left: 10%;
  position: relative;
}
                </pre>
              </div>
            
            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .sessionsNav and .sessionsMain
          
         --><?php include("../../../../sessionsNav.php")?>
          
          </section>
          
        </article>

      </div>
    <?php include("../../../../../footer.php"); ?>
    
    </div>
    <script src="/sessions/sessionsScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>