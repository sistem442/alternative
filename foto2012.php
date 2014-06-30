<?php
namespace Gallery;

include_once 'include/class_gallery.php';

$gallery = new Image_gallery;
$gallery->setPath('images/gallery_2012/');	
$images = $gallery->getImages();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Foto 2012</title>
    	<link rel="stylesheet" href="css/gallery.css">
        <SCRIPT src="http://dksg.rs/jquery-1.10.1.min.js" type="text/javascript" charset="utf-8"></SCRIPT>
        <link rel="stylesheet" type="text/css" href="http://dksg.rs/css/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://dksg.rs/css/jquery.fancybox-buttons.css?v=1.0.5" />
        <script type="text/javascript" src="http://dksg.rs/jquery.fancybox.js?v=2.1.5"></script>
        <script type="text/javascript" src="http://dksg.rs/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			$('.fancybox-buttons').fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			closeBtn : false,
			helpers : {
			title : {
				type : 'inside'
			},
			buttons : {}
			},
				afterLoad : function() {
				this.title = 'Slika ' + (this.index + 1) + ' od ' + this.group.length + (this.title ? ' - ' + this.title : '');
			}
			});
			});
			//End of Fancybox
			</script>
    </head>
    
    <body>
    
        <div class="container">
			<?php if($images):?>                
                <div class="gallery cf">
                    <?php foreach($images as $image):?>
                        <div class="gallery-item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $image['full'];?>"><img src="<?php echo $image['thumb'];?>"></a>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php else: ?>
            	There are no images.
            <?php endif;?>    
        </div>
    </body>
</html>