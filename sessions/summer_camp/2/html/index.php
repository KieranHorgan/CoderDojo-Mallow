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
    <?php include("../../../../head.php"); ?>
    <?php include("../../../sessionsHead.php"); ?>
    <script type="text/javascript" src="sessions/resources/shBrushXml.js"></script>
  </head>
  <body>
    <?php include("../../../../nav.php"); ?>
    
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
            
              <h2>The Code</h2>

              <p class="alignCenter">The code for the second day of CoderDojo Mallow's Summer Camp is as follows:</p>
            
              <div class="code">
                <pre class="brush: xml">
&lt;!DOCTYPE html&gt;

&lt;html&gt;

	&lt;head&gt;
		&lt;title&gt;HTML Recap&lt;/title&gt;
	&lt;/head&gt;
	
	&lt;body style=&quot;background-color:black;&quot;&gt;

	    &lt;div style=&quot;background-color: white; text-align:center;&quot;&gt;

    	    &lt;p style=&quot;color: red&quot;&gt;This paragraph is red! &lt;/p&gt;

	        &lt;div style=&quot;background-color: aqua; height: 300px; width: 1000px;&quot;&gt;
		        &lt;h1 &gt;H1&lt;/h1&gt;
		        &lt;h2 style=&quot;color:red; text-align: left;&quot;&gt;H2&lt;/h2&gt;
		        &lt;em&gt;&lt;h3 style=&quot;color:green; text-align:center&quot;&gt;H3&lt;/h3&gt;&lt;/em&gt;
		        &lt;h4 style=&quot;color:orange; text-align:center&quot;&gt;H4&lt;/h4&gt;
		        &lt;h5 style=&quot;color:yellow;&quot;&gt;H5&lt;/h5&gt;
		        &lt;em&gt;&lt;h6 style=&quot;color:purple; text-align:left&quot;&gt;H6&lt;/h6&gt;&lt;/em&gt;
	        &lt;/div&gt;

		    &lt;div style=&quot;background-color:red; width:500px; height: 400px;&quot;&gt; &lt;img src=&quot;coderdojo.png&quot;/&gt;
		        &lt;table border=&quot;1px&quot; style=&quot;background-color: white; border-color:green;&quot;&gt;
                    &lt;thead&gt;
                        &lt;tr&gt;
                            &lt;th colspan=&quot;2&quot; style=&quot;color:red;&quot;&gt;Famous Monsters by Birth Year&lt;/th&gt;
                        &lt;/tr&gt;
                        &lt;tr&gt;
                            &lt;th&gt;Famous Monster&lt;/th&gt;
                            &lt;th&gt;Birth Year&lt;/th&gt;
                        &lt;/tr&gt;
                    &lt;/thead&gt;
                    &lt;tbody&gt;
                        &lt;tr&gt;
                            &lt;td&gt;King Kong&lt;/td&gt;
                            &lt;td&gt;1933&lt;/td&gt;     
                        &lt;/tr&gt;
                
                        &lt;tr&gt;
                            &lt;td&gt;Dracula&lt;/td&gt;
                            &lt;td&gt;1897&lt;/td&gt;
                        &lt;/tr&gt;
                
                        &lt;tr&gt;
                            &lt;td&gt;Bride of Frankenstein&lt;/td&gt;
                            &lt;td&gt;1935&lt;/td&gt;
                        &lt;/tr&gt;
                    &lt;/tbody&gt;
                &lt;/table&gt;
		    &lt;/div&gt;

		    &lt;p style=&quot;color:white; font-size:30px;&quot;&gt;This is a &lt;a href=&quot;http://www.youtube.com&quot;&gt;website&lt;/a&gt; about &lt;span  style=&quot;color:green; font-family:chiller;&quot;&gt;everything I have learned&lt;/span&gt; in &lt;strong&gt;html&lt;/strong&gt;.&lt;/p&gt;

        &lt;/div&gt;
         
	&lt;/body&gt;
	
&lt;/html&gt;
                </pre>
              </div>
            
            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .sessionsNav and .sessionsMain
          
         --><?php include("../../../sessionsNav.php")?>
          
          </section>
          
        </article>

      </div>
    <?php include("../../../../footer.php"); ?>
    
    </div>
    <script src="sessions/sessionsTest.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>