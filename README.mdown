moodle-filter-coins
===================

by Owen Stephens, owen@ostephens.com

moodle-filter-coins is a filter for the Moodle VLE/LMS which looks for COinS (http://coins.org), extracts the 'context object' and appends it to a 'base_url' to form an OpenURL. The filter has three setting:

* filter_coins_baseurl. This is the base_url which will be appended to the COinS context object to make the OpenURL. The default value is http://worldcatlibraries.org/registry/gateway, which is a service provided by OCLC. If this is used as the base_url, the OCLC service will try to work out the appropriate base_url for the user based on their IP address. If no resolver can be found, a message will be briefly displayed and then the user will be directed to an appropriate record in WorldCat if possible
* filter_coins_linkicon. It is usual for an OpenURL link to be signified with an icon. The URL for the icon should be entered in this setting
* filter_coins_linkalttext. The alt text for the icon.

The point of the filter is to automatically link from citations to the full-text of articles online, using the OpenURL mechanism. One of the easiest ways to get COinS data into a Moodle page is to drag and drop a citation from the Zotero citation management software into the Moodle html editor. As long as Zotero is configured to 'Copy as HTML' in the 'Quick Copy' setting, this will include a COinS and formatted reference when you drag and drop into an HTML editor.