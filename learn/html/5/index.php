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
    <?php include("../../../head.php"); ?>
    <?php include("../../learnHead.php"); ?>
    <script type="text/javascript" src="/resources/shBrushXml.js"></script>
  </head>
  <body>
    <?php include("../../../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (Ie under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt Ie 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <div id="contentWrapper">

        <!-- Main content, Larger section on the left -->
        <article class="articleFull">
        
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">

            <section id="learnMain">
          
              <section>

                <div>
                  <a href="/learn/html/4" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/6" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Attributes</h2>

                <p class="intro">Attributes provide additional information about HTML elements.</p>

                <ul>
                  <li>HTML elements can have <b>attributes</b></li>
                  <li>Attributes provide <b>additional information</b> about an element</li>
                  <li>Attributes are always specified in <b>the start tag</b></li>
                  <li>Attributes come in name/value pairs like: <b>name="value"</b></li>
                </ul>

              </section>
              <section>

                <h3>The href Attribute</h3>
                
                <p>HTML links are defined with the <strong>&lt;a&gt;</strong> tag. The link address is specified in the <b>href</b> attribute:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;a href="http://coderdojomallow.com">This is a link&lt;/a>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=5p1' target="_blank" class ="tryIt">Try it Yourself</a>
                
                <p>You will learn more about links and the &lt;a&gt; tag later in this tutorial.</p>

              </section>
              <section>

                <h3>Size Attributes</h3>
                
                <p>HTML images are defined with the <strong>&lt;img&gt;</strong> tag.</p>
                <p>The filename of the source (<strong>src</strong>), and the size of the image (<strong>width</strong> and <strong>height</strong>) are all provided as <strong>attributes</strong>:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;img src="CoderDojoMallow.jpg" width="104" height="142">
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=5p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
                <p>The image size is specified in pixels: width="104" means 104 screen pixels wide.</p>
                <p>You will learn more about images and the &lt;img&gt; tag later in this tutorial.</p>
          
              </section>
              <section>

                <h3>Alt Attribute</h3>
                
                <p>The <strong>alt</strong> attribute specifies an alternative text to be used, when an HTML element cannot be displayed.</p>
                <p>The value of the attribute can be read by "screen readers". This way, someone "listening" to the webpage, i.e. a blind person, can "hear" the element.</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;img src="CoderDojoMallow.jpg" alt="CoderDojo Mallow" width="104" height="142">
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=5p3' target="_blank" class ="tryIt">Try it Yourself</a>
          
              </section>
              <section>

                <h3>Attribute Reference</h3>
                
                <p>A full list of HTML attributes can be found <a href="http://www.w3schools.com/tags/default.asp">here</a>.</p>

                <br/>

                <div>
                  <a href="/learn/html/4" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/6" class="floatRight">Next Lesson</a>
                </div>
          
              </section>

            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .learnNav and .learnMain
          
         --><?php include("../../learnNav.php")?>
          
          </section>
          
        </article>

      </div>

      <?php include("../../../footer.php"); ?>

      <script>

        $(document).ready(function () {
          $("#navDropdown li:nth-child(2) a").addClass("clicked");
          $("#fixedNav li:nth-child(2) a").addClass("clicked");
          $("#learnNav li li:nth-child(5)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>