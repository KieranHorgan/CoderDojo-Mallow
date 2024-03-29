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
            
              <h1>Method Example</h1>
            
              <h2>The Code</h2>

              <p class="alignCenter">The code for the eigth class of Java is as follows:</p>
            
              <div class="code">
                <pre class="brush: java">
package arraysExample;
import java.util.Arrays; // Import used to bring in Arrays class functionality
/**
 *
 * @author Eugene OR
 */
public class ArraysExample {
    /**
     *  Simple arrays
     *  This was originally named Arrays but due to conflict with
     *  existing Arrays class, renamed ArraysExample
     */
    
    public static void main(String[] args) {
        int oddNos[] = new int [10]; // Declaring an array of ints capable of storing 10 ints
        int x = 0; // This will be used in the loading of the array
        /**
         *  We are now going to use a for loop to load the array
         *  with all the odd #s from 1 to 20 inclusive
         */
        for(int i = 1;i<=20;i++)
        {
            if(i%2 != 0) // This will only allow #s that are odd into the if
            {
               // System.out.println(i);
                oddNos[x] = i; // Loading the array with the number
                x++; // Move the index up 1
              }
        }

        /**
         *  Next line uses the Arrays class to print the 
         *  contents of the array
         */

        System.out.println(Arrays.toString(oddNos));

        // Next line is just to demonstrate that we can change the 
        // value of an individual array space

        oddNos[0] = 25;

        // Next for loop is just used to print contents of the array

        for(int o = 0; o &lt;oddNos.length ; o++)
        {
        System.out.println(oddNos[o]);
        }
    }// End of main
    /**
     *  Useful Links 
     *  http://stackoverflow.com/questions/5600882/how-to-use-java-util-arrays
     */
}// End of class
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