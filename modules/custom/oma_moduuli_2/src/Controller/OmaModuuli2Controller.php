<?php
/**
 * @file
 * Contains \Drupal\oma_moduuli_2\Controller\OmaModuuli2Controller
 */
namespace Drupal\oma_moduuli_2\Controller;

use Drupal\Core\Controller\ControllerBase;

class OmaModuuli2Controller extends ControllerBase{
    public function generoiLista(){
        $fruits = [
            'Omena',
            'Banaani',
            'Appelsiini'
        ];
        $content[] = [
            '#theme'        => 'item_list',
            '#items'        => $fruits,
            '#title'        => 'Eräitä hedelmiä',
            '#list_type'    => 'ul',
            '#attributes'   => [
                'class' => ['class-1', 'class-2']
            ]
        ];
        return $content;
    }
}

?>