<?php
namespace IProgrammer\BlogFrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;


class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $b, array $options)
    {
        $b->add('title', TextType::class, array(
                'attr' => array('class' => 'form_input'),
                'label' => 'Title',
                'label_attr' => array('class' => 'form_label')
            ))
            ->add('description', TextareaType::class, array(
                'attr' => array('class' => 'form_input'),
                'label' => 'Description',
                'label_attr' => array('class' => 'form_label')
            ))
            ->add('Category', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                'class' => 'IProgrammerBlogFrontBundle:Category',
                'choice_label' => 'categoryName',
                'multiple' => true,
                'expanded' => true,
                'error_bubbling' => true
            ))
            ->add('save', SubmitType::class);
    }

    public function getName()
    {
        return 'iprogrammer_blogtype';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => 'IProgrammer\BlogFrontBundle\Entity\Blog',
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'task_item',
            'cascade_validation' => true,
            'validation_groups' => function(FormInterface $form){
                $data = $form->getData();

                $category = $form->get('Category');
                if(count($category->getData()) == 0) {
                    $form->get('Category')->addError(new FormError('Please checked the category'));
                } else {
                    return array('rest');
                }

            }
        ));
    }
}