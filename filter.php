<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Filter to find COinS (ContextObject in Span http://ocoins.info/) and create an OpenURL
 *
 * @package    filter
 * @subpackage coins
 * @copyright Owen Stephens  {@link http://ostephens.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class filter_coins extends moodle_text_filter {

    public function filter ($text) {
        global $CFG;
		if (strpos($text, 'z3988') === false && strpos($text, 'Z3988') === false) {
			//no COinS
			return $text;
		}
		/// There might be an COinS in here somewhere so continue ...
		$matches = array();

		/// regular expression to define a standard email string.
		$coinsregex = '<span class="[Zz]3988" title="([^"])"><\/span>';

		$text = preg_replace_callback($coinsregex, 'filter_coins_addlink', $text);

		return $text;
    }
}

function filter_coins_addlink($matches) {
    return $matches[0].'<a href="'.$CFG->filter_coins_baseurl.'?'.$matches[1].
				'">"<img alt="'.$CFG->filter_coins_linkalttext.'" src="'.$CFG->filter_coins_linkicon.'"></a>';
}
?>