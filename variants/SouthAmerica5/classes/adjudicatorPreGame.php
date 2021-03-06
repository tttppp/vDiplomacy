<?php
/*
	Copyright (C) 2010 Oliver Auth

	This file is part of the South America 5-Player variant for webDiplomacy

	The South America 5-Player variant for webDiplomacy" is free software:
	you can redistribute it and/or modify it under the terms of the GNU Affero
	General Public License as published by the Free Software Foundation, either 
	version 3 of the License, or (at your option) any later version.

	The South America 5-Player variant for webDiplomacy is distributed in the hope
	that it will be useful, but WITHOUT ANY WARRANTY; without even the implied 
	warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with webDiplomacy.  If not, see <http://www.gnu.org/licenses/>.

*/

defined('IN_CODE') or die('This script can not be run by itself.');

class SouthAmerica5Variant_adjudicatorPreGame extends adjudicatorPreGame {

	protected $countryUnits = array(
		'Argentina'	=> array('Buenos Aires'=>'Fleet', 'Santa Fe' =>'Army' , 'Mar del Plata' =>'Army' ),
		'Brazil'	=> array('Belem'       =>'Fleet', 'Manaus'   =>'Army' , 'Rio de Janeiro'=>'Army' ),
		'Chile'		=> array('Antofagasta' =>'Army' , 'Santiago' =>'Army' , 'Concepcion'    =>'Fleet'),
		'Colombia'	=> array('Medellin'    =>'Army' , 'Bogota'   =>'Army' , 'Barranquilla'  =>'Fleet'),
		'Peru'		=> array('Chiclayo'    =>'Army' , 'Lima'     =>'Fleet', 'Arequipa'      =>'Army' )
	);

}

?>
