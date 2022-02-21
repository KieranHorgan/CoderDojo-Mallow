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
                  <a href="/learn/html/3" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/5" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Elements</h2>

                <p>HTML <strong>documents</strong> are made up by HTML <strong>elements</strong>.</p>

                <p>HTML elements are written with a <strong>start</strong> tag, with an <strong>end</strong> tag, with the <strong>content</strong> in between:</p>

                <div class="code">
                  <pre class="brush: xml">
&lt;tagname>content&lt;/tagname>
                  </pre>
                </div>

                <p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>
                
                <div class="code">
                  <pre class="brush: xml">
&lt;p>My first HTML paragraph&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=4p1' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>Nested HTML elements</h3>

                <p>HTML elements can be nested (elements can contain elements).</p>
                <p>All HTML documents consist of nested HTML elements.</p>
                <p>This example contains 4 HTML elements:</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;!DOCTYPE html>

&lt;html>
  
  &lt;body>

    &lt;h1>My First Heading&lt;/h1>
    
    &lt;p>My first paragraph.&lt;/p>

  &lt;/body>
&lt;/html>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=4p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h2>HTML Example Explained</h2>

                <p>The <strong>&lt;html&gt;</strong> element defines the <strong>whole document</strong>.</p>
                <p>It has a <strong>start</strong> tag &lt;html&gt; and an <strong>end</strong> tag &lt;/html&gt;.</p>
                <p>The element <strong>content</strong> is another HTML element (the &lt;body&gt; element).</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;html>
  
  &lt;body>

    &lt;h1>My First Heading&lt;/h1>
    
    &lt;p>My first paragraph.&lt;/p>

  &lt;/body>
&lt;/html>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=4p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <p>The <strong>&lt;body&gt;</strong> element defines the <strong>document body</strong>.</p>
                <p>It has a <strong>start</strong> tag &lt;body&gt; and an <strong>end</strong> tag &lt;/body&gt;.</p>
                <p>The element <strong>content</strong> is two other HTML elements (&lt;h1&gt; and &lt;p&gt;).</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;body>

  &lt;h1>My First Heading&lt;/h1>
    
  &lt;p>My first paragraph.&lt;/p>

&lt;/body>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=4p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <p>The <strong>&lt;h1&gt;</strong> element defines a <strong>heading</strong>.</p>
                <p>It has a <strong>start</strong> tag &lt;h1&gt; and an <strong>end</strong> tag &lt;/h1&gt;.</p>
                <p>The element <strong>content</strong> is: My First Heading.</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">&lt;h1>My First Heading&lt;/h1></pre>
                </div>
                <a href='/tryit.php?learnPg=4p3' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <p>The <strong>&lt;p&gt;</strong> element defines a <strong>paragraph</strong>.</p>
                <p>It has a <strong>start</strong> tag &lt;p&gt; and an <strong>end</strong> tag &lt;/p&gt;.</p>
                <p>The element <strong>content</strong> is: My first paragraph.</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">&lt;p>My First paragraph&lt;/p></pre>
                </div>
                <a href='/tryit.php?learnPg=4p1' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>Don't forget the End Tag!</h3>

                <p>Some HTML elements will display correctly, even if you forget the end tag:</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;html>
  
  &lt;body>

    &lt;p>My first paragraph.
    &lt;p>My first paragraph.

  &lt;/body>
&lt;/html>
                  </pre>
                </div>
                
              </section>
              <section>

                <h2>Empty HTML Elements</h2>

                <p>HTML elements with no content are called empty elements.</p>
                <p>&lt;br&gt; is an empty element without a closing tag (the &lt;br&gt; tag defines a line break).</p>
                <p>Empty elements can be "closed" in the opening tag like this: &lt;br /&gt;.</p>
                <p>HTML5 does not require empty elements to be closed. But if you want stricter validation, or you need to make your document readable by XML parsers, you should close all HTML elements.</p>
                
              </section>
              <section>

                <div>
                  <a href="/learn/html/3" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/5" class="floatRight">Next Lesson</a>
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
          $("#learnNav li li:nth-child(4)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>