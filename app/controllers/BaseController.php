<?php

class BaseController extends Controller {

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function missingMethod($parameters = array())
	{
    return Redirect::to('page-not-found');
	}

	public function pageNotFound()
	{
    return Response::view('pageNotFound', array(), 404);
	}


}
