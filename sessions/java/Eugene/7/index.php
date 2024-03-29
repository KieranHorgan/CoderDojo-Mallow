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

              <p class="alignCenter">The code for the seventh class of Java is as follows:</p>
            
              <div class="code">
                <pre class="brush: java">
public class MethodExample {

    
    // @param args the command line arguments
    
    
    public static void main(String[] args) {
        
        // Rudimentary program to show how methods work
        
        Howya();
        Adder(10,69);
        System.out.println("Again!");
        Adder(14,21);
        Howya();
        int h = AdderWithOutput(36,64,39);
        System.out.println("The output is " +h);
    }// End of main 

    /*
        While methods can be within main(), it is best to place them
        here, between the }}'s for the end of main() and the end of 
        the class. 
    */

    /*
        Simple method to just print out simple statement.
        Note the keywords.
        1. public - Can be accessed by all
        2. static - It is a method that does not need an associated object
        to be created
        3. void - Nothing is returned from the method
    */    

    public static void Howya() {
        System.out.println("Hello - How are you");
    }  

    // Method that takes in two inputs but does not return anything

    public static void Adder(int x, int y) {
        int z = x + y;
        System.out.println("The answer is " +z);
    
    }

    // Method that takes three inputs and returns one output 

    public static int AdderWithOutput(int a, int b, int c) {
        int e = a+b+c;  
    
        return e; // return the variable e to the main program
    }


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