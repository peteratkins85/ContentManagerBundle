<?php

namespace Cms\ContentManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContentForm extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    function __contruct($contentEntity){



    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contentId')
            ->add('contentName')
            ->add('contentType')
            ->add('templateId')
            ->add('homePage')
            ->add('created')
            ->add('modified')
            ->add('modifiedBy')
            ->add('url')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\ContentManagerBundle\Entity\Content'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_contentmanagerbundle_content';
    }
}
