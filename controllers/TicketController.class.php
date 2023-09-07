<?php

use \Mpdf\Mpdf;
// la llibreria per generar el codi de barres no agafa bé la id, per aixo poso la de per defecte

/**
 * Genera un fitxer PDF del ticket de un concert utilitzant la llibreria mpdf
 * 
 */
class TicketController extends Controller{
	
    public function ticketGenerator() {

        require_once __DIR__ . '/../vendor/autoload.php';
        require_once __DIR__ . '/../config/ini-config.php';
        require "bootstrap.php";

        $mpdf = new \Mpdf\Mpdf();
        $idEntrada = $_GET ['ref'];   
        var_dump($idEntrada);
        $entrades = $entityManager->getRepository('Entrada')->find($idEntrada);

        if ($entrades) {
            $htmlEntrada = '
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff4e0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #D3D3D3;
            margin: auto;
            border: 3px solid #DAA520;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            font-size: 12px;
            text-align: left;
        }
        th {
            text-align: center;
            width: 20%;
            background-color: #000;
            color: #FFF;
        }
        td {
            width: 30%;
            text-align: left;
            width: 40%;
        }
        .barcode-cell {
            background-color: #000;  
            height: 60px;
            text-align: center;
        }
        .barcode-cell {
            height: 60px;
            text-align: center;
        }
        .barcode, .qrcode {
            width: 100%;
        }
        img {
            max-width: 150%;  
            max-height: 150px;  
            display: block;
            margin: auto;
        }
        .title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }
        .description {
            font-size: 14px; 
            color: #DAA520;  
            text-align: center; 
            font-weight: bold;
            font-size: 20px;
            background-color: #333333;
        }
        .location, .date-time, .address {
            text-align: center; 
        }
        .address {
            font-size: 15px;  
            color: #FFFFFF;  
            text-align: center;
            font-style: italic;
            background-color: #333333;
        }
        .title2 {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: black;
            margin-top: 25px;
        }
        .column {
            width: 300px;
            margin: 10px auto; 
            text-align: center;
        }
        .text {
            text-align: center;
            font-size: 12px;
            font-style: italic;
        }
        .center-flex {
            display: flex;
            justify-content: center;
        }
        .rounded {
            width: 100% !important;
            max-height: 200px !important;
        }
        </style>
        <table>
            <tr>
                <th colspan="3" class="barcode-cell"><barcode code="978-0-9542246-0" type="CODABAR" class="barcode" height="2" text="1" /></th>
            </tr>
            <tr>
                <th rowspan="3"><img src="'.$entrades->getEvent()->getImatge().'" alt=""></th>
                <td class="title">'.$entrades->getEvent()->getTitol().'</td>
                <td class="qrcode-cell"><barcode code="'.$entrades->getId().'" type="QR" class="qrcode" mode="H" size="0.7"></barcode>
                <img src="img/logoEmpresa.png" alt="Descripció de la imatge" style="width:150px; height:50px;">
                </td>
            </tr>
            <tr>
                <td class="location">'.$entrades->getLocalitzacio()->getLloc().'</td>
                <td class="date-time">
                DIA / HORA
                '.$entrades->getData()->getData().' - '.$entrades->getData()->getHora().'
                FILA / BUTACA
                '.$entrades->getFila().' - '.$entrades->getButaca().'
                </td>
            </tr>
            <tr>
                <td class="description">'.$entrades->getZona()->getDescripcio().'</td>
                <td class="address">'.$entrades->getLocalitzacio()->getAdreca().' / '.$entrades->getLocalitzacio()->getLocalitat().'</td>
            </tr>
        </table>
        <div class="title2">Proximament, Nous Concerts...</div>
        <div class="center-flex">
            <div class="column">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam massa mauris, ut sagittis libero aliquet eget. Mauris eget facilisis sem, id volutpat elit.
                </div>
                <img src="img/taylorswift.jpg" alt="" class="rounded">
            </div>
            <div class="column">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam massa mauris, ut sagittis libero aliquet eget. Mauris eget facilisis sem, id volutpat elit.
                </div>
                <img src="img/taylor2.jpeg" alt="" class="rounded">
            </div>
        </div>
        <div style="text-align:center; margin-top:10px;"><barcode code="978-0-9542246-0" type="CODABAR" height="2" text="1" /></div>
        ';

        $mpdf->WriteHTML($htmlEntrada);
        $mpdf->SetWatermarkImage('img/logoEmpresa.png'); // marca aigua
        $mpdf->showWatermarkImage = true;
        $mpdf->Output('ticket.pdf', 'D');
            
        } else {
            echo "No s'ha trobat cap entrada amb aquesta ID";
        }

    }
}