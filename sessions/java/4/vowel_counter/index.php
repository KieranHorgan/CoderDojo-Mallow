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
    <script type="text/javascript" src="/sessions/resources/shBrushJava.js"></script>
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
            
              <h1>Vowel Counter</h1>
            
              <h2>The Code</h2>

              <p class="alignCenter">The code for the fourth class of Java is as follows:</p>
            
              <div class="code">
                <pre class="brush: java">
package vowelcounter;

import java.util.Scanner;

public class VowelCounter {

  public static void main(String[] args) {

    /*
      Program to count the vowels and consonants in a word.
      Students will use this and incorporate checks for other characters.
    */
    int x = 0 ;
    int no_vowels = 0, no_consonants = 0;
    String fullname = " ";
    Scanner o = new Scanner(System.in);
    System.out.println("Type your name ==>");
    fullname = o.nextLine().toUpperCase();
    // Use a do...while to loop through the word
    do {
      Character check = fullname.charAt(x);

      // if ...else construct to evaluate letter

      if (check == 'A') {
        no_vowels++;
      }else if (check == 'E') {
        no_vowels++;
      } 
      else if (check == 'I') {
        no_vowels++;
      } 
      else if (check == 'O') {
        no_vowels++;
      } 
      else if (check == 'U') {
        no_vowels++;
      } 
      else {
        no_consonants++; //Assuming for now, only letters are inserted
                          // so if not a vowel, letter must be a consonant   
      }

      x++;

    } while (x< fullname.length());
    System.out.println("Your name contains ");
    System.out.println(no_vowels+" vowels and " +no_consonants+ " consonants");
    
  } // End of main
    
} // End of class
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
    <script src="/sessions/sessionsTest.js"></script>

    <script type="text/javascript">
      SyntaxHighlighter.all()
    </script>

  </body>
</html>