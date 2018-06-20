<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\WeatherType;
use AppBundle\Entity\Cloth;
use AppBundle\Entity\Weather;

/**
 * @Route("/outfit", name="outfit_")
 */

class OutfitController extends Controller
{
    /**
     * @Route("/", name="result")
     * @Method({"GET", "POST"})
     */
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine();
// je récupère depuis le GET, la saison et la température
        // $season = $request->query->get('season');

        // $temperature = $request->query->get('temperature');
        $temperature = intval($request->query->get('temp'));
        // dump(gettype($temperature));
        // die();



// Je défini mon repo sur la classe Cloth
        $repository = $em->getRepository(Cloth::class);

// Pour chaque partie du corps, je défini un requête sql qui va chercher les vêtement en fonction de la saison et de la température

// up = haut ( chemise + pull) part id (6 ; 5)

// je récupère le resultat de la requête custom dans la variable $under_up, depuis le ClothRepository
        $up = $repository->uptActionByTemp($temperature);
        // dump($up);
        // die();

// Je compte le nombre d'élément du tableau de résultats
        $qtyUp = count($up);
// En fonction du nombre d'éléments dans le tableau, j'effectue l'action appropriée

        if($qtyUp > 1){
// // je choisi au hasars un vêtement dans le tableau
         $randomUp = $up[array_rand($up, 1)];
        }elseif ($qtyUp === 1 ) {
         $randomUp = $up[0];
        }else{
         $randomUp = null;     }



// under_up = tshirt /  part id : 4

    // je récupère le resultat de la requête custom dans la variable $under_up, depuis le ClothRepository
        $under_up = $repository->tshirtActionByTemp($temperature);
    // Je compte le nombre d'élément du tableau de résultats
        $qtyUnder_up = count($under_up);
    // En fonction du nombre d'éléments dans le tableau, j'effectue l'action appropriée

        if($qtyUnder_up > 1){
            // je choisi au hasars un vêtement dans le tableau
            $randomUnderUp = $under_up[array_rand($under_up, 1)];
        }elseif ($qtyUnder_up === 1 ) {
            $randomUnderUp = $under_up[0];
        }else{
            $randomUnderUp = null;
        }
        




// down = bas ( pantalon + robe) part id (3 ; 2)

    // je récupère le resultat de la requête custom dans la variable $under_up, depuis le ClothRepository
        $down = $repository->downtActionByTemp($temperature);
    // Je compte le nombre d'élément du tableau de résultats
        $qtyDown = count($down);
    // En fonction du nombre d'éléments dans le tableau, j'effectue l'action appropriée

        if($qtyDown > 1){
        // je choisi au hasars un vêtement dans le tableau
        $randomDown = $down[array_rand($down, 1)];
    }elseif($qtyDown === 1){
        $randomDown = $down[0];
    }else{
        $randomDown = null;
    }

        // Je retourne à la vue le resultat des requêtes
        if($randomUp !== null){
            return $this->json(array(
                'up' => $randomUp->getImage(),
                'under_up' => $randomUnderUp->getImage(),
                'down' => $randomDown->getImage()
            ));
        }else{

                    return $this->json(array(
                    'up'=>'',
                'under_up' => $randomUnderUp->getImage(),
                'down' => $randomDown->getImage()

        ));
    }

    }
}
