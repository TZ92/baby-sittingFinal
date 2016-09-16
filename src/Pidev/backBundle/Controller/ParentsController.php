<?php

namespace Pidev\backBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pidev\backBundle\Entity\Parents;
use Pidev\backBundle\Form\ParentsType;

/**
 * Parents controller.
 *
 */
class ParentsController extends Controller
{

    /**
     * Lists all Parents entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PidevbackBundle:Parents')->findAll();

        return $this->render('PidevbackBundle:Parents:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Parents entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Parents();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parents_show', array('id' => $entity->getId())));
        }

        return $this->render('PidevbackBundle:Parents:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Parents entity.
    *
    * @param Parents $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Parents $entity)
    {
        $form = $this->createForm(new ParentsType(), $entity, array(
            'action' => $this->generateUrl('parents_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Parents entity.
     *
     */
    public function newAction()
    {
        $entity = new Parents();
        $form   = $this->createCreateForm($entity);

        return $this->render('PidevbackBundle:Parents:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Parents entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevbackBundle:Parents')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parents entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevbackBundle:Parents:showp.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Parents entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevbackBundle:Parents')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parents entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PidevbackBundle:Parents:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Parents entity.
    *
    * @param Parents $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Parents $entity)
    {
        $form = $this->createForm(new ParentsType(), $entity, array(
            'action' => $this->generateUrl('parents_update', array('id' => $entity->getIdParent())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Parents entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PidevbackBundle:Parents')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parents entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('parents_edit', array('id' => $id)));
        }

        return $this->render('PidevbackBundle:Parents:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Parents entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PidevbackBundle:Parents')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Parents entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('parents'));
    }

    /**
     * Creates a form to delete a Parents entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parents_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function generateParentAction() {
        $em = $this->getDoctrine()->getManager();
        $parent = $em->getRepository("PidevbackBundle:Parents");
        //$tab = array('idBabysitter' => $id);
        $res = $parent->findAll();
        $html = $this->renderView('PidevbackBundle:Parents:ListeParents.html.twig', array(
            'some' => $res
        ));
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="listeParents.pdf"'
                )
        );
    }
}
