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
 * MySQL Tools (Thanks to ciaobello and _html_)
 */
$GLOBALS['TL_LANG']['mysql_tools']['headline'] = 'MySQL Tools';
$GLOBALS['TL_LANG']['mysql_tools']['description'] = 'With the MySQL Tools for Contao you can optimize, maintain or repair your database when needed. All maintenance-commands are MySQL-internal tools and will be done with queries for which you need a working database connection.';
$GLOBALS['TL_LANG']['mysql_tools']['warning'] = 'Please be aware of damage and irreparable loss of data by improper usage of this extension. Results of improper usage can end up in faults or a defect Contao Website, so if you are not familiar with table-maintanance & sql you should not use this extension or read <a href="http://dev.mysql.com/doc/refman/5.1/en/table-maintenance-sql.html">MySQL Documentation</a> first!';
$GLOBALS['TL_LANG']['mysql_tools']['submit'] = 'Go';
$GLOBALS['TL_LANG']['mysql_tools']['check'] = 'check';
$GLOBALS['TL_LANG']['mysql_tools']['analyze'] = 'analyze';
$GLOBALS['TL_LANG']['mysql_tools']['checksum'] = 'checksum';
$GLOBALS['TL_LANG']['mysql_tools']['optimize'] = 'optimize';
$GLOBALS['TL_LANG']['mysql_tools']['repair'] = 'repair';
$GLOBALS['TL_LANG']['mysql_tools']['table'] = 'Table';
$GLOBALS['TL_LANG']['mysql_tools']['op'] = 'Operation';
$GLOBALS['TL_LANG']['mysql_tools']['msg_type'] = 'Message type';
$GLOBALS['TL_LANG']['mysql_tools']['msg_text'] = 'Message';
?>