<?php

namespace Paranerd\ExternalLink\Plugin;

class TopmenuPlugin {
    public function afterGetHtml(\Magento\Theme\Block\Html\Topmenu $topmenu, $html) {
		// Opening
        $html .= "<li class=\"level0 nav-4 level-top parent ui-menu-item\">";

		// Main link
        $html .= "<a href=\"" . "https://google.de" . "\" class=\"level-top ui-corner-all\" aria-haspopup=\"true\" tabindex=\"-1\" role=\"menuitem\"><span class=\"ui-menu-icon ui-icon ui-icon-carat-1-e\"></span><span>" . __("External Link") . "</span></a>";
        $html .= "<ul class=\"level0 submenu ui-menu ui-widget ui-widget-content ui-corner-all\" role=\"menu\" aria-expanded=\"false\" style=\"display: none; top: 47px; left: -0.4375px;\" aria-hidden=\"true\">";

		// Sub-link 1
        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "https://aol.com" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("AOL") . "</span></a>";
        $html .= "</li>";

		// Sub-link 2
        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "https://yahoo.com" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("Yahoo") . "</span></a>";
        $html .= "</li>";

		// Sub-link 3
        $html .= "<li class=\"level1 nav-5-1 first ui-menu-item\" role=\"presentation\">";
        $html .= "<a href=\"" . "https://altavista.com" . "\" class=\"ui-corner-all\" tabindex=\"-1\" role=\"menuitem\"><span>" . __("Altavista") . "</span></a>";
        $html .= "</li>";

		// Closing
        $html .= "</ul>";
        $html .= "</li>";

        return $html;
    }
}