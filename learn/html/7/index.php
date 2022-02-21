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
                  <a href="/learn/html/6" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/8" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Style</h2>

                <p>Every HTML element has a <strong>default style</strong> (background color is white and text color is black).</p>
                <p>Changing the default style of an HTML element, can be done with the <strong>style attribute</strong>.</p>
                <p>This example changes the default background color from white to lightgrey:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;body style="background-color:lightgrey">

&lt;h1>This is a heading&lt;/h1>
&lt;p>This is a paragraph.&lt;/p>

&lt;/body>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=7p1' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>
                
                <h3>The HTML Style Attribute</h3>
                <p>The HTML style attribute has the following <strong>syntax</strong>:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">style="property:value"</pre>
                </div>

                <p>The <em><strong>property</strong></em> is a CSS property. The <em><strong>value</strong></em> is a CSS value.</p>
                
              </section>
              <section>
                
                <h3>HTML Text Color</h3>

                <p>The <strong>color</strong> property defines the text color to be used for an HTML element:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;h1 style="color:blue">This is a heading&lt;/h1>
&lt;p style="color:red">This is a paragraph.&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=7p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>
                
                <h3>HTML Text Size</h3>

                <p>The <strong>font-size</strong> property defines the text size to be used for an HTML element:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;h1 style="font-size:300%">This is a heading&lt;/h1>
&lt;p style="font-size:160%">This is a paragraph.&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=7p3' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>
                
                <h3>HTML Text Alignment</h3>

                <p>The <strong>text-align</strong> property defines the horixontal text alignment to be used for an HTML element:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;h1 style="text-align:center">Centered Heading&lt;/h1>
&lt;p>This is a paragraph.&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=7p4' target="_blank" class ="tryIt">Try it Yourself</a>

                <br/>

                <div>
                  <a href="/learn/html/6" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/8" class="floatRight">Next Lesson</a>
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
          $("#learnNav li li:nth-child(7)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>