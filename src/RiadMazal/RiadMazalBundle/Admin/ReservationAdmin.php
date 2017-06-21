<?php


namespace RiadMazal\RiadMazalBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ReservationAdmin extends AbstractAdmin
{
          protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('nom', 'text');
          $formMapper->add('email', 'text');
            $formMapper->add('arrivee', 'text');
    }

        protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a single route
        $collection->remove('delete');
        // OR remove all route except named ones
        $collection->clearExcept(array('list', 'show'));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nom');
         $datagridMapper->add('email');
          $datagridMapper->add('arrivee');
          
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom');
         $listMapper->addIdentifier('email', null, array(
            'show_filter' => true
        ));
          $listMapper->addIdentifier('adulte');
          $listMapper->addIdentifier('enfant');
         $listMapper->addIdentifier('phone');
         $listMapper->addIdentifier('pays');
         $listMapper->addIdentifier('chambres');
         $listMapper->addIdentifier('nuits');
          $listMapper->addIdentifier('arrivee');
          $listMapper->addIdentifier('depart');
        
    }
}