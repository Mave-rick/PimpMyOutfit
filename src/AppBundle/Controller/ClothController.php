<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Service\FileUploader;
use Symfony\Component\Security\Core\User\UserInterface;

use AppBundle\Entity\Cloth;
use AppBundle\Form\ClothType;
use AppBundle\Entity\Outfit;

/**
 * @Route("/cloth", name="dressing_")
 */

class ClothController extends Controller
{
    /**
     * @Route("/", name="index")
     */
     // Affiche la liste des vêtements du dressing
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $list = $em->getRepository('AppBundle:Cloth')->findAll();

        return $this->render('cloth/index.html.twig', [
            'list' => $list
        ]);
    }
    /**
     * @Route("/new", name="new_cloth")
     */
    // Créer un formulaire pour l'ajout d'un vêtement dans le dressing
    public function newClothAction(Request $request, FileUploader $fileUploader, UserInterface $user = null)
    {
        $em = $this->getDoctrine()->getManager();

        $cloth = new Cloth();

        $form = $this->createForm(ClothType::class, $cloth);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On récupère le nom du fichier uploadé
                $file = $cloth->getImage();
                // On fait appel au service FileUploader qui récupère ce nom, et qui va s'oocuper de renommer le fichier de façon unique, et de déplacer le fichier uploadé du dossier temporaire où il se trouve, au dossier final utilisé par l'appli.
                $fileName = $fileUploader->upload($file);
                // On met à jour le nom du fichier renvoyé par le service
                $cloth->setImage($fileName);
                //on associe au post le user courant. Il faut toujours s'assurer que le user soit authentifié avant de le manipuler.
                // Le type-hint "UserInterface $user = null" dans la signature de la méthode permet ce controle.

            // je récupère la saison
            $seasons = $cloth->getWeathers();

            foreach($seasons as $sea){
                $season = $sea->getSeason();
            }

            $cloth->setSeason($season);


            $em->persist($cloth);
            $em->flush();

            $this ->addFlash(
                'success',
                'Votre vêtement "'.$cloth->getName().'" a bien été ajouté à votre dressing. Nice job !'
            );



        return $this->redirectToRoute('dressing_index');
        }

    return $this->render('cloth/new.html.twig', [
        'form'=> $form->createView()
    ]);

    }
    /**
     * @Route("/{id}", name="show_cloth", requirements={"id"="\d+"})
     */
     // affiche un vêtement en particulier
     public function showAction(Cloth $cloth)
     {
        return $this->render('cloth/show.html.twig', [
            'cloth' => $cloth
        ]);
     }
     /**
      * @Route("/{id}/edit", name="edit_cloth", requirements={"id"="\d+"})
      */
      public function editAction(Cloth $cloth, Request $request, FileUploader $fileUploader)
      {
         $editForm = $this->createForm('AppBundle\Form\ClothType', $cloth);
         $editForm->handleRequest($request);
         $oldFile = $fileUploader->setCurrentFilename($cloth->getImage());
         if ($editForm->isSubmitted() && $editForm->isValid()) {
             $file = $cloth->getImage();
                if (!Empty($file)) {
                  $fileName = $fileUploader->upload($file);
                }else{
                  $fileName = $oldFile;
                }
                $cloth->setImage($fileName);

             $em = $this->getDoctrine()->getManager();
             $em->flush();

             $this ->addFlash(
                 'success',
                 'Votre vêtement "'.$cloth->getName().'" a bien été mis à jour. Good !'
             );



         return $this->redirectToRoute('dressing_index');
         }

     return $this->render('cloth/new.html.twig', [
         'form'=> $editForm->createView()
     ]);
     }
     /**
      * @Route("/{id}/delete", name="delete_cloth", requirements={"id"= "\d+"})
      */
      // fonction qui efface un vêtement du dressing_
      public function deleteClothAction(Cloth $cloth)
      {
          $em = $this->getDoctrine()->getManager();

          $em->remove($cloth);
          $em->flush();

          $this->addFlash(
              'success',
              'Votre vêtement ""'.$cloth->getName().'"" a bien été supprimé. Bye!'

          );

          return $this->redirectToRoute('dressing_index');

      }




}
