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
                  <a href="/learn/html/5" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/7" class="floatRight">Next Lesson</a>
                </div>
                
                <h2 class="clearFix">HTML Paragraphs</h2>

                <p>HTML documents are divided into paragraphs.</p>
                <p>The HTML <strong>&lt;p&gt;</strong> element defines a <strong>paragraph</strong>.</p>

                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;p>This is a paragraph&lt;/p>
&lt;p>This is another paragraph&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=6p1' target="_blank" class ="tryIt">Try it Yourself</a>
          
              </section>
              <section>

                <h3>HTML Display</h3>
                
                <p>You cannot be sure how HTML will be displayed.</p>
                <p>Large or small screens, and resized windows will create different results. </p>
                <p>With HTML, you cannot change the output by adding extra spaces or extra lines in your HTML code.</p>
                <p>The browser will remove extra spaces and extra lines when the page is displayed.</p>
                <p>Any number of spaces, and any number of new lines, count as <strong>only one space</strong>.</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;p>
This paragraph
contains a lot of lines
in the source code,
but the browser 
ignores it.
&lt;/p>

&lt;p>
This paragraph
contains         a lot of spaces
in the source         code,
but the        browser 
ignores it.
&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=6p2' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>HTML Line Breaks</h3>

                <p>The HTML <strong>&lt;br&gt;</strong> element defines a <strong>line break</strong>.</p>
                <p>Use &lt;br&gt; if you want a line break (a new line) without starting a new paragraph:</p>
          
              </section>
              <section>

                <h3>The Poem Problem</h3>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;p>This poem will display as one line:&lt;/p>
&lt;p>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
&lt;/p>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=6p3' target="_blank" class ="tryIt">Try it Yourself</a>
                
              </section>
              <section>

                <h3>The HTML &lt;pre&gt; Element</h3>

                <p>The HTML &lt;pre&gt; element defines preformatted text.</p>
                <p>The text inside a &lt;pre&gt; element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:</p>
                
                <div class="code noGutter">
                  <pre class="brush: xml">
&lt;pre>
  My Bonnie lies over the ocean.

  My Bonnie lies over the sea.

  My Bonnie lies over the ocean.

  Oh, bring back my Bonnie to me.
&lt;/pre>
                  </pre>
                </div>
                <a href='/tryit.php?learnPg=6p4' target="_blank" class ="tryIt">Try it Yourself</a>

                <br/>

                <div>
                  <a href="/learn/html/5" class="floatLeft">Previous Lesson</a>
                  <a href="/learn/html/7" class="floatRight">Next Lesson</a>
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
          $("#learnNav li li:nth-child(6)").addClass("clicked");
        })

      </script>
    
    </div>
    <script src="/learn/js/learnScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>