<?php
	$musicPath = 'lib/Public/Music/';
	$file = $_GET['file'];
	$ok = $file && is_file(dirname(__FILE__).'/'.$musicPath.$file);
	$title = $_GET['title'] ? $_GET['title'] : null;
	$description = 'A song by the Portland, OR band Dadz';
	$type = 'Song';
?>
<?php include('lib/Private/Partials/head.php'); ?>
<body class="audio">
	<div class="audio-wrap" style="padding: 150px 0; margin: 0 auto; width: 360px;">
		<?php if($ok): ?>
			<div id="jquery_jplayer_1" class="jp-jplayer"></div>
			<div id="jp_container_1" class="jp-audio">
				<div class="jp-type-single">
					<div id="jp_interface_1" class="jp-interface">
						<ul class="jp-controls">
							<li><a href="#" class="jp-play" tabindex="1">play</a></li>
							<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
							<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
							<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
						</ul>
						<div class="jp-progress-container">
							<div class="jp-progress">
								<div class="jp-seek-bar">
									<div class="jp-play-bar"></div>
								</div>
							</div>
						</div>
						<div class="jp-volume-bar-container">
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
					</div>
					<div class="jp-no-solution">
						<h4>Browser Not Supported</h4>
						<p>Your browser doesn't support the media player that's supposed to appear here.  Go ahead and <a target="blank" href="lib/Public/Music/<?php echo $file ?>">download the file directly</a> instead.</p>
					</div>
				</div>
			</div>
		<?php else: ?>
			<div style="color: #333; width: 300px; text-align: center; padding-top: 20px;"><p>No audio found</p></div>
		<?php endif ?>
	</div>
	<?php include('lib/Private/Partials/foot.php'); ?>
	<script type="text/javascript">
	//<![CDATA[
	$(function(){
		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				$(this).jPlayer("setMedia", {
					mp3:"lib/Public/Music/<?php echo $file ?>"
				}).jPlayer('play');
			},
			swfPath: "lib/Public/Javascript/libs/Jplayer.swf",
			supplied: "mp3",
			wmode: "transparent"
		});
	});
	//]]>
	</script>
</body>
</html>