<?php
/**
 * @file
 * Display jwplayer in a colorbox.
 *
 * Variables available:
 * - $html_id: Unique id generated for each video.
 * - $width: Width of the video player.
 * - $height: Height of the video player.
 * - $sources: An array of files to be played.
 * - $jw_player_inline_js_code: JSON data with configuration settings for the video player.
 * - $image: URL to an image to be used for the poster (ie. preview image) for this video.
 *
 * @see pega_media_url_video_player().
 */
$pitem = $variables['player']['playlist'][0];
?>
<div class="jwplayer-video <?php print $variables['player']['html_id']; ?>">
  <video id="<?php print $variables['player']['html_id']; ?>" width="<?php print $variables['player']['width']; ?>" controls="controls" preload="none"<?php if (isset($variables['player']['image'])) : ?> poster="<?php print $variables['player']['image']; ?>"<?php endif ?>>
    <?php foreach ($pitem['sources'] as $source) { ?>
      <source src="<?php print $source['file']; ?>"<?php if (isset($source['filemime'])): ?> type="<?php print $source['filemime'] ?>"<?php endif ?> />
    <?php }; ?>
  </video>
</div>
<script type="text/javascript">
  jwplayer('<?php print $variables['player']['html_id']; ?>').setup(<?php print $variables['player']['jw_player_inline_js_code']; ?>);
</script>