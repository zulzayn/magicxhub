<?php
\OC_Util::addStyle('settings', 'help');
?>
<div id="app-navigation">
	<ul>
		<li>
			<a style="padding: 0 12px 0 40px;" class="icon-user <?php if ($_['mode'] === 'user') {
	p('active');
} ?>"
				href="<?php print_unescaped($_['urlUserDocs']); ?>">
				<?php p($l->t('User documentation')); ?>
			</a>
		</li>
	<?php if ($_['admin']) { ?>
		<li>
			<a style="padding: 0 12px 0 40px;" class="icon-user-admin <?php if ($_['mode'] === 'admin') {
	p('active');
} ?>"
				href="<?php print_unescaped($_['urlAdminDocs']); ?>">
				<?php p($l->t('Administrator documentation')); ?>
			</a>
		</li>
	<?php } ?>

		<li>
			<a style="padding: 0 12px 0 40px;" href="https://docs.nextcloud.com" class="icon-category-office" target="_blank" rel="noreferrer noopener">
				<?php p($l->t('Documentation')); ?> ↗
			</a>
		</li>
		<li>
			<a style="padding: 0 12px 0 40px;" href="https://help.nextcloud.com" class="icon-comment" target="_blank" rel="noreferrer noopener">
				<?php p($l->t('Forum')); ?> ↗
			</a>
		</li>
</div>

<div id="app-content" class="help-includes">
	<iframe src="<?php print_unescaped($_['url']); ?>" class="help-iframe">
	</iframe>
</div>
