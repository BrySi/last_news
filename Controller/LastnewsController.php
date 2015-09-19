<?php
/**
 * Created by IntelliJ IDEA.
 * User: Bryan
 * Date: 19/09/2015
 * Time: 22:03
 */
class LastnewsController extends AppController {
    public function last_news() {
        $this->loadModel('News');
        $last_news = $this->News->find('first', array('order' => 'DESC id'))['News'];
    }
}
