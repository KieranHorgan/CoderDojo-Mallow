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
                  <a href="/learn/html/9" class="floatLeft">Previous Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Lists</h2>

                <h3>Unordered HTML Lists</h3>
                
                <p>An unordered list starts with the <strong>&lt;ul&gt;</strong> tag. Each list item starts with the <strong>&lt;li&gt;</strong> tag.</p>
                <p>The list items will be marked with bullets (small black circles).</p>

                <div class="code">
                  <pre class="brush: xml">
&lt;ul>
  &lt;li>Coffee&lt;/li>
  &lt;li>Tea&lt;/li>
  &lt;li>Milk&lt;/li>
&lt;/ul>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=10p1' target="_blank" class ="tryIt">Try it Yourself</a>
          
              </section>
              <section>
                
                <h3>Unordered HTML Lists</h3>
                
                <p>An ordered list starts with the <strong>&lt;ol&gt;</strong> tag. Each list item starts with the <strong>&lt;li&gt;</strong> tag.</p>
                <p>The list items will be marked with numbers.</p>

                <div class="code">
                  <pre class="brush: xml">
&lt;ol>
  &lt;li>Coffee&lt;/li>
  &lt;li>Tea&lt;/li>
  &lt;li>Milk&lt;/li>
&lt;/ol>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=10p2' target="_blank" class ="tryIt">Try it Yourself</a>

                <br/>

                <div>
                  <a href="/learn/html/9" class="floatLeft">Previous Lesson</a>
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
          $("#learnNav li li:nth-child(10)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>