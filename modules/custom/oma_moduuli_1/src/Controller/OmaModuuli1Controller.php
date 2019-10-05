<?php
/**
 * @file
 * Contains \Drupal\oma_moduuli_1\Controller\OmaModuuli1Controller
 */
namespace Drupal\oma_moduuli_1\Controller;
use Drupal\Core\Controller\ControllerBase;
class OmaModuuli1Controller extends ControllerBase{
   public function haku(){
       $Nimi = 'Jaakko Virtanen';
       $puhelin = '555-555-555';
       $sposti = 'jaakko.virtanen@domain.fi';
       $teksti = '<h3>Terve! Olen www-suunnittelija ' . $Nimi . ' ja etsin itselleni www-suunnittelijan töitä.</h3>';
       $teksti .= '<p>Työ voi olla: <ul>
       <li>vakituinen</li>
       <li>osa-aikainen</li>
       <li>työharjoittelupaikka</li>
       <li>projektityö</li></ul></p> ';
       $teksti .= '<p>Ota yhteyttä niin neuvotellaan asiasta. Minut tavoittaa sähköpostitse osoitteesta <strong>' . $sposti 
       . '</strong> tai soittamalla numeroon <strong>' . $puhelin . '. </strong>';
       $uutiset = '<h4> Uutisia: </h4><p>Tämä sivusto julkaistiin 5.11.2015. Kaikki palaute sivustosta on tervetullutta sähköpostitse osoitteeseen: ';
       $uutiset .= $sposti;
       

       return array(
           '#title' => 'WWW-suunnitelija etsii työtä',
           '#markup'=> $teksti . $uutiset . '.'
       );
   }

   public function post(){
    $Nimi = 'Jaakko Virtanen';
    $puhelin = '555-555-555';
    $sposti = 'jaakko.virtanen@domain.fi';
      
    $teksti = '<p>Kustannustehokas www-suunnittelu tarkoittaa mielestäni seuraavaa:
    <ul><li>Työn on oltava laadukasta ja nopeaa. </li>
    <li>Asiakkaan toimintaa on ymmärrettävä ja asiakkaan toivomukset on otettava huomioon. </li>
    <li>Projektit on määriteltävä siten, että kaikki osapuolet ymmärtävät, mitä tehdään ja miksi - tämä väärinkäsitysten välttämiseksi. </li>';
    $teksti .= '<li>Www-suunnittelu perustuu loppuasiakkaan eli sivuston katselijan tuntemuksiin ja toimiin - ei suunnittelijan mielihaluihin. </li></ul>
    Mikäli allekirjoitat ylläolevat mielipiteeni www-suunnittelusta ja tarvitset asiansa osaavaa tekijää, ota yhteyttä osoitteeseen <strong>' . $sposti 
    . '</strong> tai soittamalla numeroon <strong>' . $puhelin . '. </strong></p>';
   
        return array(
            '#title' => 'Kustannustehokasta työskentelyä',
            '#markup'=> $teksti . '.'
        );
    }

    public function cv(){
        $Nimi = 'Jaakko Virtanen';
        $puhelin = '555-555-555';
        $sposti = 'jaakko.virtanen@domain.fi';
          
        $teksti = '<h4>HENKILÖTIEDOT</h4>' . '<p>' . $Nimi . 
        ', synt. 23.7.1995 Porissa, avoliitossa. Puhelin ' . 
        $puhelin . '. Sähköpostiosoite: <a href="mailto:' . $sposti . '">' . $sposti . '</a>.</p>';
        $teksti .= '<h4>ATK-TAIDOT</h4><p>ATK osaamista on ...</p>';
        $teksti .= '<h4>HARRASTUKSET</h4><p>Harrastan...</p>';
            return array(
                '#title' => 'CV',
                '#markup'=> $teksti . '.'
        );
    }
    
    public function contact1(){
        $Nimi = 'Jaakko Virtanen';
        $puhelin = '555-555-555';
        $sposti = 'jaakko.virtanen@domain.fi';
        $fb = ' https//www.facebook.com/jaakko.virtanen';
              
        $teksti = '<p>' . $Nimi . ' Puhelin ' . $puhelin . '.</p>';
        $teksti.= '<p> Sähköpostiosoite: <a href="mailto:' . $sposti . '">' . $sposti . '</a>.</p>';
        $teksti .= '<p>Facebook: <a href="mailto:' . $fb . '">' . $fb . '</a>.</p>';
        
            return array(
                '#title' => 'Yhteystiedot',
                '#markup'=> $teksti . '.'
        );
    }

}

?>