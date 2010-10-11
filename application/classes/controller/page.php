<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Website {
    public $template = 'site';
    
	public function action_home()
	{
		$this->template->title = 'Home';
		$this->template->content = View::factory('pages/home');
	}
    
    public function action_studies()
    {
		$studies = ORM::factory('study')->find_all();

		$this->template->title = 'Formation';
		$this->template->content = View::factory('pages/studies')->set('studies', $studies);
    }
    
    public function action_projects()
	{
		$projects = ORM::factory('project')->find_all();
		
		$this->template->title = 'Projets';
		$this->template->content = View::factory('pages/projects')
		    ->set('projects', $projects);
	}
	
	public function action_project($slug)
	{
	    $project_model    = ORM::factory('project');
		$project          = $project_model->where('slug', '=', $slug)->find();
		$previous_project = $project->get_previous();
		$next_project     = $project->get_next();
		
		$this->template->title = 'Projets - ' . $project->name;
		$this->template->content = View::factory('pages/project')
		    ->set('project', $project)
		    ->set('previous_project', $previous_project)
		    ->set('next_project', $next_project);
	}
	
	public function action_experiences()
    {
		$experiences = ORM::factory('experience')->find_all();
		
		$this->template->title = 'Experiences';
		$this->template->content = View::factory('pages/experiences')->set('experiences', $experiences);
    }
}