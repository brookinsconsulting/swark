<?php
//
// Swark - extension for eZ Publish
// Author: Jan Kudlicka <jk@seeds.no>
// Copyright (C) 2008 Seeds Consulting AS, http://www.seeds.no/
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of version 2.0 of the GNU General
// Public License as published by the Free Software Foundation.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
// MA 02110-1301, USA.
//

class SwarkServerOperator extends SwarkOperator
{
    function __construct()
    {
        parent::__construct( 'server', 'variable_name' );
    }

    static function execute( $operatorValue, $namedParameters )
    {
        $variableName = strtoupper( $namedParameters['variable_name'] );
        if ( isset( $_SERVER[$variableName] ) )
        {
            return $_SERVER[$variableName];
        }
        else
        {
            eZDebug::writeDebug( "Server variable $variableName does not exist.", 'Server Operator' );
            return false;
        }
    }
}

?>