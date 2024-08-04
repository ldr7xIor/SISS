<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Point Of flag</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gaegu&display=swap');
        * {font-family: "Black Han Sans", sans-serif;}
        #container1 {
            background-color: rgb(255, 112, 101);
            text-decoration: none;
            color: white;
        }
        .nav-header {text-align: center;}
        .nav-brand {
            justify-content:  center;
            font-size: 30px; 
        }
        .nav {
            list-style-type: none;
            display: flex;
            justify-content: space-around;
            flex-wrap: nowrap;
        }
        .nav li {
            padding: 10px;
        }
        a {
            text-decoration: none;
            color: white;
        }
        pre {
            border-radius: 10px;
            padding: 10px;
            background-color: #4986ff;
            color: white;
        }
        .form-inline {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .input-group { display: flex;}
        button {
            font-size: 15px;
            margin-top: 4px;
            background-color: #4986ff;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 10px;
        }
        label {display: none;}
    </style>
</head>
<body>
    <nav id="container1">
        <div class="nav-header">
          <a class="nav-brand" href="http://127.0.0.1/hacking%20camp/index.php/">Research Point Of flag</a>
        </div>
        <div id="navbar">
          <ul class="nav">
            <li><a href="http://127.0.0.1/hacking%20camp/index.php/">Home</a></li>
            <li><a href="http://127.0.0.1/hacking%20camp/index.php/?page=vuln&param=siss">Vuln page</a></li>
            <li><a href="http://127.0.0.1/hacking%20camp/index.php/?page=report">Report</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </nav>
    <div id="container2">
        <?php
            $page = isset($_GET['page']) ? $_GET['page'].'.php' : 'main.php';
            if (!strpos($page, "..") && !strpos($page, ":") && !strpos($page, "/"))
                include $page;
        ?>
    </div>
</body>
</html>