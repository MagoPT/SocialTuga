<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        /*if($this->request->session()->read('languageChange') == 'en_US'){
            I18n::locale('en_US');
        } elseif ($this->request->session()->read('languageChange') == 'pt_PT') {
            I18n::locale('pt_PT');
        }*/
        //Configure::write('Config.language', 'pt_PT');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    /*public function language()
    {
        if($this->request->session()->read('Config.language') == 'pt_PT'){
            I18n::locale('pt_PT');
        } else {
            $this->request->session()->write('Config.language', 'en_US');
            I18n::locale('en_US');
        }
    }*/

    /*public function beforeFilter(){
        if(isset($this->request->params['named']['lang'])){
            Configure::write('Config.language', $this->request->params['named']['lang']);
        } else {
            //Configure::write('Config.language', 'pt_PT');
        }
    }*/

    /*public function changeLanguage($language = null)
    {
        if($language!=null && in_array($language, ['en_US','pt_PT'])){
            $this->request->session()->write('Config.language',$language);
            return $this->redirect($this->referer());
        } else {
            $this->request->session()->write('Config.language',I18n::setLocale('pt_PT'););
            return $this->redirect($this->referer());
        }
    }

    public function beforeFilter(Event $event)
    {
        if($this->request->session()->check('Config.language'));
        {
            I18n::setLocale($this->request->session()->read('Config.language'));
        } else {
            $this->request->session()->write('Config.language',I18n::setLocale('pt_PT'););
        }
    }*/
}
