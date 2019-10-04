<?php
/**
* @file
* Contains \Drupal\hello_world\Controller\HelloWorldController
*/
namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
class HelloWorldController extends ControllerBase{
   public function hello(){
       $tekijaNimi = 'Tetiana Sabanina';
       $teksti = '<h2>Hurraa!</h2><p>Tämä on eka modulini.</p>';
       return array(
           '#title' => 'Hello World',
           '#markup'=> $teksti . '(tekijänä: ' . $tekijaNimi . ' &copy;)'
       );
   }

   public function news(){
        $tekijaNimi = 'Tetiana Sabanina';
        $post = '<h2>Uusimmat uutiset</h2><p>Tämä on toka modulini.</p>';
        return array(
            '#title' => 'News',
            '#markup'=> $post . '(tekijänä: ' . $tekijaNimi . ' &copy;)'
        );
    }
}


?>