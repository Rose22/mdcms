<?php
class mdSite {
	function __construct($config) {
	    $this->config = $config;
	    
	    $this->parser = new ParsedownExtra();
		return;
	}
	
	// Turns a page name into a full path towards the markdown file
	function getFullPath($filename) {
	    return $this->sanitizePath($this->config['content_dir'].'/'.$filename.'.md');
	}
	
    // Make sure they can't do stuff like request /etc/passwd
	function sanitizePath($path) {
	    $sanitized = str_replace("..", "nopes", $path);
	    $sanitized = trim($sanitized, "/");
	    
	    return $sanitized;
	}
	
	// Render the markdown based on the page name
	// Has fallbacks such as 404 and home
	function render($page) {
	    if (!$page) {
	        $page = "home";
	    }
	    
	    if (!file_exists($this->getFullPath($page)) && !in_array($page, ['home', 'footer', 'header'])) {
	        $page = "404";
        }

        // Show the welcome page if there is no home page
		if ($page == "home" && !file_exists($this->getFullPath($page))) {
			echo $this->parser->text(file_get_contents("sys/welcome.md"));
			return;
		}
        
        if (file_exists($this->getFullPath($page))) {
	        echo $this->parser->text(file_get_contents($this->getFullPath($page)));
	    } else {
	        echo $page.".md is missing";
	    }
	}
}
?>
