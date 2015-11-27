<!DOCTYPE html>
<html class="<?php $this->renderPage() ?>">
    <head>
    	<title><?php $this->renderTitle() ?></title>
    	<?php $this->renderMetas() ?>
    	<?php $this->renderCSS() ?>
    </head>
    <body>
    	<div class="container">
    	<?php $this->renderView() ?>
    	</div>
    	<?php $this->renderJS() ?>
    </body>
</html>