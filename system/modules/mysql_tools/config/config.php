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
 * Back end modules
 */
//TODO: fix this
if ($GLOBALS['TL_CONFIG']['mysql_tools_hide'] == 1 || version_compare('2.10', '2.10') == 1)
{
	$GLOBALS['BE_MOD']['system']['mysql_tools'] = array
	(
		'callback'		=> 'ModuleMySqlTools',
		'icon'			=> 'system/modules/mysql_tools/html/icon_mysql_tools.png',
		'stylesheet'	=> 'system/modules/mysql_tools/html/mysql_tools.css'
	);
}

?>