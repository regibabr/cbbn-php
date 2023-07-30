<?php
include_once '../config/conn.php';
?>












<html>
<head>
<meta charset="UTF-8">
<title>Quem Somos</title>

<link href="../css\stylee.css" rel="stylesheet"/>



<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type ="text/javascript">
	$ (function (){
		$("#slides ul").cycle({
		fx: 'fadeZoom',
		speed:2000,
		timeout:6000,
		prev: '#previous',
		next: '#next'
	
	});
});
	
	
	
	</script>

	
	</head>



<body>



<div id = "tudoquemsomos">

	<div id="topo">
	
	<div id ="formulario">
	<form name="form"method="post" enctype="multipart/form-data" class="login"> 
	<p id="p">Login - Area restrita<p><img id="img" src="../img/cadeado.png" >
<label>Usuário: </label>
<input name="usuario" type="text" tabindex="1" size="15" class="campos"> 

<label>Senha: </label> 
<input name="senha" type="password" tabindex="2" size="15" class="campos"> 
<input type="submit" name="logar" value="Entrar" tabindex="3" class="botao"> 
</form>
		
<?php include_once '../config/logar.php'; ?>
	
	</div>
	
	
	<div  id ="logoIBBN"><a href = "../index.php" 
	 title="IBBN"><img src="../img/logoIBBN.jpg" ></a></div>
	
	<div  id ="logoface100"><a href = "https://www.facebook.com/Igreja-Batista-Boas-Novas-588656027900047/" 
	target="blank" title="Facebook"><img src="../img/logoface100.png" ></a></div>
	
	<div  id ="Instragram"><a href = "#" 
	 title="Instagram"><img src="../img/Instragram.png" ></a></div>     
	
	
	
	
			<div id ="buscar">
			<script>
  (function() {
    var cx = '001033373295688641425:d55bf2gpckc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>		
	
	
	
	
	</div>
	
		<div id="meiotopo">
		</div>
		
			<div id="menu">
			<ul>
			<li><a href="../index.php">Inicio</a>
			<li><a href="../assuntos/quemsomos.php">A igreja</a>
			<li><a href="../assuntos/palavrapastoral.html">Palavra pastoral</a>
			<li><a href="https://www.bibliaonline.com.br/" target="blank">Biblia online</a>
			<li><a href="../assuntos/contato.html">Unidades</a>
			</ul>
			</div>
			
			
			
			
			<div id="quemsomosinterno">
			<h2 align="center">Quem somos</h2>
			
			<p>&emsp;&emsp;&emsp;&emsp;A Comunidade Batista Boas Novas, fundada em janeiro de 2003 em Salvador/Ba,  por um grupo de irmãos residentes no bairro de Vista Alegre e adjacências e  presidida pelo Pastor Clovis Sales Lopes, entende que a essência da Igreja é a comunidade. Que Igreja é um organismo vivo que o novo testamento chama de corpo de Cristo (1 Coríntios 12:27). 
Como instituição religiosa tem sua orientação e princípios baseados na denominação Batista, adotando a declaração de fé da Convenção Batista Brasileira. </p> 

			</div>
			
			
			<div id="Foto1">
			<img src="../img/igreja1.jpg" />
			
			</div>
			
			<div id="Foto2">
			<img src="../img/igreja2.jpg" />
			</div>
			
			<div id="Foto3">
			<img src="../img/igreja3.jpg" />
			</div>
			
			
			<div id="Comentarios">
			<h2>Deixe aqui seus comentários<h2>
			</div>
			
			<div id="comentariosface">
			<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" 
data-numposts="1"></div>
			
			
			
			</div>
			
			<div id="rodapequemsomos">
								<div id="endereco">
								<h3>VISITE-NOS<h3>
								
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d814.1854163666402!2d-38.
								46085747083406!3d-12.852549291928769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!
								3m3!1m2!1s0x7161223be51e225%3A0xcdfe5a672a7b8545!2sR.+do+Sabi%C3%A1%2C+18+-+
								Coutos%2C+Salvador+-+BA!5e1!3m2!1spt-BR!2sbr!4v1471806023001" width="200" height="200"
								frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								
									<div id="face">
									<h3>CURTA NOSSA PÁGINA!<h3>
									<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com
									%2FIgreja-Batista-Boas-Novas-588656027900047%2F%3Ffref%3Dts&tabs=timeline&width=200&height
									=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId
									" width="200" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder=
									"0" allowTransparency="true"></iframe>
									</div>
								
									<div id="galeria">
									<h3>GALERIA DE FOTOS!<h3>
									<object width="200" height="200"> <param name="flashvars" value="offsite=true&lang=pt-br&page_show_url=%2
									Fphotos%2F148952136%40N07%2Fshow%2F&page_show_back_url=%2Fphotos%2F148952136%40N07%2F&user_id=148952136@N07&
									jump_to="></param> <param name="movie" value="https://www.flickr.com/apps/slideshow/show.swf?v=261948265">
									</param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" 
									src="https://www.flickr.com/apps/slideshow/show.swf?v=261948265" allowFullScreen="true" flashvars="offsite=
									true&lang=pt-br&page_show_url=%2Fphotos%2F148952136%40N07%2Fshow%2F&page_show_back_url=%2Fphotos%2F148952136%
									40N07%2F&user_id=148952136@N07&jump_to=" width="200" height="200"></embed></object>
									</div>
								
								</div>
							
							
										<div id="rodapefimquemsomos">
										<ul>
			<li><a href="../index.php">Inicio</a>
			<li><a href="../assuntos/quemsomos.php">A igreja</a>
			<li><a href="../assuntos/palavrapastoral.html">Palavra pastoral</a>
			<li><a href="https://www.bibliaonline.com.br/" target="blank">Biblia online</a>
			<li><a href="../assuntos/contato.html">Unidades</a>
			</ul>
			
			<p>Copyright 2016 © Igreja Batista Boas Novas - Todos os direitos reservados.<p>
										</div>
							</div> 
							
				<div id="desenvolvedorquemsomos"> .
				
				<p>Desenvolvido por <a href="https://www.facebook.com/regimilson.dasilva" target="blank"> Regimilson<p><br />
				
			
				</div>	
			</div>
</body>
</html>