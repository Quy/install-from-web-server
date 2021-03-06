<?php
/**
 * Joomla! Install From Web Server
 *
 * @copyright  Copyright (C) 2013 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\FileLayout;

/** @var AppsViewCategory $this */

?>
<div class="com-apps-container">
	<div class="row">
		<div class="col-sm-4 col-md-3">
			<?php echo (new FileLayout('apps.j4.category_sidebar'))->render($this->categories); ?>
		</div>
		<div class="col-sm-8 col-md-9">
			<?php echo (new FileLayout('apps.j4.simple_search'))->render(['orderby' => $this->orderby]); ?>
			<?php echo (new FileLayout('apps.j4.extensions_imagegrid'))->render(['extensions' => $this->extensions, 'breadcrumbs' => $this->breadcrumbs]); ?>
		</div>
	</div>
</div>
