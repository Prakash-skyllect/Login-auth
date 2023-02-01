<?php
namespace App\Controller\Api;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;

class AppController extends Controller
{
//    use \Crud\Controller\ControllerTrait;

    public function initialize(): void
    {
        parent::initialize();
//        $this->loadModel('ErrorMessages');
//        $this->loadModel('Messages');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete'
            ],
            'listeners' => [
                'CrudJsonApi.JsonApi',
                'CrudJsonApi.Pagination', // Pagination != ApiPagination
                'Crud.ApiQueryLog'
            ]
        ]);
        $this->loadComponent('Auth', [
            'storage' => 'Memory',
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Users',
                    // 'finder'=>'auth',
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password',
                    ],
                ],
            ],

        ]);
    }

}
