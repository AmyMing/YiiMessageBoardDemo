<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <style type="text/css">
            body { padding-top: 80px; }
        </style>
	</head>
	<body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	        <div class="container">
		        <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="#">Message Board</a>
		        </div>
		        <div class="collapse navbar-collapse">
			        <ul class="nav navbar-nav">
		                <?php $this->widget('zii.widgets.CMenu',array(
                            'htmlOptions'=>array('class'=>'nav navbar-nav'),
			                'items'=>array(
				                array('label'=>'Home', 'url'=>array('/'))
			                ),
		                )); ?>
			        </ul>
		        </div>
	        </div>
        </div>
        <div class="container">
            <?php echo $content; ?>
        </div>
	</body>
</html>