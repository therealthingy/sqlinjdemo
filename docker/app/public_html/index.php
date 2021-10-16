<!DOCTYPE HTML>

<html>
  <head>
    <title>SQL Injection training</title>
    <meta charset="UTF-8">
  </head>

  <body>
  	<H1>SQL Injection training</H1>

  	Under the following links are web-apps available, which are vulnerable to SQL-injections.<br>
  	Use this to learn more about hacking.

  	<p>
      <ul>
      	<li><a href="./example1">Example 1</a></li>
      	<li><a href="./example2">Example 2</a></li>
        <li><a href="./example3">Example 3</a></li>
      	<li><strike><a href="./example4">Example 4</a></strike> [Not working properly]</li>
      </ul>
  	</p>
  </body>

  <p>
    <h2>Accessing the db</h2>
    For viewing the dbs, go to the 
    <script language="JavaScript">
      document.write('<a href="' + window.location.protocol + '//' + window.location.hostname + ':8080' + window.location.pathname + '">phpMyAdmin-panel</a>');
    </script>.
    <p>
      <?php
        echo 'Use the following credentials:';
        echo '<ul>';
        echo '<li>Username: <b>' . $_ENV['MYSQL_USER'] . '</b></li>';
        echo '<li>Password: <b>' . $_ENV['MYSQL_PASSWORD'] . '</b></li>';
        echo '</ul>';
      ?>
    </p>
  </p>


</html>