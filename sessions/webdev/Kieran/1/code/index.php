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
            
              <h2>HTML Recap</h2>

              <p class="alignCenter">The code for this week's session contains:</p>

              <ul>
                <li>A recap of HTML elements such as</li>

                <ul>
                  <li>Headings,</li>
                  <li>Paragraphs,</li>
                  <li>Links,</li>
                  <li>Images,</li>
                  <li>Lists,</li>
                  <li>Bolds and Italics,</li>
                  <li>And divs;</li>
                </ul>

                <li>And some basic CSS properties, including:</li>

                <ul>
                  <li>Font colo(u)r, size and weight,</li>
                  <li>Text-align,</li>
                  <li>Background colour,</li>
                  <li>Border properties,</li>
                  <li>And width and height.</li>
                </ul>

              </ul>

              <p class="alignCenter">The source code for this week is as follows:</p>
            
              <div class="code">
                <pre class="brush: xml">
&lt;!DOCTYPE html>

&lt;html>
  &lt;head>
    &lt;style>
	
h1 {
  color: blue;
  font-weight: 100;
  font-size: 40px;
  text-align: center;
}

p a {
  font-size: 70px;
}

div {
  background-color: green;
  height: 50px;
  width: 200px;
  border: 5px dashed aqua;
}
	
	&lt;/style>
  &lt;/head>
 
  &lt;body>
  
    &lt;a href="home.html">Home&lt;/a>
	&lt;a href="about.html">About&lt;/a>
	&lt;a href="cookies.html">Cookies!&lt;/a>
	&lt;a href="contact.html">Contact Us&lt;/a>
	
	&lt;p>&lt;a href="codecademy.com">Codecademys&lt;/a>&lt;/p>
  
    &lt;h1>HTML at CoderDojo Mallow&lt;/h1>
	&lt;p>&lt;i>Fun&lt;/i> &lt;b>fun&lt;/b> &lt;i>&lt;b>fun&lt;/b>&lt;/i>&lt;/p>
	
	&lt;ul>
	  &lt;li>A&lt;/li>
	  &lt;li>B&lt;/li>
	&lt;/ul>
	
	&lt;ol>
	  &lt;li>A&lt;/li>
	  &lt;li>B&lt;/li>
	&lt;/ol>
	
	&lt;img src="coderdojo.jpg"/>
	
	&lt;div>
      &lt;a href="http://www.google.com">Google&lt;/a>
	&lt;/div>
	
  &lt;/body>
&lt;/html>
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