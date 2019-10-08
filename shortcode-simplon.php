<?php
/*
Plugin Name: Shortcode - Simplon
Plugin URI: https://github.com/JamesCousinKruger
Description: Shortcode permettant de renseigner une desciption de la formation "Référent Numérique en Entreprise"
Author: James
Version: 1.0
Author URI: https://www.linkedin.com/in/james-cousin-kruger/
*/

function shortcode_simplon() {

  $html_simplon = "<p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <span class='bold'>Référent.e Numérique Entreprise</span> prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <span class='red'>3 certifications</span>.</p>
  <p>Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins. La formation est menée conjointement par :</p>
  <ul>
      <li>l’<a href='https://www.insa-rouen.fr/' target='_blank'>INSA ;</a></li>
      <li>le <a href='https://www.cesi.fr/' target='_blank'>CESI ;</a></li>
      <li><a href='https://simplonline.co/' target='_blank'>Simplon.co.</li></li>
  </ul>
  <style type='text/css'>
    .bold {
      font-weight:bold;
    }

    .red{
      color:#a61c00;
    }
    </style>
  ";
  
  return $html_simplon;
  }
  
  add_shortcode('simplon', 'shortcode_simplon');

  