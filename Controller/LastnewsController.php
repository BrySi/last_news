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
        $last_news = $this->News->find('first', array('order' => 'id DESC'))['News'];
        $this->autoRender = false;
        serialize(json_encode($last_news));
        echo "Suertzz FDP";
    }
}
