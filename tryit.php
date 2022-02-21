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
    <?php include("head.php"); ?>
    <style>
      body {
        background-color: #e5e5e5; /* Too much contrast is bad. This tone it down a little */
      }
      
      iframe, textarea {
        box-sizing: border-box;
        position: relative;
        background: white;
        border: none;
        box-shadow: 0 0 5px rgba(0,0,0,0.2);
        width:48%;
        height: calc(100vh - 64px);
        resize: none;
      }
      
      iframe {
        font: default;
        float: right;
      }
      
      textarea {
        padding: 10px;
        float: left;
      }
      
      @media (max-width: 1000px) {
        iframe, textarea {
          height: calc(100vh - 129px);
        }
      }
      
      @media (max-width: 600px) {
        iframe, textarea {
          height: calc(100vh - 48px);
        }
      }
    </style>
  </head>
  <body>
    <?php include("nav.php"); ?>
    
    <!-- Content -->
    <div id="main">
      
      <!-- If the user is using an outdated browser (Ie under 9) then warn them that the website MAY not act as it's supposed to -->
      <!--[if lt Ie 9]>
        <p class="browsehappy">YOU ARE USING AN <strong>OUTDATED</strong> BROWSER. PLEASE <a href="http://browsehappy.com/">UPGRADE YOUR BROWSER</a> TO IMPROVE YOUR EXPERIENCE. </p>
      <![endif]-->
      
      <div id="contentWrapper">
        <textarea name="sourceCode" id="sourceCode" class="clearfix" onkeyup="runCode()" autofocus><?php
if ($_GET["learnPg"] == "2") {
    $learnContent = "<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <h1>My First Heading</h1>
      
    <p>My first paragraph.</p>
  </body>
</html>";
} elseif ($_GET["learnPg"] == "3p1") {
    $learnContent = "<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <h1>My First Heading</h1>
      
    <p>My first paragraph.</p>
  </body>
</html>";
} elseif ($_GET["learnPg"] == "3p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
  
  <body>
    <h1>This is a heading</h1>
    <h2>This is a heading</h2>
    <h3>This is a heading</h3>
  </body>
</html>';
} elseif ($_GET["learnPg"] == "3p3") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <p>This is a paragraph</p>
    <p>This is another paragraph</p>
  </body>
</html>';
} elseif ($_GET["learnPg"] == "3p4") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <a href="http://coderdojomallow.com">This is a link</a>
  </body>
</html>';
} elseif ($_GET["learnPg"] == "3p5") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <img src="CoderDojoMallow.png" alt="CoderDojo Mallow">
  </body>
</html>';
} elseif ($_GET["learnPg"] == "4p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <p>My first HTML paragraph</p>
  </body>
</html>';
} elseif ($_GET["learnPg"] == "4p2") {
    $learnContent = '<!DOCTYPE html>

<html>
  <head>
  </head>
    
  <body>
 
    <h1>My First Heading</h1>
    
    <p>My first paragraph.</p>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "4p3") {
    $learnContent = '<!DOCTYPE html>

<html>
  <head>
  </head>
    
  <body>
 
    <h1>My First Heading</h1>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "5p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <a href="http://coderdojomallow.com">This is a link</a>
  </body>
</html>';
} elseif ($_GET["learnPg"] == "5p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <img src="CoderDojoMallow.png" width="100" height="100">
  </body>
</html>';
} elseif ($_GET["learnPg"] == "5p3") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    <img src="CoderDojoMallow.png" alt="CoderDojo Mallow" width="104" height="142">
  </body>
</html>';
} elseif ($_GET["learnPg"] == "6p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>

    <p>This is a paragraph</p>
    <p>This is another paragraph</p>

  </body>
</html>';
} elseif ($_GET["learnPg"] == "6p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>

    <p>
    This paragraph
    contains a lot of lines
    in the source code,
    but the browser 
    ignores it.
    </p>
 
    <p>
    This paragraph
    contains         a lot of spaces
    in the source         code,
    but the        browser 
    ignores it.
    </p>

  </body>
</html>';
} elseif ($_GET["learnPg"] == "6p3") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>

    <p>This poem will display as one line:</p>
    <p>
      My Bonnie lies over the ocean.
 
      My Bonnie lies over the sea.
 
      My Bonnie lies over the ocean.
 
      Oh, bring back my Bonnie to me.
    </p>

  </body>
</html>';
} elseif ($_GET["learnPg"] == "6p4") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>

    <pre>
      My Bonnie lies over the ocean.
 
      My Bonnie lies over the sea.
 
      My Bonnie lies over the ocean.
 
      Oh, bring back my Bonnie to me.
    </pre>

  </body>
</html>';
} elseif ($_GET["learnPg"] == "7p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body style="background-color:lightgrey">
 
    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "7p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <h1 style="color:blue">This is a heading</h1>
    <p style="color:red">This is a paragraph.</p>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "7p3") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <h1 style="font-size:300%">This is a heading</h1>
    <p style="font-size:160%">This is a paragraph.</p>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "7p4") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <h1 style="text-align:center">Centered Heading</h1>
    <p>This is a paragraph.</p>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "8p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <a href="http://coderdojomallow.com">Visit CoderDojo Mallow!</a>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "8p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <a href="http://coderdojomallow.com" target="_blank">Visit CoderDojo Mallow!</a>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "8p3") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <a href="http://coderdojomallow.com" target="_blank">
      <img src="CoderDojoMallow.png" alt="CoderDojo Mallow">
    </a>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "9p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <img src="CoderDojoMallow.png" alt="CoderDojo Mallow">
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "9p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <p>
      <img src="CoderDojoMallow.png" alt="CoderDojo Mallow" style="float:right;">
      The image will float to the right of the text.
    </p>
 
    <p>
      <img src="CoderDojoMallow.png" alt="CoderDojo Mallow" style="float:left;">
      The image will float to the left of the text.
    </p>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "10p1") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
 
    <ul>
      <li>Coffee</li>
      <li>Tea</li>
      <li>Milk</li>
    </ul>
 
  </body>
</html>';
} elseif ($_GET["learnPg"] == "10p2") {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>

    <ol>
      <li>Coffee</li>
      <li>Tea</li>
      <li>Milk</li>
    </ol>
 
  </body>
</html>';
} else {
    $learnContent = '<!DOCTYPE html>
<html>
  <head>
  </head>
    
  <body>
    
  </body>
</html>';
}
echo htmlspecialchars($learnContent);
?></textarea>
        <iframe name="targetCode" id="targetCode" class="clearfix"></iframe> 
        <script type="text/javascript">
            function runCode()
            {
                var content = document.getElementById('sourceCode').value;
                var iframe = document.getElementById('targetCode');
                iframe = (iframe.contentWindow) ? iframe.contentWindow : (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;
                iframe.document.open();
                iframe.document.write(content);
                iframe.document.close();
                return false;
            }
            runCode();
        </script>

      </div>
      
      <!-- JQuery from Google as many websites use this and the user is likely to have it cached -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Just in case Google's jQuery dousn't load, use our own one -->
      <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    
      <!-- Main Javascript file -->
      <script src="/js/main.js"></script>
    </div>
  </body>
</html>
