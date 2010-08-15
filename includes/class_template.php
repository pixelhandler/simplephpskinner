<?php 
// template class

class pageTemplate
{
	
	var $title;
	var $description;
	var $name;
	var $type;
	var $dir;
	
	function __construct($pagetitle="",$pagetype="details",$path="",$owner="")
	{
		$this->title = $owner;
		if ($this->title != "") 
		{
			$this->title .= " | " . $pagetitle;
		} 
		else 
		{
			$this->title = $pagetitle;
		}
		$this->name = $pagetitle;
		$this->description = $pagetitle;
		$this->type = strtolower($pagetype);
		$this->owner = $owner;
		$this->dir = strtolower($path);
	}
	
	function style($cssfile,$stamp="")
	{
		echo "<link href=\"" . $cssfile . "?" . round(time(), -3) . "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />\r\n";
	}
	
	function script($jsfile)
	{
		echo "<script src=\"" . $jsfile . "?" . round(time(), -3) . "\" type=\"text/javascript\" charset=\"utf-8\"></script>\r\n";
	}
	
	function pagetitle()
	{
		echo "<title>" . $this->title . "</title>\r\n";
	}

}

?>