<?php
/**
* @file
* Contains \Drupal\demo1\Controller\Demo1Controller
*/
namespace Drupal\demo1\Controller;

use Drupal\Core\Controller\ControllerBase;

class Demo1Controller extends ControllerBase{
   public function uutiset(){
       $tekijaNimi = 'Tetiana Sabanina';
       $teksti = 'Linkki 1';
       return array(
           '#title' => 'Uutiset',
           '#markup'=> $teksti . '(tekijänä: ' . $tekijaNimi . ' &copy;)'
       );
   }

   public function portfolio(){
        $tekijaNimi = 'Tetiana Sabanina';
        $post = 'Portfolio';
        return array(
            '#title' => 'Portfolio',
            '#markup'=> $post . '(tekijänä: ' . $tekijaNimi . ' &copy;)'
        );
    }
}


?>