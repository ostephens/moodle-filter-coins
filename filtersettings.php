<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

	$settings->add(new admin_setting_configtext('filter_coins_baseurl',
        get_string('baseurl', 'filter_coins'),
        get_string('configbaseurl', 'filter_coins'), '', PARAM_NOTAGS));

	$settings->add(new admin_setting_configtext('filter_coins_linkicon',
        get_string('linkicon', 'filter_coins'),
        get_string('configlinkicon', 'filter_coins'), '', PARAM_NOTAGS));

	$settings->add(new admin_setting_configtext('filter_coins_linkicon',
        get_string('linkalttext', 'filter_coins'),
        get_string('configlinkalttext', 'filter_coins'), '', PARAM_NOTAGS));
}
?>