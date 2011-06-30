<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2011
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    mysql_tools
 * @license    LGPL
 * @filesource
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('{frontend_legend}', '{legend_mysql_tools},mysql_tools_hide;{frontend_legend}', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);


/**
 * Fields
 */
// in contao 2.10 this extension is also available in the maintenance menu
if (version_compare('2.10', VERSION) < 1)
{
	$GLOBALS['TL_DCA']['tl_settings']['fields']['mysql_tools_hide'] = array
	(
		'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['mysql_tools_hide'],
		'inputType'		=> 'checkbox',
		'exclude'		=> true,
		'eval'			=> array('tl_class'=>'m12 w50')
	);
}
?>