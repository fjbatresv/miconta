<?php

namespace Admingenerated\MetapodSoporteBundle\Form\BaseUsuarioType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use JMS\SecurityExtraBundle\Security\Authorization\Expression\Expression;

class FiltersType extends AbstractType
{
    protected $securityContext;

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $formOptions = $this->getFormOption('nombre', array(  'required' => false,  'label' => 'Nombre',  'translation_domain' => 'Admin',));
        $builder->add('nombre', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('apellido', array(  'required' => false,  'label' => 'Apellido',  'translation_domain' => 'Admin',));
        $builder->add('apellido', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('username', array(  'required' => false,  'label' => 'Username',  'translation_domain' => 'Admin',));
        $builder->add('username', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('email', array(  'required' => false,  'label' => 'Email',  'translation_domain' => 'Admin',));
        $builder->add('email', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('direccion', array(  'required' => false,  'label' => 'Direccion',  'translation_domain' => 'Admin',));
        $builder->add('direccion', 'text', $formOptions);

    
        $formOptions = $this->getFormOption('EstadoUsuario', array(  'class' => 'Metapod\\SoporteBundle\\Model\\EstadoUsuario',  'multiple' => false,  'required' => false,  'label' => 'Estado',  'translation_domain' => 'Admin',));
        $builder->add('EstadoUsuario', 'model', $formOptions);

    
    }

    protected function getFormOption($name, array $formOptions)
    {
        return $formOptions;
    }

    public function getName()
    {
        return 'filters_usuario';
    }

    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
    }

}
