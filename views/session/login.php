<?php

/**
 * Session login view.
 *
 * The login/logout pages are a bit special, so the HTML IDs here have
 * been standardized for theme developers.
 *
 * @category   apps
 * @package    base
 * @subpackage views
 * @author     ClearFoundation <developer@clearfoundation.com>
 * @copyright  2011 ClearFoundation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License version 3 or later
 * @link       http://www.clearfoundation.com/docs/developer/apps/base/
 */

///////////////////////////////////////////////////////////////////////////////
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.  
//
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
// Load dependencies
///////////////////////////////////////////////////////////////////////////////

$this->lang->load('base');

$options = array('ip' => $connect_ip);

echo login_form($redirect, $languages, $code, $login_failed, $options);
?>

<style>
    .center {
        margin-top: 12px;
        margin-bottom: 12px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 50%;
    }
</style>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.getElementsByClassName("ci-ClearOS");
        var logo = elements[0];
        
        console.log(logo);
    
        var chemin = "base/image";
    
        var elem = document.createElement("img");
        elem.setAttribute("src", image);
        elem.setAttribute("height", "100");
        elem.setAttribute("width", "100");
        elem.setAttribute("alt", "Logo");
        elem.classList.add("center");
        
        logo.replaceWith(elem);
    });
    
</script>

