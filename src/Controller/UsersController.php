<?php
declare(strict_types=1);

namespace App\Controller;


use Cake\Event\EventInterface;

class UsersController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->Auth->allow(['registration']);
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }


    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function registration(){

        $ragisterUser = $this->Users->newEmptyEntity();

        if($this->request->is('post')){
            $ragisterUser = $this->Users->patchEntity($ragisterUser,$this->request->getData());

            if ($this->Users->save($ragisterUser)){
                $this->Flash->success('The user has been updated');
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error('The user could not be saved. Please, try again.');
        }
    }

    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify(); // ex: select * from users where email='$email' and password='$password'
            if($user){
                $this->Auth->setUser($user);
                $session = $this->request->getSession();
                $session->write('name', 'Prakash');
//                pr($session->read('name'));die();
                $this->Flash->success("Login Successfully...");
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error('Invalid User and Password');
        }
    }
    public function logout(){
         $session = $this->request->getSession();
         $session->destroy();
         return $this->redirect(['action' => 'login']); 
    }
}
