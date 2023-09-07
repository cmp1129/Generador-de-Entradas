		<?php
		error_reporting(E_ALL);
		ini_set('display_errors',1);
		
		require_once "bootstrap.php";
		
		$arr = [
			["titol"=>"Marina Bbface & The Beatroots en el Jamboree Jazz Club",
			"subtitol"=>"La banda Marina BBface & The Beatroots se consolidó como uno de los grupos de más referencia en la música negra española. Llenos de energía este grupo espectacular te hará vibrar con sus ritmos fascinantes de funk y con su soul inolvidable.",
			"imatge"=>"img/DSC_7423ret2baixa1.jpg"],
			
			["titol"=>"Tete Montoliu 80 + 4",
			"subtitol"=>"El gran Tete Montoliu está considerado como el músico más internacional de Jazz del país. Disfruta de un concierto con motivo de su aniversario.",
			"imatge"=>"img/tete-concierto-210217.original.jpg"],
			
			["titol"=>"Elefantes",
			"subtitol"=>"Elefantes recorrerá algunas de las Salas y Teatros más importantes de nuestra geografía con su propuesta Nueve canciones de amor y una de esperanza. ",
			"imatge"=>"img/240303_logo_Foto_horizontal_para_Ticketea_claim.jpg"],
			
			["titol"=>"Carlos Vives",
			"subtitol"=>"",
			"imatge"=>"img/258729_logo_Carlos_Vives_ticketea_claim.jpg"],
				
			["titol"=>"IZARO",
			"subtitol"=>"",
			"imatge"=>"img/257415_logo_izaro_claim.jpg"],
				
				["titol"=>"THE VERY BEST OF DIRE STRAITS",
				"subtitol"=>"bROTHES iN bAND. dIRE sTRAITS. The Very Best of dIRE sTRAITS SHOW",
				"imatge"=>"051214124520_theverybestinternet.jpeg"]
				
		];
		
		

		// foreach ($arr as $ar) {
		// 	$event = new Event();
		// 	$event->setTitol($ar["titol"]);
		// 	$event->setSubtitol($ar["subtitol"]);
		// 	$event->setImatge($ar["imatge"]);
		// 	$entityManager->persist($event);
		// }
		
		
		$arr = [
			["data"=>"15/04/2020", "hora"=>"21:30"],
				["data"=>"15/04/2020", "hora"=>"21:30"],
				["data"=>"16/04/2020", "hora"=>"21:30"],
				["data"=>"17/04/2020", "hora"=>"21:30"],
				["data"=>"18/04/2020", "hora"=>"21:30"],
				["data"=>"21/04/2020", "hora"=>"21:30"],
				["data"=>"23/04/2020", "hora"=>"21:30"],
				["data"=>"26/04/2020", "hora"=>"21:30"],
				["data"=>"27/04/2020", "hora"=>"21:30"],
				["data"=>"28/04/2020", "hora"=>"21:30"],
				["data"=>"30/04/2020", "hora"=>"21:30"],
				["data"=>"04/04/2020", "hora"=>"21:30"],
				["data"=>"06/04/2020", "hora"=>"21:30"],
				["data"=>"07/04/2020", "hora"=>"21:30"],
				["data"=>"10/04/2020", "hora"=>"21:30"],
				["data"=>"11/04/2020", "hora"=>"21:30"],
				["data"=>"12/04/2020", "hora"=>"21:30"],
				["data"=>"14/04/2020", "hora"=>"21:30"]
				
		];
		
		// Creació d'events
		// foreach ($arr as $ar) {
		// 	$event = new Data();
		// 	$event->setData($ar["data"]);
		// 	$event->setHora($ar["hora"]);
		// 	$entityManager->persist($event);
		// }
		
		
		
		$arr =[
				["lloc"=>"SALA BIKINI", "adreca"=>"L'illa Diagonal, L'Illia, Avinguda Diagonal, 547","localitat"=>"08029 Barcelona"],
				["lloc"=>"EL MOLINO", "adreca"=>"Carrer de Vila i Vilà, 99","localitat"=>"08004 Barcelona"],
				["lloc"=>"SALA APOLO 2", "adreca"=>"Carrer Nou de la Rambla, 111","localitat"=>"08004 Barcelona"],
				["lloc"=>"Sala Rocksound", "adreca"=>"Carrer dels Almogàvers, 116","localitat"=>"08018 Barcelona"],
				["lloc"=>"Continental Bar", "adreca"=>"Carrer de la Providència, 32","localitat"=>"08024 Barcelona"],
				["lloc"=>"Sant Jordi Club", "adreca"=>"Passeig Olímpic, 5","localitat"=>"08038 Barcelona"],
				["lloc"=>"SALA BARTS", "adreca"=>"Av. del Paraŀlel, 62","localitat"=>"08001 Barcelona"],
				["lloc"=>"Razzmatazz", "adreca"=>"Carrer de Pamplona, 88","localitat"=>"08018 Barcelona"],
				["lloc"=>"Sala Jamboree ", "adreca"=>"Plaça Reial, 17","localitat"=>"08002 Barcelona"],
				["lloc"=>"Sala Bóveda", "adreca"=>"Carrer de Roc Boronat, 33","localitat"=>"08005 Barcelona"],
				["lloc"=>"Palau de la Música Catalana", "adreca"=>"Carrer del Palau de la Música, 4","localitat"=>"08003 Barcelona"]
		];
		
		// foreach ($arr as $ar) {
		// 	$event = new Localitzacio();
		// 	$event->setLloc($ar["lloc"]);
		// 	$event->setAdreca($ar["adreca"]);
		// 	$event->setLocalitat($ar["localitat"]);
		// 	$entityManager->persist($event);
		// }
	
		$arr =["PLATEA", "PALCO", "PISTA", "ANFITEATRO", "ZONA VIP", "TRIBUNA", ];
		
		// foreach ($arr as $ar) {
		// 	$event = new Zona();
		// 	$event->setDescripcio($ar);
		// 	$entityManager->persist($event);
		// }
		
		
		
		$arr =[
		["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"],
				["banc"=>"CAIXA BANK", "ref"=>"0078 BPD ", "data"=>"01/02/2020", "estat"=>"CONFIRMAT"]
				
		];
		$s = 843;
		$i =1;
		
		// foreach ($arr as $ar) {
		// 	$event = new Pagament();
		// 	$event->setBanc($ar["banc"]);
		// 	$event->setReferenciaExterna($ar["ref"].($s*$i));
		// 	$event->setData($ar["data"]);
		// 	$event->setEstat($ar["estat"]);
		// 	$entityManager->persist($event);
			
		// 	$i=$i+$i+1;
		// }
		
		
		
		$entityManager->flush();
				
		$repoData = $entityManager->getRepository('Data');
		$repoEvent = $entityManager->getRepository('Event');
		$repoLoc = $entityManager->getRepository('Localitzacio');
		$repoPagament = $entityManager->getRepository('Pagament');
		$repoZona = $entityManager->getRepository('Zona');
		
		$i = 0;
		


		
		
		$arr =[
				["id"=>"24831VDKRB95CR","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>1, "butaca"=>18, "dni"=>"44003603A"],
				["id"=>"24831KRGX5YM14","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>1, "butaca"=>20, "dni"=>"44003603A"],
				["id"=>"24831FCTM11BP6","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>1, "butaca"=>22, "dni"=>"22404871F"],
				["id"=>"24831KMMT5YM14","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>2, "butaca"=>1, "dni"=>"22404871F"],
				["id"=>"2483MZRT18RP24","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>2, "butaca"=>3, "dni"=>"22404871F"],
				["id"=>"24831FPTR1178A","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>14, "butaca"=>6, "dni"=>"74003871M"],
				["id"=>"24831LLQ1224RT","event"=>"THE VERY BEST OF DIRE STRAITS", "loc"=>"SALA BARTS", "zona"=>"PLATEA", "fila"=>9, "butaca"=>20, "dni"=>"46007007K"],
				["id"=>"55032VDKRB95CR","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>1, "butaca"=>18, "dni"=>"44003603A"],
				["id"=>"55032KRGX5YM14","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>1, "butaca"=>20, "dni"=>"44003603A"],
				["id"=>"55032FCTM11BP6","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>1, "butaca"=>22, "dni"=>"22404871F"],
				["id"=>"55032KMMT5YM14","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>2, "butaca"=>1, "dni"=>"22404871F"],
				["id"=>"55032ZRT18RP24","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>2, "butaca"=>3, "dni"=>"22404871F"],
				["id"=>"55032FPTR1178A","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>14, "butaca"=>6, "dni"=>"74003871M"],
				["id"=>"55032LLQ1224RT","event"=>"Elefantes", "loc"=>"SALA BIKINI", "zona"=>"PLATEA", "fila"=>9, "butaca"=>20, "dni"=>"46007007K"],
		
		];
		
		$data = $repoData->findBy(array('id'=>(($i%18)+1)));
		
		// foreach ($arr as $ar) {
		// 	$event = new Entrada();
		// 	$event->setId($ar["id"]);
		// 	$ev = $repoEvent->findOneBy(array('titol'=>$ar["event"]));
		// 	$event->setEvent($ev);
		// 	$event->setData($repoData->findOneBy(array('id'=>(($i%18)+1))));
		// 	$event->setLocalitzacio($repoLoc->findOneBy(array("lloc"=>$ar["loc"])));
		// 	if (is_null($ar["zona"])){
		// 		$event->setZona($repoZona->findOneById(($i%6)+1));
		// 	} else {
		// 		$event->setZona($repoZona->findOneBy(array("descripcio"=>$ar['zona'])));
		// 	}
		// 	$event->setPagament($repoPagament->findOneById($i+1));
		// 	$event->setFila($ar['fila']);
		// 	$event->setButaca($ar['butaca']);
		// 	$event->setCompardor($ar['dni']);
		// 	$entityManager->persist($event);
				
		// 	$i++;
		// }
		$entityManager->flush();
		


