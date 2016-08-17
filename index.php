<?php
// mdCMS 1.0 by Rose

// Necessary includes
require("conf.php");
require("sys/Parsedown.php");
require("sys/ParsedownExtra.php");
require("sys/class.mdsite.php");

// Fallback stuff
if (!array_key_exists('webroot', $CONFIG)) {
    $CONFIG['webroot'] = "/";
}

// Directory checks
if (!is_dir($CONFIG['content_dir'])) {
    die("There is no content folder. Create one, please.");
}
if (!is_dir("static")) {
	mkdir("static");
}
if (!is_dir("static/styles/")) {
	mkdir("static/styles");
}
if (!is_dir("static/scripts/")) {
	mkdir("static/scripts");
}
if (!is_dir("static/scripts/include")) {
	mkdir("static/scripts/include");
}

// Initiate the mdSite class instance
$site = new mdSite($CONFIG);

// Use the ?p= GET variable.
$page = "";
if (array_key_exists('p', $_GET)) {
	$page = $_GET['p'];
}

// Retrieve automatic content stuffs
$pages = scandir("content");
$styles = scandir("static/styles");
$scripts = scandir("static/scripts/include");

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Powered by mdCMS -->
    
    <!-- BEGIN INCLUDE STYLES -->
    
	<?php
		foreach ($styles as $stylename) {
			if (in_array($stylename, ['.', '..'])) {
				continue;
			}

			?>
			<link rel="stylesheet" type="text/css" href="static/styles/<?php echo $stylename; ?>">
			<?php
		}
	?>
	
	<!-- END INCLUDE STYLES -->
	
	<!-- BEGIN INCLUDE SCRIPTS -->
	
	    <?php
		    foreach ($scripts as $scriptname) {
			    if (in_array($scriptname, ['.', '..'])) {
				    continue;
			    }

			    ?>
			    <script src="static/scripts/include/<?php echo $scriptname; ?>"></script>
			    <?php
		    }
	    ?>
	    
	<!-- END INCLUDE SCRIPTS -->
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <div class="inner">
                <?php $site->render("header"); ?>
                
                <nav id="menu">
                    <ul>
                        <?php
                            foreach ($pages as $pagename) {
                                // Don't include any of these in the menu
                                if (in_array($pagename, ['.', '..', 'home.md', '404.md', 'header.md', 'footer.md'])) {
                                    continue;
                                }
                                
                                // Do not include directories - allows you to create subdictories to hide pages in
								if (is_dir($CONFIG['content_dir'].'/'.$pagename)) {
									continue;
								}
                                
                                $pagename = str_replace(".md", "", $pagename);
                                ?><li><a href="<?php echo $CONFIG['webroot']; ?>?p=<?php echo $pagename; ?>"><?php echo ucwords(str_replace("_", " ", $pagename)); ?></a></li><?php
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="content">
            <div class="inner">
                <?php $site->render($page); ?>
            </div>
        </div>

        <div id="footer">
            <div class="inner">
                <?php $site->render("footer"); ?>
            </div>
        </div>
    </div>
</body>
</html>

