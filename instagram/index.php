<?php include 'api.php'; ?>

<html>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<style>

html,body{
	margin:0px;
	padding:0px;
}

.instagramLink{
	width:100%;
	background:rgba(0, 0, 0, 0.5);
	display:none;
	text-align:center;
	text-decoration:none;
	padding-top:15px;
	padding-bottom:15px;
	color:#fff;
	font-weight:500;
	position:absolute;
	bottom:0px;
}

.instagramLink:hover{
	text-decoration:underline;
}

.container:hover .instagramLink{
	display:table-row;
}

.instagramImg{
	position:relative;
	display:table-row;
}

.container{
	display:inline-block;
	position:relative;
}

.instagramImg img{
	width:100%;
}

@media (max-width: 639px) and (min-width: 320px){

	.container{
		width:50%;
	}

}

@media (max-width: 959px) and (min-width: 640px){

	.container{
		width:33%;
	}

}

@media (max-width: 1279px) and (min-width: 960px){

	.container{
		width:25%;
	}

}

@media (min-width: 1279px){

	.container{
		width:20%;
	}

}

</style>

<!-- fancybox assets -->
<script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">

	jQuery(document).ready(function(){
		jQuery('.instagramImg').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
	});

</script>

</head>
<body>

<?php
	foreach($result->data as $imageInfo){
		print '<div class="container">';
		print '<a title="'.$imageInfo->caption->text.'" class="instagramImg" rel="gallery" href="'.$imageInfo->images->standard_resolution->url.'">';
		print '<img src="'.$imageInfo->images->low_resolution->url.'" alt="" />';
		print '<a href="'.$imageInfo->link.'" class="instagramLink">view on instagram</a>';
		print '</a>';
		print '</div>';
	}
?>

</body>
</html>