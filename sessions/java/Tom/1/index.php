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
            
              <h1>23rd May 2015 - Loops, Methods, Classes</h1>
            
                <p>The <a href="CoderDoJo_Week1.zip">full NetBeans project</a> consists of the following: </p>

                <ul>
                  <li>main</li>
                  <li>Three kinds of loops<ul>
                  <li>for(start; condition; end){...}</li>
                  <li>do{...}while(condition)</li>
                  <li>while(condition){...}</li>
                </ul>
                  <li>Function <i>AddUp</i></li>
                  <li>Method <i>AddUpTwo</i></li>
                  <li>And finally, a class called <i>BlueCube</i> which has the above function/method and how it is instantiated</li>
                </ul>

              <p class="alignCenter">The code for the first class of Java is as follows:</p>
            
              <div class="code">
                <pre class="brush: java">
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package coderdojo_week1;

import bloocoob.BlueCube;


/**
 *
 * @author TommieB
 */
public class CoderDoJo_Week1 {

    // { } curly brackets
    // [ ] square brackets
    // ( ) parenthesis
    
    private static int MAX_LOOP;
    private static String CLASS_ID = "CoderDoJo_Week1";
    public static int AddUp(int x, int y){
        return x + y;
    }
    
    public static void AddUpTwo(int x, int y){
        System.out.println(x + y);
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        MAX_LOOP = 5;
        // for (start; condition; end){... block... }
        for (int i = 0; i < MAX_LOOP; i++){
            System.out.println("Hello " + i);
        }
        // do { .. block .. } while (condition);
        int i = 0;
        do{
            System.out.println("World " + i);
            i = i + 1;
        }while (i < MAX_LOOP);
        i = 0;
        // while (condition){ ... block ... }
        while (i < MAX_LOOP){
            System.out.println("Hello World " + i);
            i = i + 1;
        }
        //
        int result = AddUp(1, 1);
        System.out.println("Result = " + result);
        
        AddUpTwo(1, 1);
        // Instantiate a new class.
        BlueCube bc = new BlueCube();
        System.out.println(bc.AddUp(1, 2));
        //
        bc.AddUpTwo(1, 2);
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