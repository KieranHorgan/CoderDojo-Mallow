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

<!DOCTYPe html>

<html lang="en">
  <head>
    <?php include("../head.php"); ?>
  </head>
  <body>
    <?php include("../nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (Ie under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt Ie 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <!-- Wrapp around <article> and <aside> because <aside> is floated, so if the <aside> is higher than the <article>, then the <div> is set to the height of the <aside> using Javascript/jQuery -->
      <div id="contentWrapper">
        
        <!-- Main content, Larger section on the left -->
        <article>
          
          <!-- Adds a split in the whitespace -->
          <section class="splitContent">
            
            <!-- each normal section has a dashed line on the top -->
            <section>

              <!-- Second heading -->
              <h2>Mentor at CoderDojo Mallow</h2>
              
              <p>Our Dojo is continually searching for actually capable mentors to assist, for a few hours a week, helping impart their knowledge to local young people. Whether you're a professional at Java or you've fiddled with HTML, your assistance and experience would be welcome! To mentor at CoderDojo Mallow contact John Martin at <a href="mailto:jamartin66@gmail.com">jamartin66@gmail.com</a></p>

            </section>
            
            <!-- each normal section has a dashed line on the top -->
            <section>

              <!-- Second heading -->
              <h2>Can I volunteer if I'm not technical?</h2>
              
              <p>
                Yes! We are always looking for volunteers to help with a wide array of tasks, from registration to partaking in a committee. You should get in touch with us if you have skills you think could help.
                <br>
                Some examples of roles for volunteers include;
              </p>

              <!-- List of roles needed for volunteers -->
              <ul>
                <li>Registration and Check In,</li>
                <li>Supervising Sessions,</li>
                <li>
                  Committee members such as;
                  <ul>
                    <li>Treasurer,</li>
                    <li>Secretary,</li>
                    <li>events Officer,</li>
                    <li>Fund Raising Officer,</li>
                    <li>etc.</li>
                  </ul>
                </li>
              </ul>

              <blockquote>
	              <p>“To get invovled as a mentor all you need to be is energetic, enthusiastic and passionate about helping kids learn!”</p>
	            </blockquote>

            </section>
            
          </section>
          
        </article>
        
        <?php include("../aside.php"); ?>
      </div>
    <?php include("../footer.php"); ?>
    
    </div>

  </body>
</html>