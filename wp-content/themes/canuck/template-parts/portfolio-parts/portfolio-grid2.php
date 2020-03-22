<?php
/**
 * Canuck Portfolio Four Column template part
 *
 * This template part is called by template-portfolio-side.php or template-portfolio.php
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

echo '<div class="portfolio-grid-2">';
	get_template_part( '/template-parts/portfolio-parts/portfolio', 'grid' );
echo '</div>';
echo '<div class="clearfix" ></div>';
