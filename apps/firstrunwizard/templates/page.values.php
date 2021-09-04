<?php
/**
 * @copyright Copyright (c) 2018 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var \OCP\Defaults $theme
 */
?>

<div class="page" data-title="<?php p($l->t('A safe home for all your data')); ?>" data-subtitle="">
	<div class="content content-values">
		<p>
			<?php p($l->t('Introducing MaGICXHub, the central hub of your digital life. 
			MaGICXHub puts your data at your fingertips, under your control. 
			Share and collaborate on documents, 
			send and receive email, manage your contacts and calendar, 
			have chats and video chats without data leaks, 
			make an online conference with your worker,
			make a virtual classroom for lecturing. 
			All built from the ground up.
			Everything you need to get anything done, now in one place.')); ?>
		</p>

		<ul id="wizard-values">
			<li>
				<span class="icon-files"></span>
				<p><?php p($l->t('Files offers an on-premise Universal File Access and sync platform with powerful collaboration capabilities within devices.')); ?></p>
			</li>
			<li>
				<span class="icon-category-dashboard"></span>
				<p><?php p($l->t('Talk delivers on-premises, private audio/video conferencing and text chat through browser and mobile interfaces with integrated screen sharing and SIP integration.')); ?></p>
			</li>
			<li>
				<span class="icon-category-social"></span>
				<p><?php p($l->t('Groupware integrates Calendar, Contacts, Mail and other productivity features to help teams get their work done faster, easier and on your terms.')); ?></p>
			</li>
			<li>
				<span class="icon-stackexchange"></span>
				<p><?php p($l->t('Collaborative platform in virtual workspace to facilitating communication and personal interaction in any project work.')); ?></p>
			</li>
			<li>
				<span class="icon-desktop"></span>
				<p><?php p($l->t('Combine business and education virtual conference into a single platform. Experience secure, productive conference from wherever you are. Lecture from any part of the world using classroom features.')); ?></p>
			</li>
		</ul>

		<p class="details-link"><a href="<?php p($theme->getBaseUrl()); ?>" target="_blank" rel="noreferrer noopener"><?php p($l->t('Learn more about %s', $theme->getName())); ?></a></p>
		<div style="text-align: center; color: var(--text-maxcontrast);">
			<p><?php p($l->t('This MaGICXHub is on version %s', [ \OC_Util::getVersionString() ])); ?></p>
		</div>
	</div>
</div>

