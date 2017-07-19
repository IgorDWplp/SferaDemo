<?php 


   	if (isset($_POST["submit"])) {

   $crlf = "\r\n";

    //Get Data

    $name = strip_tags($_POST['name']);

    $email = strip_tags($_POST['email']);

    $phone = strip_tags($_POST['tel']);

    $sub = strip_tags($_POST['sub']);

    $message = strip_tags($_POST['message']);

    // Parse/Format/Verify Data

   $from = 'sfera-adria kontakt forma'; 
   $to = 'info@sfera-adria.com'; 
   $subject = 'Poruka s sfera-adria.com kontakt forma ';



	 $message = ' 

<html><head></head>
    <body>
	<br/>
    <img src="http://sfera-software.com/sferaStranica/img/New_Logo_2.png" alt=""/>
        <div>

          <table style="width: 800px;" border="1">
 <tr>
<th colspan="2"><h3>Kontakt obrazac s sfera-adria kontakt forme</h3></th>
</tr>

  <tr> <td colspan="2"><p><strong>Subjekt : '.$sub.'</strong></p> </td> </tr>

              
 <tr>
<td>Ime :</td>
 <td> <p>'.$name.'</p></td>
 </tr>

 <tr>
<td>tel :</td>
<td> <p>'.$phone.'</p></td>
 </tr>

<tr>
<td>E-mail :</td>
<td>  <p>'.$email.'</p></td>
</tr>

              

 <tr>
<tr><td colspan="2" style="background-color:#F1F1F1; ">
<table>
<tr><td>
 <p>'.$message.'</p>
</td></tr>
</table> 
</td>
</tr>

                     

</table>
</div>
</body>
</html>

';

	
$headers = 'From: ' . $from  . $crlf .
'Reply-To: ' . $from  . $crlf .
'Content-Type: text/html; charset=UTF-8';

	

   

 
   

    if (!$_POST['name']) 

   {

   $errName = 'Molimo unesite svoje ime';
   $warning ='<div class="thankyou">Obrazac nije potvrđen, provjerite polja</div>';

   }

   

     if (!$_POST['tel']) 

   {

    $errTel = 'Molimo unesite svoj kontakt broj';
     $warning ='<div class="thankyou">Obrazac nije potvrđen, provjerite polja</div>';

    

   }

   

   

   if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 

           {
			   $errEmail = 'Molimo unjeti valjanu, ispravnu e-mail adresu';

               $warning ='<div class="thankyou">Obrazac nije potvrđen, provjerite polja</div>';

   }

   


    

      if (!$errName && !$errEmail && !$errMessage) {



	if (  mail($to, $sub, $message, $headers)) {



		$result='<div class="thankyou">Hvala što ste nas kontaktirali!</div>';

              

                 echo "<script>alert('Hvala što ste nas kontaktirali!');</script>";



	} else {



		$result='<div class="thankyou">Problem s slanjem poruke, pokušajte kasnije!</div>';

                

                



	}

}  }

?>



<!DOCTYPE HTML>
<html>
    
    
    
    
  
<head>  
  <meta charset="utf-8">
   <meta name="description" content="Sfera Adria je Marketinška Agencija i Softverska firma. Nudimo usluge marketinga, web i grafičkog dizajna razvoj personaliziranih programskih rješenja"/>
  <meta name="keywords" content="Design, Grafički Dizajn, Izrada Mobilnih Aplikacija, Izrada Programa, Izrada Web Stranica, Marketing, Mob Apps, SEO, Web Dizajn, izrada softvera">

  
  
  <meta name="author" content="Sfera Adria d.o.o">
  <meta name="viewport" content="width=device-width, maximum-scale=1">


<title>Sfera Adria | Zagreb | Marketing, Design, Web, Izrada Programa</title>

<link rel="icon" href="../favicon.png" type="image/png">
<link rel="shortcut icon" href="../favicon.ico" type="img/x-icon">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/animate_2016.css" rel="stylesheet" type="text/css">




<!---input effects--->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
		
		
<!----input button--->
<link rel="stylesheet" type="text/css" href="css/buttonFrame.css" />
  <!--link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet"-->
 <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"-->		


<!--text effekt-->
<link href="../css/jquery-letterfx.css" rel="stylesheet" type="text/css" />


<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/classie.js"></script>

    

	
	<style type="text/css">
		.antispam { display:none;}
	</style>
	
	<script type="text/javascript">
		// split your email into two parts and remove the @ symbol
		var first = "testMail";
		var last = "sfera-software.com";
	</script>
        
        
        
        
<script>
    
        $(document).ready(function() {
        //prvo sakri sve elemente 
       $(".k2").hide();
       $(".k3").hide();
       $(".k4").hide();
       $(".k5").hide();
       
       
    });
    
</script>

</head>






<body>

 
 
 
 
    
 <nav class="main-nav-outer" id="test"><!--main-nav-start-->
     
   
   <!--u roginalu je tu bio main-nav-->
<div class="container">
    
    
<div class="logo_sfera_ animated fadeInDown delay-07s">
    <!--bio logo-->
</div> 
    
    
<div class="main-nav" style="float:left;">
  
     <div class="XMenu_separator">
         <a href="#" class="Xmenu_icon" style="text-decoration: none;"><i>&#10006;</i></a>
     </div>
               
        <ul class="main-nav_Li">
            <li><a href="../index.html" class="LaHref">Naslovna</a></li>
            <li ><a href="../design.html" class="LaHref">Design</a></li>
            <li><a href="../marketing.html" class="LaHref">Marketing</a></li>
            <li><a href="../web-rjesenja.html" class="LaHref">Web rješenja</a></li>
               <li><a href="../izrada-programa.html" class="LaHref">Izrada programa</a></li>
                     <li><a href="../izrada-mob-aplikacija.html" class="LaHref">Izrada mobilnih aplikacija</a></li>
                      <li><a href="../business-intelligence.html" class="LaHref">Business intelligence</a></li>
            <li><a href="" class="LaHref"> <span class="glyphicon glyphicon-eye-open active"> Kontakt</span></a></li>
           
        </ul>
        
    <div class="menu_social_icons">
	<a href=""><img src="../img/menuIcons/Twitter_b.png" alt=""/></a>
    <a href="https://plus.google.com/114254081324646242947"><img src="../img/menuIcons/Google_b.png" alt=""/></a>
	<a href="https://www.facebook.com/sfera.adria/"><img src="../img/menuIcons/Facebook_b.png" alt=""/></a>
    </div>
        
          

    </div>
	
	

</div>
    <a class="res-nav_click" href="#"><i class="fa-bars"></i> <p style="font-size: 15px;"></p></a>
</nav><!--main-nav-end-->  
 
 
 
 
 
 
    
    
 <header class="header" id="header"><!--header-start-->
    <div class="logo_sfera animated fadeInDown delay-07s">
	  <a href="../index.html"><img src="../img/logo_bl.png" alt="" id="logo"></a>
</div> 
</header><!--header-end-->


<form  method="post" id="contactForm" role="form" action="index.php">
 <input type="hidden" name="nospam:blank" value="" />
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
    
   
   
<div class="container-fluid" style="overflow-x: hidden;">



<div class="row">        
<div class="col-lg-10 col-md-10  col-lg-offset-1  col-md-offset-1 hidden-xs hidden-sm">
<p style="color:#ffffff;" class="onamaKontakt">          
Sfera Adria je kompanija koja se bavi razvojem i dizajnom softverskih rješenja, marketingom i grafičkim dizajnom.
Kroz dugogodišnje iskustvo naših stručnjaka usavršili smo procese, sustav i tehnologije koje nam omogućuju stvaranje visokokvalitetnih i kreativnih rješenja.
</p>
</div>       
</div>






    <br/>
    <br/>
    
<div class="row">        
<div class="col-lg-4 col-md-4   col-lg-offset-3  col-md-offset-2 hidden-xs hidden-sm">
<p style="color:#ffffff;" class="onamaKontakt">  
Sfera Adria d.o.o.
<br/>
Draškovićeva 54, Zagreb
<br/>
10000 Croatia
</p>
</div> 
    
    
<div class="col-lg-4 col-md-4 hidden-xs hidden-sm">
<p style="color:#ffffff;" class="onamaKontakt"> 
<br/> 
<a href="tel:38515542053" class="tel">+ 385 1 554 20 53</a>
<br/>
sfera@sfera-adria.com
</p>

</div>     
    
    
</div> 


<hr class="cLine"/> 

     
</div><!--end container-->





<!---mobilna verzija--->
<div class="container" style="overflow-x: hidden;">
<div class="row">
<div class="col-xs-12 col-sm-12 hidden-lg hidden-md">



<p style="color:#ffffff;" class="onamaKontakt">          
Sfera Adria je kompanija koja se bavi razvojem i dizajnom softverskih rješenja, marketingom i grafičkim dizajnom.
Kroz dugogodišnje iskustvo naših stručnjaka usavršili smo procese, sustav i tehnologije koje nam omogućuju stvaranje visokokvalitetnih i kreativnih rješenja.
</p>

<br/>

<p style="color:#ffffff;" class="onamaKontakt">  
Sfera Adria d.o.o.
<br/>
Draškovićeva 54, Zagreb
<br/>
10000 Croatia
</p>

<br/>


<p style="color:#ffffff;" class="onamaKontakt"> 
<br/> 
<a href="tel:38515542053" class="tel">+ 385 1 554 20 53</a>
<br/>
sfera@sfera-adria.com
</p>



</div>
</div>
</div>
    


<div class="container">
<div class="row"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<br/>
<br/>
<div class="row"> 
 






<!---FORMA DESNA STRANA--->        
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">




<div class="row"> 


<div class="col-lg-6 col-sm-12 col-xs-12 content">
<span class="input input--hoshi">
<input class="input__field input__field--hoshi" type="text" id="input-4" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>" oninvalid="this.setCustomValidity('Molimo Vas uneste svoje ime');"/>
<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
<span class="input__label-content input__label-content--hoshi">Ime</span>
</label>
</span>
<?php echo "<p class='errorForm'>$errName</p>";?>
</div>



<div class="col-lg-6 col-sm-12 col-xs-12 content">
<span class="input input--hoshi">
<input class="input__field input__field--hoshi" type="text" id="input-5"  name="email"  value="<?php echo htmlspecialchars($_POST['email']); ?>" oninvalid="this.setCustomValidity('Molimo Vas uneste svoj e-mail')"/>
<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
<span class="input__label-content input__label-content--hoshi">Email adresa</span>
</label>
</span>
<?php echo "<p class='errorForm'>$errEmail</p>";?>
</div>
   
   
</div> <!--end row-->   

   
<div class="row"> 
 <div class="col-lg-12 col-sm-12 col-xs-12 content">
 <span class="input input--hoshi">
<input class="input__field input__field--hoshi" type="text" id="input-6" name="sub" />
<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="input-6">
<span class="input__label-content input__label-content--hoshi">Naziv</span>
</label>
</span>
 </div>
</div>    
    
    
 <div class="row"> 
 <div class="col-lg-12 col-sm-12 col-xs-12 content">
 
 <span class="input input--hoshi">
<input class="input__field input__field--hoshi" type="text" id="input-7" name="tel" value="<?php echo htmlspecialchars($_POST['tel']); ?>" oninvalid="this.setCustomValidity('Molimo Vas uneste svoj kontakt mobitel ili telefon')"/>
<label class="input__label input__label--hoshi input__label--hoshi-color-4" for="input-7">
<span class="input__label-content input__label-content--hoshi">Mobitel</span>
</label>
</span>
 <?php echo "<p class='errorForm'> $errTel</p>";?>
</div>
</div>  


<div class="row"> 
<br/>
 <div class="col-lg-12 col-sm-12 col-xs-12">
  <textarea name="message" rows="10" cols="50"   role="textbox" aria-autocomplete="list" aria-haspopup="true"  placeholder="Tekst Vaše poruke"><?php echo htmlspecialchars($_POST['message']);?></textarea>
   	<?php echo "<p class='errorForm alert'>$errMessage</p>";?>
 </div>
</div>  
    
    
    
<div class="row"> 
<br/>
 <div class="col-lg-12 col-sm-12 col-xs-12">
  <div style="text-align: center;">
		 <button class="input-btn" name="submit" type="submit" value="Send">Pošalji</button>
		<br/>
		
	
  </div>
  	<p class="antispam">Leave this empty:
		<br /><input name="url" /></p>  
			<?php echo $result; ?>
					
 </div>
</div>    
    
    
    
</div>    
     
     
 <!---FLJEVA STRANA--->        
<div class="col-lg-6 col-sm-12 col-xs-12">
<div class="wow animated fadeInDown delay-07s imageKontakt">
<img src="../img/kontakt.png" alt="kontakt" title="Sfera Adria d.o.o, Kontakt"/>  
</div>
   
  
</div>     
  </div>   
     
     
</div><!---form----->



</div> <!--end div--->    
</div><!--end row-->

</div><!--end container-->


<!--mobilna verzija-->
<div class="container" style="margin-top:20px;">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
			<?php echo "<h1 class='errorForm'>$warning</h1>";?>
		</div>
    </div>          
</div>   

 
<!-- Important: if you add any fields to this page, you will also need to update the php script -->
		
</form>		 




<br/>
<br/>	
<div class="container-fluid " style="-webkit-filter: grayscale(100%); overflow-x: hidden;"> 
 <div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 karta">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.1330113195345!2d15.981455015569045!3d45.808594479106524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d65609c0cdaf%3A0x66354e60376dd986!2sDra%C5%A1kovi%C4%87eva+ul.+54%2C+10000%2C+Zagreb!5e0!3m2!1sen!2shr!4v1491473808349" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>  
 </div>
 </div>
</div>		
		
		

<br/>


<footer class="">
<div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                
                
                <!--Samo za desktopo-->
                <div class="row">
                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
                        <h4 style="text-transform:uppercase; color: white; padding-top: 10px; padding-left: 40px;">Contact</h4>
                <ul style="list-style-type: none; padding-top: 5px; padding-left: 40px;">
                    <li class="footerList">Sfera adria d.o.o</li>
                    <li class="footerList">Draškovićeva 54</li>
                    <li class="footerList">10 000 Zagreb </li>
                    <li class="footerList">OIB 01396425914</li>
                    <li class="footerList">HR7323600001102568277</li>
                    <li class="footerList">sfera@sfera-adria.com</li>
                    
                </ul>    
                    </div>   
                    
                    
                    
                    <!--za mob verzija-->
                     <div class="col-ms-12 col-xs-12 col-centered hidden-lg hidden-md">
                  <h4 style="text-transform:uppercase; color: white; padding-top: 10px; text-align: center;">Contact</h4>
                <ul style="list-style-type: none; padding-top: 5px; padding-left: 0px; text-align: center;">
                    <li class="footerList">Sfera adria d.o.o</li>
                    <li class="footerList">Draškovićeva 54</li>
                    <li class="footerList">10 000 Zagreb </li>
                    <li class="footerList">OIB 01396425914</li>
                    <li class="footerList">HR7323600001102568277</li>
                    <li class="footerList" style="text-transform: none;">sfera@sfera-adria.com</li>
                    
                </ul>    
                    </div> 
                    
                    
                    
                    
                
                   <!--desktop v---->
                  <div class="col-lg-offset-2  col-md-3 col-lg-3 hidden-sm hidden-xs">
                   <h4 style="text-transform:uppercase; color: white; padding-top: 10px; padding-left: 0px;">Servises</h4>
                 <ul style="list-style-type: none; padding-top: 5px; padding-left: 0px; ">
                    <li class="footerList">Design</li>
                    <li class="footerList">Marketing</li>
                    <li class="footerList">Web Development</li>
                    <li class="footerList">Software Development</li>
                    <li class="footerList">Business Intelligence</li>
                    <li class="footerList">Interior Design</li>
                    
                </ul>    
                    </div> 
                    
                    
                    
                    
                    <!--mobile v---->
                  <div class="col-lg-offset-2  hidden-lg hidden-md col-sm-12 col-xs-12">
                   <h4 style="text-transform:uppercase; color: white; padding-top: 20px; padding-left: 0px; text-align: center;">Servises</h4>
                 <ul style="list-style-type: none; padding-top: 5px; padding-left: 0px; text-align: center;">
                    <li class="footerList">Design</li>
                    <li class="footerList">Marketing</li>
                    <li class="footerList">Web Development</li>
                    <li class="footerList">Software Development</li>
                    <li class="footerList">Business Intelligence</li>
                    <li class="footerList">Interior Design</li>
                    
                </ul>    
                    </div> 
                    
                    
                    
 <!---desktop--->                   
<div class="col-md-3 col-lg-3 hidden-sm hidden-xs">  
 <div style="margin-top: 24px;">
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsfera.adria&width=60&layout=button_count&action=like&size=small&show_faces=true&share=false&height=21&appId"
width="160" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="false">        
</iframe>
</div>
    
 <div style="padding-top: 15px;" class="menu_social_iconsFoot"> 
 
       <a href="">  <img src="../img/menuIcons/Facebook.png" alt=""/></a>
           <a href=""> <img src="../img/menuIcons/Twitter.png" alt=""/> </a>
          <a href="">  <img src="../img/menuIcons/Pinterest.png" alt=""/> </a>
           <a href=""> <img src="../img/menuIcons/Google+.png" alt=""/> </a>
 </div>  
    
    
 </div> 
                    
                    
<!---mobile--->                     
 <div class="hidden-lg hidden-md  col-sm-12 col-xs-12">    
      <div style="margin-top: 20px; margin-bottom: 30px; text-align: center; padding-left: 80px;">
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsfera.adria&width=60&layout=button_count&action=like&size=small&show_faces=true&share=false&height=21&appId"
width="160" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="false">        
</iframe>
      </div>
 <div style="padding-top: 15px; text-align: center;" class="menu_social_iconsFoot"> 
 
         <a href=""> <img src="../img/menuIcons/Facebook.png" alt=""/></a>
           <a href=""> <img src="../img/menuIcons/Twitter.png" alt=""/> </a>
          <a href="">  <img src="../img/menuIcons/Pinterest.png" alt=""/> </a>
           <a href=""> <img src="../img/menuIcons/Google+.png" alt=""/> </a>
 </div>  
     
     
     

     
     
 </div> 
           
                    
                    
</div>
</div>
</div>
    
    
    
        
<div style="margin-top: 100px; text-align: center;  font-family: 'Archivo Black', sans-serif;">  
<span class="copyright">&copy; Sfera Adria. All Rights Reserved 2017</span>
</div>
    
    
</div>
</footer>


<script src="../js/tuxsudo.min.js"></script>
<script src="../js/jquery-letterfx.js"></script>
<script src="../js/demo.js"></script>

<script src="../js/jQueryRotate.js" type="text/javascript"></script>


<script type="text/javascript">
    
   


$(document).ready(function() {
        

     //animacije
     swapC();
     

    rotation();
  

     

          
        
var duration = 'slow';

$('#cat_icon').click(function () {
    $('#cat_icon').hide(duration, function() {
        $('#categories').show('slide', {direction: 'left'}, duration);});
});
$('.panel_title').click(function () {
    $('#categories').hide('slide', {direction: 'left'}, duration, function() {
        $('#cat_icon').show(duration);});
});
        
        
  
        
        $('#test').scrollToFixed();
        
        
        
             //zatvori menu
        $('.Xmenu_icon').click(function(){
        $('.main-nav').hide('slow');
        $('.res-nav_click').show('slow');
		$('#logo').show('slow');
         });
        
        
            //otvori menu
        $('.res-nav_click').click(function(){
        $('.main-nav').slideToggle(2000);
        $('.res-nav_click').hide('fast');
		 $('#logo').hide('slow');
		
         return false ;       
        });
        
 
       
        
    });
    
    
    function swapC() {
        
        
     // var desing = function()
      //{
       //prva akcija desing
      $(".k1").fadeIn();
      $(".k1").letterfx({"fx":"spin fly-left","backwards":false,"timing":350,"fx_duration":"2000ms","letter_end":"restore","element_end":"stay"});
      $(".k1").delay(4500).fadeOut();
     // }
        
   
      
      var webRjesenja = function()
      {
          $(".k2").fadeIn();
          $(".k2").letterfx({"fx":"spin fly-left","backwards":false,"timing":350,"fx_duration":"2000ms","letter_end":"restore","element_end":"stay"});
          $(".k2").delay(5500).fadeOut();
    };
      
      
      
       var marketing = function()
      {
          $(".k3").fadeIn();
          $(".k3").letterfx({"fx":"spin fly-left","backwards":false,"timing":350,"fx_duration":"2000ms","letter_end":"restore","element_end":"stay"});
          $(".k3").delay(5500).fadeOut();
     };
      
      
         
      var izradaProg = function()
      {
          $(".k4").fadeIn();
          $(".k4").letterfx({"fx":"spin fly-top","backwards":false,"timing":320,"fx_duration":"2500ms","letter_end":"restore","element_end":"stay"});
          $(".k4").delay(7500).fadeOut();
     };
     
     
      var Mobilneapp = function()
      {
          $(".k5").fadeIn();
          $(".k5").letterfx({"fx":"smear","backwards":false,"timing":310,"fx_duration":"600ms","letter_end":"restore","element_end":"stay"});
          $(".k5").delay(7800).fadeOut();
     };
      
      
      setTimeout(webRjesenja, 3500);
      setTimeout(marketing, 8700);
      setTimeout(izradaProg, 13000); //21000
      setTimeout(Mobilneapp, 21000);
     
        
         window.setTimeout(function() { swapC(); }, 30600);
    }
    
    
  var rotation = function (){
   $("#l").rotate({
      angle:0, 
      animateTo:360, 
      callback: rotation
   });
   
};
    
    
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	});
</script>

<script type="text/javascript">

$(window).load(function(){
  
 
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector
         });
         return false;
    });
	
	
	
	
		$(".menu_social_icons img").rotate({
  bind:
  {
    mouseover : function() {
    $(this).rotate({animateTo:360})
  },
  mouseout : function() {
    $(this).rotate({animateTo:0})
    }
  }

});
	


$(".menu_social_iconsFoot img").rotate({
  bind:
  {
    mouseover : function() {
    $(this).rotate({animateTo:360})
  },
  mouseout : function() {
    $(this).rotate({animateTo:0})
    }
  }

});	


	
	
	
	
	
  
});

</script>

</body>
</html>