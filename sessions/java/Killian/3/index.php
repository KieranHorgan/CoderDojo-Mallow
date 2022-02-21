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
    <script type="text/javascript" src="/resources/shBrushJava.js"></script>
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
            
              <h1>10th June 2015 - Scanner, Strings and Variables</h1>

              <p>Here is the cheat sheet provided at this weeks session:</p>

              <p><b><u>Variable Names and Values:</u></b></p>
              <table>
                <tr>
                  <th>VARIABLE</th>
                  <th>SIZE</th>
                  <th>Range</th>
                  <th>DATA TYPE</th>
                </tr>
                <tr>
                  <td>byte</td>
                  <td>8 bits (a byte)</td>
                  <td>-128 - +127</td>
                  <td>Whole numbers only</td>
                </tr>
                <tr>
                  <td>short</td>
                  <td>2 bytes</td>
                  <td>-32,768 - +32,767</td>
                  <td>Whole numbers only</td>
                </tr>
                <tr>
                  <td>int</td>
                  <td>4 bytes</td>
                  <td>-2,147,483,648 - +2,147,483,647</td>
                  <td>Whole numbers only</td>
                </tr>
                <tr>
                  <td>long</td>
                  <td>8 bytes</td>
                  <td>-9,223,372,036,854,755,808 - <br>+9,223,372,036,854,755,808</td>
                  <td>Whole numbers only</td>
                </tr>
                <tr>
                  <td>float</td>
                  <td>4 bytes</td>
                  <td>Floating point values, IEE Standard <br>754</td>
                  <td>Low precision decimal <br>point numbers</td>
                </tr>
                <tr>
                  <td>double</td>
                  <td>8 bytes</td>
                  <td>Floating point values, IEE Standard <br>754</td>
                  <td>High precision decimal <br>point numbers</td>
                </tr>
                <tr>
                  <td>char</td>
                  <td>2 bytes</td>
                  <td>If it's a keystroke or symbol on the <br>keyboard, it will store it</td>
                  <td>ONE single keystroke <br>or character at a time</td>
                </tr>
                <tr>
                  <td>boolean</td>
                  <td>1 byte</td>
                  <td>True or False</td>
                  <td>Underlying value stored <br>as 1 (True) or 0 (False)</td>
                </tr>
                <tr>
                  <td>string</td>
                  <td>2 bytes (per <br>character)</td>
                  <td>No limit (realistically)</td>
                  <td>Collection of characters</td>
                </tr>
              </table>
              
              <p><b><u>Special Characters:</u></b></p>
              <table>
                <tr>
                  <th>CODE SEQUENCE<br></th>
                  <th>DESCRIPTION</th>
                </tr>
                <tr>
                  <td>\b</td>
                  <td>Inserts a backspace at this point in the text<br></td>
                </tr>
                <tr>
                  <td>\t</td>
                  <td>Inserts a tab at this point in the text</td>
                </tr>
                <tr>
                  <td>\n</td>
                  <td>Inserts a new line at this point in the text</td>
                </tr>
                <tr>
                  <td>\f</td>
                  <td>Inserts a formfeed at this point in the text</td>
                </tr>
                <tr>
                  <td>\"</td>
                  <td>Inserts double quotation marks at this point in the text</td>
                </tr>
                <tr>
                  <td>\'</td>
                  <td>Inserts a single quotation mark at this point in the text</td>
                </tr>
                <tr>
                  <td>\\<br></td>
                  <td>Inserts a backslash at this point in the text</td>
                </tr>
              </table>
              
              <p><b><u>Reserved Words:</u></b></p>
              <table summary="" border="0" cellpadding="0" width="100%">
<tbody><tr>
<td width="20%" align="left"><code>abstract</code></td>
<td width="20%" align="left"><code>continue</code></td>
<td width="20%" align="left"><code>for</code></td>
<td width="20%" align="left"><code>new</code></td>
<td width="20%" align="left"><code>switch</code></td>
</tr>
<tr>
<td width="20%"><code>assert</code><sup></sup></td>
<td width="20%" align="left"><code>default</code></td>
<td width="20%" align="left"><code>goto</code><sup></sup></td>
<td width="20%" align="left"><code>package</code></td>
<td width="20%" align="left"><code>synchronized</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>boolean</code></td>
<td width="20%" align="left"><code>do</code></td>
<td width="20%" align="left"><code>if</code></td>
<td width="20%" align="left"><code>private</code></td>
<td width="20%" align="left"><code>this</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>break</code></td>
<td width="20%" align="left"><code>double</code></td>
<td width="20%" align="left"><code>implements</code></td>
<td width="20%" align="left"><code>protected</code></td>
<td width="20%" align="left"><code>throw</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>byte</code></td>
<td width="20%" align="left"><code>else</code></td>
<td width="20%" align="left"><code>import</code></td>
<td width="20%" align="left"><code>public</code></td>
<td width="20%" align="left"><code>throws</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>case</code></td>
<td width="20%" align="left"><code>enum</code><sup></sup></td>
<td width="20%" align="left"><code>instanceof</code></td>
<td width="20%" align="left"><code>return</code></td>
<td width="20%" align="left"><code>transient</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>catch</code></td>
<td width="20%" align="left"><code>extends</code></td>
<td width="20%" align="left"><code>int</code></td>
<td width="20%" align="left"><code>short</code></td>
<td width="20%" align="left"><code>try</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>char</code></td>
<td width="20%" align="left"><code>final</code></td>
<td width="20%" align="left"><code>interface</code></td>
<td width="20%" align="left"><code>static</code></td>
<td width="20%" align="left"><code>void</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>class</code></td>
<td width="20%" align="left"><code>finally</code></td>
<td width="20%" align="left"><code>long</code></td>
<td width="20%" align="left"><code>strictfp</code><sup></sup></td>
<td width="20%" align="left"><code>volatile</code></td>
</tr>
<tr>
<td width="20%" align="left"><code>const</code><sup></sup></td>
<td width="20%" align="left"><code>float</code></td>
<td width="20%" align="left"><code>native</code></td>
<td width="20%" align="left"><code>super</code></td>
<td width="20%" align="left"><code>while</code></td>
</tr>
</tbody></table>

              <h2>The Code for this week is as follows:</h2>

              <div class="code">
                <pre class="brush: java">
package HelloWorld;

import java.util.Scanner;

public class HelloWorld {

  public static void main(String[] args) {
  
    Scanner sc = new Scanner(System.in);
    System.out.println("What is your name");  
    String yourname = sc.next();
    String ysname = sc.next();
    System.out.println("Hello " + yourname + " " + ysname ); 
  
    sc.close();

  }

}
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
    <script src="/sessions/sessionsScript.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>