<?php
/**
 * Created by IntelliJ IDEA.
 * User: Bryan
 * Date: 19/09/2015
 * Time: 22:03
 */
class LastnewsController extends AppController {
    public function index() {
        $this->loadModel('News');
        $last_news = $this->News->find('first', array('order' => 'id DESC', 'conditions' => array('published' => 1)))['News'];
        $this->set(compact('last_news'));
    }
}