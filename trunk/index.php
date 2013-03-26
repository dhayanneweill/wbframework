<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TITLE</title>
<script type="text/javascript" language="javascript" src="script/libs/jquery.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/lib.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/utils.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/jquery-1.4.2.min.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/jquery.tokeninput.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/jquery.extras.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/jquery.quicksearch.js"></script>
<script type="text/javascript" language="javascript" src="script/libs/jquery.autocomplete.js"></script>
<script type="text/javascript" language="javascript" src="script/services/service.js"></script>
<script type="text/javascript" language="javascript" src="script/services/sessionService.js"></script>
<script type="text/javascript" language="javascript" src="script/templates/template.js"></script>
<script type="text/javascript" language="javascript" src="script/i18n.js"></script>
<script type="text/javascript" language="javascript" src="script/wb.js"></script>  
<script type="text/javascript" language="javascript" src="script/views/home.js"></script> 
<script type="text/javascript" language="javascript" src="script/views/about.js"></script>

<link rel="stylesheet" href="style/reset.css" type="text/css">
<link rel="stylesheet" href="style/bootstrap-responsive.css" type="text/css">
<link rel="stylesheet" href="style/bootstrap-responsive.min.css" type="text/css">
<link rel="stylesheet" href="style/bootstrap.css" type="text/css">
<link rel="stylesheet" href="style/bootstrap-responsive.min.css" type="text/css">

<link rel="stylesheet" href="style/eggplant/jquery-ui-1.8.4.custom.css" type="text/css">
</head>

<body>
<div id="container" class="container">
<!--Dialog alert -->
<div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">
            Nome da organização
          </a>
          <ul class="nav">
            <li>
              <a href="index.php?page=about">
                Menu 01
              </a>
            </li>
            <li>
              <a href="#">
                Menu 02
              </a>
            </li>
            <li>
              <a href="#">
                Menu 03
              </a>
            </li>
            <li>
              <a href="#">
                Menu 04
              </a>
            </li>
          </ul>
          <form class="navbar-form pull-right">
            <input name="textinput1" type="email" placeholder="Login" class="span2">
            <input name="textinput2" type="password" placeholder="Senha" class="span2">
            <button class="btn">
              Entrar
            </button>
          </form>
        </div>
      </div>
    </div>
	<div id="container" class="container">
	  <div id="loading" class="loading" style="display:none;"></div>
	  <div id="home" class="home" style="display:none;"></div>
	  <div id="about" class="about" style="display:none;"></div>
	</div>
    
</div>
</body>
</html>