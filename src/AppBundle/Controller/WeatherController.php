<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use AppBundle\Form\WeatherType;
use AppBundle\Entity\Weather;

/**
 * @Route("/weather", name="weather_")
 */

class WeatherController extends Controller
{
    /**
     * @Route("/", name="form")
     * @Method({"GET", "POST"})
     */
    public function formAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
// Je crée un formulaire pour définir la saison et la température
        $weather = new Weather();

        $form = $this->createFormBuilder($weather)
               ->add('season', ChoiceType::class, [
                   'label' => 'Saison',
                   'placeholder' => 'Quelle saison sommes nous ?',
                     'choices' => [
                       'Printemps' => 'printemps',
                       'Automne' => 'automne',
                       'Eté' => 'ete',
                       'Hiver' =>'hiver'
                   ]
               ])
               ->add('temperature',ChoiceType::class, [
                   'label' => 'Température',
                   'placeholder' => 'Quelle température fait-il ?',
                   'choices' => [
                     '0 °C' => '0',
                     '10 °C' => '10',
                     '15 °C' => '15',
                     '20 °C' =>'20'
                 ]
               ])
               ->getForm();

               $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();


// je renvoi la saison et la température selectionné
            return $this->redirectToRoute('outfit_result', [
                'season' => $data->getSeason(),
                'temperature' =>$data->getTemperature()

            ]);

        }
        return $this->render('weather/form.html.twig', [
            'form' => $form->createView(),

        ]);
    }
}
