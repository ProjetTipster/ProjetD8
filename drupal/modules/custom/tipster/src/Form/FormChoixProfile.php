<?php

/**
 * @file
 * Contains \Drupal\tipster\Form\FormChoixProfile.
 */

namespace Drupal\tipster\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;
use Drupal\user\UserInterface;
use Drupal\Core\Session\AccountProxyInterface;
/**
 * Class FormChoixProfile.
 *
 * @package Drupal\tipster\Form
 */
class FormChoixProfile extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'form_choix_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['choix_profile'] = array(
            '#type' => 'radios',
//            '#title' => t('Choisissez le type de profile : '),
            '#options' => array('tipster' => t('Tipster'), 'follower' => t('Follower')),
        );
        $form['button_submit'] = array(
            '#type'=>           'submit',
            '#value'=>          t('Créer mon profile'),
        );
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $current_user_id = \Drupal::currentUser()->id();
        $account = User::load($current_user_id);
//      kint($account);
//      die();
        $profile=$form_state->getValue('choix_profile');
        if(!empty($profile)){
            if($profile == 'tipster'){
                $account->addRole('tipster');
            }
            elseif($profile == 'follower'){
                $account->addRole('follower');
            }
            $account->save();
//          $form_state->setRedirect('entity.profile.add_form');
 //           $_REQUEST['destination'] = '/user/'.$current_user_id.'/'.$profile;
        }
    }

}