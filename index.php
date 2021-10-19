<?php 
//Header Area
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(  )?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>
    
<div id="header_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href=""><img src="<?php echo get_theme_mod('imran_logo'); ?>"</a>
            </div>
            <div class="col-md-9">
                <ul id="nav"> 
                        <li><a href="">Home</a></li>
                        <li><a href="">Sample</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Privacy</a></li>
                        <li><a href="">Terms</a></li>
                </ul>
                </div>
        </div>
    </div>
</div>

<?php wp_footer(  ); ?>
</body>
</html>