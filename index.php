<?php
include 'includes/database.php';
$db = new PDO('mysql:host=localhost;dbname=robotRomanov','root', '');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Центр по роботехнике</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/modernizr.js"></script>

   
   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>

   	<div class="row">

   		<div class="logo">
	         <a href="/">Центр Роботехники</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a class="smoothscroll"  href="#intro" title="" style="font-size: 17px;"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a class="smoothscroll"  href="#process" title="">Процесс</a></li>
					<li><a class="smoothscroll"  href="#features" title="">Будущее</a></li>
					<li><a class="smoothscroll"  href="#pricing" title="">Стоимость</a></li>
					<li><a class="smoothscroll"  href="#faq" title="">Вопрос-Ответ</a></li>					
					<li class="highlight with-sep"><a href="/admin/sign.php" title="">Вход</a></li>
				</ul>
			</nav>

			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   	</div>   	
   	
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">

   	<div class="shadow-overlay"></div>

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<div class='video-link'>
	   				<a href="#video-popup"><img src="images/play-button.png" alt=""></a>
	   			</div>

	   			<h5>Добро пожаловать в Центр Роботехники</h5>
	   			<h1>Мы поможем вам подружится с будущим.</h1>

	   			<a class="button stroke smoothscroll" href="#process" title="">Начать обучение</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> 

   	<!-- Modal Popup
	   ========================================================= -->



       <div id="video-popup" class="popup-modal mfp-hide">

           <div class="fluid-video-wrapper">
           <form method="post" action="/sign.php">
               <label for="name">
                   Имя: <input type="text" name="name">
               </label>
               <label for="password">
                   Пароль: <input type="password" name="password">
               </label>
           </form>
           </div>

           <a class="close-popup">Close</a>

       </div> <!-- /video-popup -->
   </section> <!-- /intro -->


   <!-- Process Section
   ================================================== -->
   <section id="process">  

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Процесс</h5>
   			<h1>Как мы работаем?</h1>

   			<p class="lead">Мы научим вас как нужно общаться с роботами</p>

   		</div>   		
   	</div>

   	<div class="row process-content">

   		<div class="left-side">

   			<div class="item" data-item="1">

   				<h5>Свяжитесь с нами</h5>

   				<p>Мы назначем вам время, и расскажем подробнее</p>
   					
   			</div>

   			<div class="item" data-item="2">

	   			<h5>Начните заниматься вместе с нами</h5>

	   			<p>Во время обучения, мы научим вас много новому</p>
   					
   			</div>
   				
   		</div> <!-- /left-side -->
   		
   		<div class="right-side">
   				
   			<div class="item" data-item="3">

   				<h5>Создавайте</h5>

   				<p>Вы научитесь создавать что-то новое, и мы вам в этом поможем</p>
   					
   			</div>

   			<div class="item" data-item="4">

   				<h5>Научите других</h5>

   				<p>Новые технологии не за горами, приводите или научите ваших друзей, вместе будет веселее</p>
   					
   			</div>

   		</div> <!-- /right-side -->  

   		<div class="image-part"></div>  			

   	</div> <!-- /process-content --> 

   </section> <!-- /process-->    


   <!-- features Section
   ================================================== -->
	<section id="features">

		<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Будущее</h5>
   			<h1>Отличные навыки, которые вам понравится</h1>

   			<!-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->

   		</div>   		
   	</div>

   	<div class="row features-content">

   		<div class="features-list block-1-3 block-s-1-2 block-tab-full group">
		    
	      		
				<?php $result = $db->query("SELECT * FROM landing_future");
				while($res = $result->fetch(PDO::FETCH_BOTH)): ?>
				
					<div class="bgrid feature">	
					
						<span class="icon"><i class="<?= $res['icon'];?>"></i></span>            

						<div class="service-content">	

							<h3 class="h05"><?= $res['title'] ?></h3>

							<p><?=$res['name'] ?></p>
							
						</div> 	      

					</div>
				<?php endwhile;?>
	      		   	 
	      </div> <!-- features-list -->
   		
   	</div> <!-- features-content -->
		
	</section> <!-- /features -->
	

	<!-- pricing
   ================================================== -->

   <section id="pricing">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Our Pricing</h5>
   			<h1>Pick the best plan for you.</h1>

   			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   		</div>   		
   	</div>
	

   	<div class="row pricing-content">

         <div class="pricing-tables block-1-4 group">




			<?php $result = $db->query('SELECT fio, price, name, count_people, is_recommend as ir FROM `raspisanie` 
					JOIN `lector` ON lector.id = id_lector
					JOIN `group` ON `group`.`id` = `id_group`');
			while($res = $result->fetch(PDO::FETCH_BOTH)):?>

			<div class="bgrid"> 

			<div class="price-block">

				<div class="top-part">

					<h3 class="plan-title"><?=$res['name'] ?></h3>
				<p class="plan-price"><?=$res['price']?><sup>Р</sup></p>
				<p class="price-month">В месяц</p>
				<p class="price-meta"><?=$res['fio'] ?></p>

				</div>                

			<div class="bottom-part">

					<ul class="features">
					<li><strong><?=$res['count_people'] ?></strong> человек группа</li>	
				</ul>

				<a class="button large" href="sign.php?action=light">Записаться</a>

				</div>

			</div>           	
					
			</div> <!-- /price-block -->

			<?php endwhile; ?>









            <!-- <div class="bgrid">

            	<div class="price-block primary">

            		<div class="top-part" data-info="Рекомендуем!">

	            		<h3 class="plan-title">Вторник</h3>
		               <p class="plan-price">в 15<sup>30</sup></p>
		               <p class="price-month">Петров Петя</p>
							<p class="price-meta">Группа А и Б</p>

	            	</div>               

	               <div class="bottom-part">

	            		<ul class="features">
		                  <li>от <strong>3 - 12</strong> лет</li>
		                  <li><strong>Смешанная</strong> группа</li>		                  
		                  <li><strong>Лекцию введет профи</strong></li>		                  
		               </ul>

		               <a class="button large" href="">Записаться</a>

	            	</div>
            		
            	</div>            	                  -->

			  </div> <!-- /price-block -->

           <div class="bgrid">               

         </div> <!-- /pricing-tables --> 

      </div> <!-- /pricing-content --> 

   </section> <!-- /pricing --> 


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="h01">Hear What Are Clients Say.</h2>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flexslider">

            <ul class="slides">

               <li>
               	<div class="testimonial-author">
                    	<img src="images/avatars/avatar-1.jpg" alt="Author image">
                    	<div class="author-info">
                    		Steve Jobs
                    		<span class="position">CEO, Apple.</span>
                    	</div>
                  </div>

                  <p>
                  Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                  to do what you believe is great work. And the only way to do great work is to love what you do.
                  If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.  						
                  </p>                  
             	</li> <!-- /slide -->

               <li> 

               	<div class="testimonial-author">
                    	<img src="images/avatars/avatar-2.jpg" alt="Author image">
                    	<div class="author-info">
                    		John Doe
                    		<span>CEO, ABC Corp.</span>
                    	</div>
                  </div> 

                  <p>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.    
                  </p>
                                         
               </li> <!-- /slide -->

            </ul> <!-- /slides -->

         </div> <!-- /testimonial-slider -->         
        
      </div> <!-- /flex-container -->

   </section> <!-- /testimonials -->


   <!-- faq
   ================================================== -->
   <section id="faq">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">

   			<h5>Faq</h5>
   			<h1>Вопрос - Ответ</h1>

<!--   			<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>-->

   		</div>   		
   	</div>

   	<div class="row faq-content">

   		<div class="q-and-a block-1-2 block-tab-full group">

   			<div class="bgrid">

   				<h3>Пример 1</h3>

                <p>Разнообразный и богатый опыт рамки и место обучения кадров способствует повышению актуальности существующих финансовых и административных условий. Практический опыт показывает,...</p>
   			</div>

   			<div class="bgrid">

   				<h3>Пример 2</h3>

                <p>Дорогие друзья, рамки и место обучения кадров позволяет оценить значение соответствующих условий активизации. Задача организации, в особенности же консультация с...</p>

   			</div>

   			<div class="bgrid">

   				<h3>Пример 3</h3>

                <p>Практический опыт показывает, что повышение уровня гражданского сознания обеспечивает широкому кругу специалистов участие в формировании модели развития. Значимость этих проблем...</p>
   			</div>

   			<div class="bgrid">

   				<h3>Пример 4</h3>

                <p>Равным образом начало повседневной работы по формированию позиции требует от нас системного анализа системы обучения кадров, соответствующей насущным потребностям. Дорогие...</p>
   			</div>

   			<div class="bgrid">

   				<h3>Пример 5</h3>

                <p>Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности требует от нас системного анализа направлений прогрессивного развития. Равным...</p>
   			</div>

   			<div class="bgrid">

   				<h3>Пример 6</h3>

                <p>Дорогие друзья, рамки и место обучения кадров влечет за собой процесс внедрения и модернизации ключевых компонентов планируемого обновления. Соображения высшего...</p>
   			</div>

   		</div> <!-- /q-and-a --> 
   		
   	</div> <!-- /faq-content --> 

   	<div class="row section-ads">

		   <div class="col-twelve">	

		     	<div class="ad-content">

		     		<h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

			      <p class="lead">
			      Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->					
					</p>

					<div class="action">
			         <a class="button large round" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
		        	</div>

		     	</div>			      

			</div>

		</div> <!-- /section-ads --> 


   </section> <!-- /faq --> 

   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            
	            <p>
		        	ГГПИ им. Короленко<br>
            	info@ggpi.org &nbsp; +123-456-789
		        	</p>

		      </div> <!-- /footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Ссылки сайтов</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- /site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Социальные сети</h4>

	      		<ul>
	      			<li><a href="#">VK</a></li>
						<!-- <li><a href="#">Facebook</a></li> -->
						<!-- <li><a href="#">Dribbble</a></li> -->
						<!-- <li><a href="#">Google+</a></li> -->
						<!-- <li><a href="#">Skype</a></li> -->
					</ul>
	      	           	
	      	</div> <!-- /social --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<div class="subscribe-form">
	      	
	      		</div>	      		
	      	           	
	      	</div> <!-- /subscribe          -->

	      </div> <!-- /row -->

   	</div> <!-- /footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Романов Влад</span> 		         	
		         </div>

		         <div id="go-top" style="display: block;">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- /footer-bottom -->     	

      </div>

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>

</html>