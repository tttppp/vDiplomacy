<?php
/*
	Copyright (C) 2012 Oliver Auth / sqrg

	This file is part of the NorthSeaWars variant for webDiplomacy

	The NorthSeaWars variant for webDiplomacy is free software: you can redistribute
	it and/or modify it under the terms of the GNU Affero General Public License
	as published by the Free Software Foundation, either version 3 of the License,
	or (at your option) any later version.

	The NorthSeaWars variant for webDiplomacy is distributed in the hope that it will
	be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of 
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with webDiplomacy. If not, see <http://www.gnu.org/licenses/>.
*/


defined('IN_CODE') or die('This script can not be run by itself.');

// Custom Unit-Icons in javascript-code
class CustomIcons_OrderInterface extends OrderInterface
{
	protected function jsLoadBoard()
	{
		global $Variant;
		parent::jsLoadBoard();
		if( $this->phase!='Builds' ) {
			libHTML::$footerIncludes[] = '../variants/'.$Variant->name.'/resources/iconscorrect.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadOrdersPhase();','loadOrdersPhase();IconsCorrect("'.$Variant->name.'");', $script);
		}
	}
}

class OneWay_OrderInterface extends CustomIcons_OrderInterface
{
	protected function jsLoadBoard()
	{
		parent::jsLoadBoard();

		if( $this->phase=='Diplomacy' )
		{
			libHTML::$footerIncludes[] = '../variants/NorthSeaWars/resources/oneway.js';
			foreach(libHTML::$footerScript as $index=>$script)
				libHTML::$footerScript[$index]=str_replace('loadOrdersPhase();','loadOrdersPhase();OneWay_loadOrdersPhase();', $script);
		}
	}
}

class NorthSeaWarsVariant_OrderInterface extends OneWay_OrderInterface {}
