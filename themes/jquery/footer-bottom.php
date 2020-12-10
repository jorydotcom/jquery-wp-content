<?php
	$project = preg_replace( '/^.*?([^.]+)\.[^.]+$/', '$1', JQUERY_LIVE_DOMAIN );

	$links = array(
		'Learning Center' => array(
			'icon' => 'pencil',
			'url' => 'https://learn.jquery.com/'
		),
		'Forum' => array(
			'icon' => 'group',
			'url' => 'https://forum.jquery.com/',
		),
		'API' => array(
			'icon' => 'wrench',
			'url' => 'https://api.' . $project . '.com/'
		),
		'Twitter' => array(
			'icon' => 'twitter',
			'url' => 'https://twitter.com/jquery'
		),
		'IRC' => array(
			'icon' => 'comments',
			'url' => 'https://irc.jquery.org/'
		),
		'GitHub' => array(
			'icon' => 'github',
			'url' => 'https://github.com/jquery'
		)
	);

	switch ( $project ) {
	case 'jqueryui':
		$links[ 'Forum' ][ 'url' ] = 'https://forum.jquery.com/using-jquery-ui/';
		$links[ 'Twitter' ][ 'url' ] = 'https://twitter.com/jqueryui';
		break;
	case 'jquerymobile':
		$links[ 'Forum' ][ 'url' ] = 'https://forum.jquery.com/jquery-mobile/';
		$links[ 'Twitter' ][ 'url' ] = 'https://twitter.com/jquerymobile';
		break;
	case 'qunitjs':
		$links[ 'Forum' ][ 'url' ] = 'https://forum.jquery.com/qunit-and-testing/';
		$links[ 'Twitter' ][ 'url' ] = 'https://twitter.com/qunitjs';
		break;
	}
?>

<div id="legal">
	<ul class="footer-site-links">
	<?php foreach ( $links as $title => $link ) : ?>
		<li><a class="icon-<?php echo $link[ 'icon' ]; ?>" href="<?php echo $link[ 'url' ]; ?>"><?php echo $title; ?></a></li>
	<?php endforeach ?></ul>
	<p class="copyright">
		Copyright <?php echo date('Y'); ?> <a href="https://openjsf.org/">OpenJS Foundation</a> and jQuery contributors. All rights reserved. See <a href="https://jquery.org/license/">jQuery License</a> for more information. The <a href="https://openjsf.org/">OpenJS Foundation</a> has registered trademarks and uses trademarks. For a list of trademarks of the <a href="https://openjsf.org/">OpenJS Foundation</a>, please see our <a href="https://trademark-policy.openjsf.org/">Trademark Policy</a> and <a href="https://trademark-list.openjsf.org/">Trademark List</a>. Trademarks and logos not indicated on the <a href="https://trademark-list.openjsf.org/">list of OpenJS Foundation trademarks</a> are trademarks™ or registered® trademarks of their respective holders. Use of them does not imply any affiliation with or endorsement by them. OpenJS Foundation <a href="https://terms-of-use.openjsf.org/">Terms of Use</a>, <a href="https://privacy-policy.openjsf.org/">Privacy</a>, and <a href="https://www.linuxfoundation.org/cookies">Cookie</a> Policies also apply.
		<span class="sponsor-line"><a href="https://www.digitalocean.com" class="do-link">Web hosting by Digital Ocean</a> | <a href="https://www.stackpath.com" class="sp-link">CDN by StackPath</a></span>
	</p>
</div>

<?php
unset( $project, $links );
