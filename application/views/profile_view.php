<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>crashcoder FB app using codeigniter facebook sdk - demo</title>
<link href="<?php echo base_url(); ?>/Styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Header">
    <div class="LiquidContainer HeaderContainer" style="width: 933px;">
       <h2 id="Pinterest">
    Crashcoder FB app using codeigniter facebook sdk - demo </h2>
<span>
<div class="fb-like" data-href="http://faceapp.crashcoder.com" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
</span>
    </div>
</div>
    <div class="wrapper"> 
	 <div id="BoardTitle">
			
			<div id="BoardMeta">
				<div id="BoardUsers">
                                   <img src="https://graph.facebook.com/<?php echo $uid; ?>/picture" alt="" class="pic left" /> <h1 class="serif left"><strong>Hiii <?php echo $full_name; ?></strong></h1>
					
  
						
				</div>

				
				
			</div><!-- #BoardMeta -->

  <p><?php echo $full_name; ?>, you are watching a top secret page. Ssshhhh.</p>

<pre>

<?php print_r($profile); ?>
</pre>


  <p> <a href="<?php echo site_url('home'); ?>"> Go to the home page</a></p>
 <p><a href="<?php echo site_url('main/logout'); ?>">logout</a>
</p>
</div><!--- wrapper end-->
<div class="footer">
                <a target="blank" href="http://www.crashcoder.com/tutotials-to-add-cool-things-to-your-pinterest-boards/"> <img  src="pinit-crashcoder-b.png" ></img> </span></a>
                </br>
            </br>
                 <a href="http://www.crashcoder.com/tutotials-to-add-cool-things-to-your-pinterest-boards/" target="blank" >get code and related tutorials</a>
            </div>
 
</body>
</html>
