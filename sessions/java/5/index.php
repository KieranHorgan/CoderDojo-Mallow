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
    <?php include("../../sessionsHead.php"); ?>
    <script type="text/javascript" src="/sessions/resources/shBrushJava.js"></script>
  </head>
  <body>
    <?php include("../../../nav.php"); ?>
    
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
            
              <h1>Switch</h1>
            
              <h2>The Code</h2>

              <p class="alignCenter">The code for the fifth class of Java is as follows:</p>
            
              <div class="code">
                <pre class="brush: java">
package switch;

public class SwitcherCarReg {

  /**
    * @param args the command line arguments
    */

  public static void main(String[] args) {
    
    /* A simple program used to demonstrate and allow 
      * students to alter a basic switch construct
      */
    String carPlate = "CE"; // String with fixed value
    /*
        The switch construct will then evaluate the 
        value of the variable carPlate. 
        There are various important components
        1. The break 
        2. The default case
      */
    switch(carPlate) {
      case ("C"):
        System.out.println("Cork Car");
        break;

      case("CE"):
          System.out.println("Clare Car");
        //break;

      case ("T"):
      case("TN"):
      case ("TS"):
        System.out.println("Tipperary Car");

      default:
        System.out.println("Car is not from Munster");

    }// End of switch
        
  }// End of main
}// End of class
                </pre>
              </div>
            
            </section><!--

            This comment is here simply to get rid of the whitespace between two "inline-block" elements i.e. .sessionsNav and .sessionsMain
          
         --><?php include("../../sessionsNav.php")?>
          
          </section>
          
        </article>

      </div>

    <?php include("../../../footer.php"); ?>
    
    </div>
    <script src="/sessions/sessionsTest.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>