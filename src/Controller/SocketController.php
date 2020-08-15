<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;

/**
 * Socket Controller
 */
class SocketController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->set('host', Configure::readOrFail('WsServer.host'));
        $this->set('port', Configure::readOrFail('WsServer.port'));
    }

    public function push()
    {
        $message = $this->getRequest()->getQuery('message');
        $this->set('host', Configure::readOrFail('WsServer.host'));
        $this->set('port', Configure::readOrFail('WsServer.port'));
        $this->set('message', $message);
    }
}
