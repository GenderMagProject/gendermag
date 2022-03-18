<!DOCTYPE html>

<html>

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132750618-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-132750618-1');
    </script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="GenderMag, GenderMag Method, GenderMag Heuristics, Cognitive Style Heuristics, Inclusive Design">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="persona.js"></script>
    <!-- print info -->
    <style type="text/css" media="print">
      @page { size: letter landscape; margin: auto; transform: scale(.72);}
    </style>
    <title>GenderMag</title>
    
    <!-- Favicon: the little picture on the tab -->
    <link href="/images/rsz_profile_pic.png" rel="icon" type="image/x-icon" />
    
  </head>
  
  <body>
    <div id="entirepage">

<!-- Title header and images -->
<div id="nav" class="header">
  <center>
    <div class="col-md-12 row">
      
      <div class="col-md-2 col-auto" >
	<img src="/images/title-multi-abi.png" alt="The GenderMag Personas" height="100" width="100">
      </div>
      
      <div class="col-md-2 col-auto" >
	<img src="/images/title-multi-pat.png" alt="The GenderMag Personas" height="100" width="100">
      </div>
      
      <div class="col-md-4 col-sm-2" style="align-self: center; font-family: 'Merriweather', serif;"><h1>The GenderMag Project</h1></div>
      
      <div class="col-md-2 col-auto ">
	<img src="/images/title-multi-patricia.png" alt="The GenderMag Personas" height="100" width="100">
      </div>
      
      <div class="col-md-2 col-auto">
	<img src="/images/title-multi-tim.png" alt="The GenderMag Personas" height="100" width="100">
      </div>
      
    </div>
  </center>

  <!-- Navigation bar contents start here -->
  <ul class="nav nav-pills col-md-12" id="menu-bar">
    
    <li class="nav-item <?php if($PAGE_ID=='home') echo 'active'; ?>">
      <a class="nav-link" href="/index.php">Home</a>
    </li>

    <!-- Menu item 1: Gendermag method -->
    <li class="nav-item dropdown <?php if($PAGE_ID=='method') echo 'active'; ?>">
      <a class="nav-link dropdown-toggle dropbtn" data-toggle="dropdown1" href="#" role="button" aria-haspopup="true" aria-expanded="false">GenderMag Method: What & How</a>
      <div class="dropdown-content dropdown-menu">
	<a class="dropdown-item" href="/gendermag.php">What is GenderMag?</a>
	<a class="dropdown-item" href="/research.php">Research Publications</a>
	<div class="dropdown-divider"></div>
	<a class="dropdown-item" href="https://docs.google.com/forms/d/1NXjpj7NSGuVScPdR9EJgzv-eeKM9-NOY4gP9B0Dpf4U/viewform?edit_requested=true">Download Kit & Forms</a>
	<a class="dropdown-item" href="/custom_persona.php">Create Custom Persona</a>
<!--
	<div class="dropdown-divider"></div>
	<h6 class="dropdown-header">Download Session Forms</h6>
	<a class="dropdown-item" href="./Docs/GM_Form_v3_Subgoal.pdf"><img src="images/ico-download.svg" height="15" width="15"> Subgoal Forms</a>
	<a class="dropdown-item" href="./Docs/GM_Form_v3_Action.pdf"><img src="images/ico-download.svg" height="15" width="15"> Action Forms</a>
<-->
      </div>
    </li>
    <li class="nav-item dropdown <?php if($PAGE_ID=='personas') echo 'active'; ?>">
      <a class="nav-link dropdown-toggle dropbtn" data-toggle="dropdown1" href="#" role="button" aria-haspopup="true" aria-expanded="false">The Personas</a>
      <div class="dropdown-content dropdown-menu">
        <a class="dropdown-item" href="/custom_persona.php">Customizable Personas</a>
        <a class="dropdown-item" href="/foundations.php">Persona Foundations</a>
      </div>
    </li>
    <li class="nav-item dropdown <?php if($PAGE_ID=='research') echo 'active'; ?>">
      <a class="nav-link dropdown-toggle dropbtn" data-toggle="dropdown1" href="#" role="button" aria-haspopup="true" aria-expanded="false">Research</a>
      <div class="dropdown-content dropdown-menu">
        <a class="dropdown-item" href="/foundations.php">The Research Behind GenderMag</a>
        <a class="dropdown-item" href="/research.php">GenderMag Publications</a>
      </div>
    </li>
    <li class="nav-item <?php if($PAGE_ID=='people') echo 'active'; ?>">
      <a class="nav-link" href="/people.php">People & Sponsors</a>
    </li>
    <li class="nav-item <?php if($PAGE_ID=='flyers') echo 'active'; ?>">
      <a class="nav-link" href="/flyers_handouts.php">Flyers, Blogs, Webinars, & Presentations</a>
    </li>
    <li class="nav-item <?php if($PAGE_ID=='oss') echo 'active'; ?>">
      <a class="nav-link" href="/oss.php">GenderMag for Open Source</a>
    </li>    
  </ul>
</div>

<br/>