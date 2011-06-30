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
 * MySQL Tools
 */
$GLOBALS['TL_LANG']['mysql_tools']['headline'] = 'MySQL Tools';
$GLOBALS['TL_LANG']['mysql_tools']['description'] = 'Mit den MySQL Tools für Contao können Sie ihre Datenbank warten, oprimieren oder im Notfall auch reparieren. Alle Wartungsbefehle sind MySQL interne Tools und werden über Query\'s angesprochen. Daher benötigen Sie eine funktionierende Datenbankverbindung um den mit MySQLTools arbeiten zu können.';
$GLOBALS['TL_LANG']['mysql_tools']['warning'] = 'Bitte beachten Sie, dass bei falscher Bedienung dieser Extension unter Umständen irreperabele Schäden an der Datenbank und somit an Ihrer Contao Webseite entstehen können. Wenn Sie sich nicht mit Datenbankwartung und SQL auskennen, sollten sie die Erweiterung nicht einsetzen und zuerst die Dokumentation lesen: <a href="http://dev.mysql.com/doc/refman/5.1/de/table-maintenance-sql.html">MySQL Dokumentation zur Tabellenwartung</a>';
$GLOBALS['TL_LANG']['mysql_tools']['submit'] = 'Los';
$GLOBALS['TL_LANG']['mysql_tools']['check'] = 'Prüfen (check)';
$GLOBALS['TL_LANG']['mysql_tools']['analyze'] = 'Analysieren (analyze)';
$GLOBALS['TL_LANG']['mysql_tools']['checksum'] = 'Prüfsumme (checksum)';
$GLOBALS['TL_LANG']['mysql_tools']['optimize'] = 'optimieren (opimize)';
$GLOBALS['TL_LANG']['mysql_tools']['repair'] = 'reparieren (repair)';
$GLOBALS['TL_LANG']['mysql_tools']['table'] = 'Tabelle';
$GLOBALS['TL_LANG']['mysql_tools']['op'] = 'Operation';
$GLOBALS['TL_LANG']['mysql_tools']['msg_type'] = 'Art der Meldung';
$GLOBALS['TL_LANG']['mysql_tools']['msg_text'] = 'Meldung';
?>