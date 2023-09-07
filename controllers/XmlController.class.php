<?php

/**
 * Genera un fitxer XML amb informació dels espectacles en funció 
 * de la data proporcionada a través de la sol·licitud GET.
 * 
 */
class XmlController extends Controller {

    public function xmlGenerator() {

        require_once __DIR__ . '/../vendor/autoload.php';
        require_once __DIR__ . '/../config/ini-config.php';
        require "bootstrap.php";

        $data = $_GET ['data'];
        //var_dump($data);

        $dates = $entityManager->getRepository('Entrada')->findAll();
        
        $xml = new SimpleXMLElement('<espectacles></espectacles>');


        foreach ($dates as $dataValue) {
            if ($dataValue->getData()->getData() == $data) {
                $titol = $dataValue->getEvent()->getTitol();
                $hora = $dataValue->getData()->getHora();
                $dia =  $dataValue->getData()->getData();
                //var_dump($titol);
                
                $clauEspectacle = $titol . '-' . $hora;

                if (!isset($espectaclesAfegits[$clauEspectacle])) {
                    $espectacle = $xml->addChild('espectacle');
                    $espectacle->addChild('titol', $titol);
                    $espectacle->addChild('hora', $hora);
                    $espectacle->addChild('dia', $dia);
                    
                    $espectaclesAfegits[$clauEspectacle] = true;
                    //var_dump($espectaclesAfegits);
                }
            }
        }

        $dom = new DOMDocument("1.0");
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml->asXML());
        $xmlContent = $dom->saveXML();

        header('Content-Description: File Transfer');
        header('Content-Type: text/xml');  
        header('Content-Disposition: attachment; filename='.'arxiu_espectacles.xml');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . strlen($xmlContent)); 
        echo $xmlContent;

    }
}