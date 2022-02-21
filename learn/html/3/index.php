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
                  <a href="/learn/html/2" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/4" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Basics</h2>

                <p>Don't worry if you donn't understand the tags used in these examples, you will learn them in the next few lessons.</p>
              
                <h3>HTML Documents</h3>

                <p>All HTML documents must start with a type declaration: <strong>&lt;!DOCTYPE html&gt;</strong>.</p>
                <p>The HTML document itself begins with <strong>&lt;html&gt;</strong> and ends with <strong> &lt;/html&gt;</strong>.</p>
                <p>The visible part of the HTML document is between <strong>&lt;body&gt;</strong> and <strong>&lt;/body&gt;</strong>. </p>
                

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;!DOCTYPE html>

&lt;html>
  &lt;head>
  &lt;/head>
  
  &lt;body>

    &lt;h1>My First Heading&lt;/h1>
    
    &lt;p>My first paragraph.&lt;/p>

  &lt;/body>
&lt;/html>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=3p1' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>HTML Headings</h3>
                
                <p>HTML headings are defined with the <strong>&lt;h1&gt;</strong> to <strong>&lt;h6&gt;</strong> tags:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;h1>This is a heading&lt;/h1>
&lt;h2>This is a heading&lt;/h2>
&lt;h3>This is a heading&lt;/h3>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=3p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>HTML Paragraphs</h3>
                
                <p>HTML paragraphs are defined with the <strong>&lt;p&gt;</strong> tag:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;p>This is a paragraph&lt;/p>
&lt;p>This is another paragraph&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=3p3' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>HTML Links</h3>
                
                <p>HTML links are defined with the <strong>&lt;a&gt;</strong> tag:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;a href="http://coderdojomallow.com">This is a link&lt;/a>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=3p4' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>HTML Images</h3>
                
                <p>HTML images are defined with the <strong>&lt;img&gt;</strong> tag:</p>
                <p>The source file (<strong>src</strong>) and alternative text (<strong>alt</strong>) are provided as <strong>attributes</strong>:</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;img src="CoderDojoMallow.jpg" alt="CoderDojo Mallow">
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=3p5' target="_blank" class ="tryIt">Try it Yourself</a>

                <br/>

                <div>
                  <a href="/learn/html/2" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/4" class="floatRight">Next Lesson</a>
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
          $("#learnNav li li:nth-child(3)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>