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

class ModuleMySqlTools extends BackendModule
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_module_mysql_tools';


	/**
	 * All tables
	 * @var array
	 */
	protected $arrTables = array();


	/**
	 * Query options
	 * @var string
	 */
	protected $strOptions;


	/**
	 * Generate module
	 */
	protected function compile()
	{
		// pass all language strings to the template
		$this->loadLanguageFile('mysql_tools');

		$this->Template->headline = $GLOBALS['TL_LANG']['mysql_tools']['headline'];
		$this->Template->description = $GLOBALS['TL_LANG']['mysql_tools']['description'];
		$this->Template->warning = $GLOBALS['TL_LANG']['mysql_tools']['warning'];
		$this->Template->submit = $GLOBALS['TL_LANG']['mysql_tools']['submit'];
		$this->Template->check = $GLOBALS['TL_LANG']['mysql_tools']['check'];
		$this->Template->analyze = $GLOBALS['TL_LANG']['mysql_tools']['analyze'];
		$this->Template->checksum = $GLOBALS['TL_LANG']['mysql_tools']['checksum'];
		$this->Template->optimize = $GLOBALS['TL_LANG']['mysql_tools']['optimize'];
		$this->Template->repair = $GLOBALS['TL_LANG']['mysql_tools']['repair'];
		$this->Template->title = specialchars($GLOBALS['TL_LANG']['MSC']['backBT']);
		$this->Template->href = $this->getReferer(true);
		$this->Template->button = $GLOBALS['TL_LANG']['MSC']['backBT'];


		// check if we have the mode, only in this case run the checks
		if ($this->Input->post('mode') != '')
		{
			$arrResult = array();
			$this->arrTables = $this->Database->listTables();

			// perform the requested action
			switch ($this->Input->post('mode'))
			{
				case 'check':
					$arrResult = $this->performCheck();
					break;

				case 'analyze':
					$arrResult = $this->performAnalyze();
					break;
				
				case 'checksum':
					$arrResult = $this->performChecksum();
					break;
				
				case 'optimize':
					$arrResult = $this->performOptimize();
					break;

				case 'repair':
					$arrResult = $this->performRepair();
					break;
			}


			// checksum has a special return value
			if ($this->Input->post('mode') == 'checksum')
			{
				$strTable = '<table id="tl_taskcenter"><thead><tr><th>' . $GLOBALS['TL_LANG']['mysql_tools']['table'] . '</th><th>' . $GLOBALS['TL_LANG']['mysql_tools']['checksum'] . '</th></tr></thead><tbody>';

				foreach ($arrResult as $v)
				{
					$strTable .= '<tr><td>' . preg_replace('#[^\.]+\.#', '', $v['Table']) .'</td><td>' . $v['Checksum'] .'</td></tr>';
				}
			}
			else
			{
				$strTable = '<table id="tl_taskcenter"><thead><tr><th>' . $GLOBALS['TL_LANG']['mysql_tools']['table'] . '</th><th>' . $GLOBALS['TL_LANG']['mysql_tools']['op'] . '</th><th>' . $GLOBALS['TL_LANG']['mysql_tools']['msg_type'] . '</th><th>' . $GLOBALS['TL_LANG']['mysql_tools']['msg_text'] . '</th></tr></thead><tbody>';

				foreach ($arrResult as $v)
				{
					$strTable .= '<tr><td>' . preg_replace('#[^\.]+\.#', '', $v['Table']) .'</td><td>' . $v['Op'] .'</td><td>' . $v['Msg_type'] .'</td><td>' . $v['Msg_text'] .'</td></tr>';
				}
			}

			$strTable .= '</tbody></table>';
			$this->Template->table = $strTable;
		}
	}


	/**
	 * Perform "check table"
	 * @return array
	 */
	protected function performCheck()
	{
		$arrReturn = array();
		foreach ($this->arrTables as $v)
		{
			$arrReturn[] =$this->Database->query('CHECK TABLE ' . $v . ' ' . $this->strOptions)->fetchAssoc();
		}

		return $arrReturn;
	}


	/**
	 * Perform "analyze table"
	 * @return array
	 */
	protected function performAnalyze()
	{
		$arrReturn = array();
		foreach ($this->arrTables as $v)
		{
			$arrReturn[] =$this->Database->query('ANALYZE TABLE ' . $v . ' ' . $this->strOptions)->fetchAssoc();
		}

		return $arrReturn;
	}


	/**
	 * Perform "checksum table"
	 * @return array
	 */
	protected function performChecksum()
	{
		$arrReturn = array();
		foreach ($this->arrTables as $v)
		{
			$arrReturn[] =$this->Database->query('CHECKSUM TABLE ' . $v . ' ' . $this->strOptions)->fetchAssoc();
		}

		return $arrReturn;
	}


	/**
	 * Perform "optimize table"
	 * @return array
	 */
	protected function performOptimize()
	{
		$arrReturn = array();
		foreach ($this->arrTables as $v)
		{
			$arrReturn[] =$this->Database->query('OPTIMIZE TABLE ' . $v . ' ' . $this->strOptions)->fetchAssoc();
		}

		return $arrReturn;
	}


	/**
	 * Perform "repair table"
	 * @return array
	 */
	protected function performRepair()
	{
		$arrReturn = array();
		foreach ($this->arrTables as $v)
		{
			$arrReturn[] =$this->Database->query('REPAIR TABLE ' . $v . ' ' . $this->strOptions)->fetchAssoc();
		}

		return $arrReturn;
	}
}
?>