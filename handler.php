<?php

// function getPage() {
//     continue
// }

/**
 * return an object that contains all of the data about the page
 * title
 * content
 * 
 */
function handle() {
    
    // get the requested path
    $requested_file_name = parse_url($_SERVER['REQUEST_URI'])["path"];

    $page = new Page();
    $page->loadContent($requested_file_name);
    return $page;
}



class Page {
    private $content;
    private $css;


    /**
     * log a message to the website at the top
     */
    function log($message) {
        $message = date("H:i:s") . " - $message - ".PHP_EOL;
        print($message);
        flush();
        ob_flush();
    }

    /**
     * load code from a local file
     * path is either 
     * /
     * /thing
     */
    function loadContent($path) {
        
        // convert the path
        // $pathFile = "app$path";
        // $pathStyle = "stylesheets$path";

        // directory path
        $dir = __DIR__ . '/app' . $path;

        // check for trailing / sign and remove it
        if ($dir[-1] == "/") {
            $dir = substr($dir, 0, strlen($dir)-1);
        }
        
        // check for css
        if (is_file("$dir/index.css")) {

            // add the files content
            $this->css = file_get_contents("$dir/index.css");
        }

        // file is a html file
        if (is_file("$dir/index.html")) {

            // get the files content
            $this->content = file_get_contents("$dir/index.html");
        
        // file is a php file
        } elseif (is_file("$dir/index.php"))

            // get the content of the php file
            $this->content = file_get_contents("$dir/index.php");

        // file not found
        else {
            
            // page not found handle the error
            $this->handleError(404);
        }
    }

    /**
     * handle the errors when they happen, load up a page that exists in the errors tab
     * or else load a default
     */
    function handleError($code) {

        // check if the error page exists
        if (is_file("errors/$code.html")) {

            // get the html files content
            $this->content = file_get_contents("errors/$code.html");

        // is a php file
        } elseif (is_file("errors/$code.php")) {
            
            // get the php files content
            $this->content = file_get_contents("errors/$code.php");

        // could not find file, load in default
        } else {

            // return some text
            $this->content = "error $code";
        }
    }
    
    // get the contents of the file
    function getContent() {
        return $this->content;
    }

    function getCss() {
        return $this->css;
    }
}
?>