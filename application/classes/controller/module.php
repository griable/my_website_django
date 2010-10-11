<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Module extends Controller {
    public function action_slideshow()
    {
		$projects = ORM::factory('project')->find_all();
    		
        $this->request->response = View::factory('partials/project_slidehow')->set('projects', $projects);
    }
    
    public function action_twitter_feed()
    {
        $url = 'http://api.twitter.com/1/statuses/user_timeline.json?screen_name=griable&count=8';
        $tweets = json_decode(file_get_contents($url));
        
        $this->request->response = View::factory('partials/twitter_feed')->set('tweets', $tweets);
    }
}