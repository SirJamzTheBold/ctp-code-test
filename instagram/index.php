<?php 
include 'api.php';

$html = '
	<html>
		<head>
			<title>Instagram (Does not deliver grandmothers instantaneously)</title>
			
			<style type="text/css">
				.thumbnail_box {
					border-bottom-style: solid;
					margin-bottom: 10px;
					cursor: pointer;
				}
				
				#modal_box_inner {
					top: 0;
					right: 0;
					bottom: 0;
					left: 0;
					z-index: 99999;
					margin-left: auto;
					margin-right: auto;
					width: 640px;
				}
				
				#modal_box_outer {
					position: fixed;
					top: 0;
					right: 0;
					bottom: 0;
					left: 0;
					background: rgba(0,0,0,0.8);
					z-index: 99998;
					display: none;
				}

			</style>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$(".thumbnail").click(function() {
						console.log("hello2");
						$("#modal_box_inner").html("<img src=" + $(this).attr("large_src") + " />");
						$("#modal_box_outer").show();
					});
					
					$("#modal_box_outer").click(function(e) {
						console.log("hello");
					    if ($(e.target).closest("#modal_box_inner").length === 0) {
        					$("#modal_box_outer").hide();
    					}
					});
				});
			</script>
		</head>
		<body>
			<div id="modal_box_outer">
				<div id="modal_box_inner">
				</div>
			</div>
';

foreach($result->data as $data) {
	$html .= '
		<div class="thumbnail_box">
			<img class="thumbnail" 
				src=' . $data->images->thumbnail->url . ' 
				large_src=' . $data->images->standard_resolution->url . ' 
			/>
			<p>' . $data->caption->text . '</p>
			<p><a href=' . $data->link . '>Link</a></p>
		</div>
	';
}

$html .= '
		</body>
	</html>
';

echo $html;
?>