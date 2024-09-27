<?php
/**
 * Instalar Composer
 * Descargar desde composer setup.exe e instalarlo
 * comprobar la instalación en cmd >composer -v
 * 
 * busca en librerias de php
 * https://packagist.org
 * para generar pdf.... primero hay que instalaar la librería: html2pdf
 */

 /**
  * Instalar librería para generar pdf
  * html2pdf
  * Última versión estable ^5.2.8
  * Forzar a instalar una versión >composer require spipu/html2pdf:^5.2.8
  */

  /**
   * Problemas en la instalación
   * He descomentado en php.ini
   * extension=zip
   * extension=gd
   */

   //importar autoload para poder utilizar las librerías
 require 'vendor/autoload.php';

 //utilizar la librería
 use Spipu\Html2Pdf\Html2Pdf;

 //creo una instancia de la clase Html2pdf
 $html2pdf = new Html2Pdf();

 //creo contenido
 $html = "<h1>Hola desde pdf</h1>";
 $html .= "<p>Soy un pdf generado desde php</p>";

 //agrego contenido al pdf
 $html2pdf->writeHTML($html);

 //crea un archivo pdf y lo muestra
 $html2pdf->output("pdf_creado.pdf");

