<?php
  $name = "swagoverlord";
?>

<html lang="en">
  <head>
    <link href="main.css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello <?php echo $name; ?></title>
  </head>
  <body>
    <div id="header-banner">
      <h1 id="page-title">Welcome <?php echo $name; ?></h1>
    </div>

    <div id="nav-buttons">
      <a href="projects" target="_blank">
        <button class="btn-projects">
          Go to projects
        </button>
      </a>
      <a href="http://localhost/phpmyadmin/" target="_blank">
        <button class="btn-projects">
          Go to phpmyadmin
        </button>
      </a>
    </div>    


    <div id="resources">
      <h2>Resources</h2>
      <div id="guides">
        <div class="guide">
          <h3 style="color: #ef482a;">Laravel</h3>
          <p><b>Create project:</b> composer create-project laravel/laravel example-app</p>
          <a href="https://laravel.com/docs/9.x" target="_blank">Documentation</a>
        </div>  
        <div class="guide">
          <h3 style="color: #006fb4;">Drupal</h3>
          <p><b>Create project:</b> composer create-project drupal/recommended-project example-app</p>
          <a href="https://www.drupal.org/documentation" target="_blank">Documentation</a>
        </div>   
        <div class="guide">
          <h3 style="color: #61dafb;">React JS</h3>
          <b>Create project:</b>
          <p>mkdir example-app</p>
          <p>cd example-app</p>
          <p>npx create-react-app .</p>
          <b>Run project:</b>
          <p>cd example-app</p>
          <p>npm run dev</p>
          <p>Go to localhost:3000</p>
          <b class="debug-heading">Bug fixes</b>
          <b class="debug-text">If app isn't running</b>
          <p class="debug-text">rm -rf node_modules</p>
          <p class="debug-text">sudo npm install</p>
          <a href="https://reactjs.org/docs/getting-started.html" target="_blank">Documentation</a>
        </div> 
        <div class="guide">
          <h3 style="color: #1d82fb;">Next JS</h3>
          <b>Create project:</b>
          <p>mkdir example-app</p>
          <p>cd example-app</p>
          <p>npx create-next-app .</p>
          <b>Run project:</b>
          <p>cd example-app</p>
          <p>npm run dev</p>
          <p>Go to localhost:3000</p>
          <b class="debug-heading">Bug fixes</b>
          <b class="debug-text">If app isn't running</b>
          <p class="debug-text">rm -rf node_modules</p>
          <p class="debug-text">sudo npm install</p>
          <a href="https://nextjs.org/learn/foundations/about-nextjs?utm_source=next-site&utm_medium=nav-cta&utm_campaign=next-website" target="_blank">Documentation</a>
        </div>    
      </div>
    </div>

    <footer>
      Made by therealcoolpup
      <br/>
      <a href="https://github.com/therealcoolpup/custom-xammp-dashboard" target="_blank">
        Github repo  
      </a>  
    </footer>
  </body>
</html>
