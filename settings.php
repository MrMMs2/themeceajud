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
 * Version details
 *
 * @package    theme
 * @subpackage ceajud
 * @copyright  2015 Léo Sanotos CEAJUD <leo.santos@cnj.jus.br>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$settings = null;
require_once __DIR__.'/libs/admin_confightmleditor.php';
defined('MOODLE_INTERNAL') || die;
if (is_siteadmin()) {

    $ADMIN->add('themes', new admin_category('theme_ceajud', 'CEAJUD'));

    $temp = new admin_settingpage('theme_ceajud_colour', get_string('coloursettings', 'theme_ceajud'));
    $temp->add(new admin_setting_heading('theme_ceajud_colour', get_string('coloursettingsheading', 'theme_ceajud'),
        format_text(get_string('colourdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/linkcolor';
    $title = get_string('linkcolor', 'theme_ceajud');
    $description = get_string('linkcolordesc', 'theme_ceajud');
    $default = '#037fbf';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    $name = 'theme_ceajud/linkhover';
    $title = get_string('linkhover', 'theme_ceajud');
    $description = get_string('linkhoverdesc', 'theme_ceajud');
    $default = '#037fbf';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/maincolor';
    $title = get_string('maincolor', 'theme_ceajud');
    $description = get_string('maincolordesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#037fbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/backcolor';
    $title = get_string('backcolor', 'theme_ceajud');
    $description = get_string('backcolordesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/buttoncolour';
    $title = get_string('buttoncolour', 'theme_ceajud');
    $description = get_string('buttoncolourdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#158cba', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/buttonhovercolour';
    $title = get_string('buttonhovercolour', 'theme_ceajud');
    $description = get_string('buttonhovercolourdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0084c2', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/rendereroverlaycolour';
    $title = get_string('rendereroverlaycolour', 'theme_ceajud');
    $description = get_string('rendereroverlaycolourdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#037fbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/rendereroverlayfontcolour';
    $title = get_string('rendereroverlayfontcolour', 'theme_ceajud');
    $description = get_string('rendereroverlayfontcolourdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/dividingline';
    $title = get_string('dividingline', 'theme_ceajud');
    $description = get_string('dividinglinedesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#1a557f', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/navbarborder';
    $title = get_string('navbarborder', 'theme_ceajud');
    $description = get_string('navbarborderdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#037FBF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/navbarhover';
    $title = get_string('navbarhover', 'theme_ceajud');
    $description = get_string('navbarhoverdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00569D', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_ceajud/breadcrumb';
    $title = get_string('breadcrumb', 'theme_ceajud');
    $description = get_string('breadcrumbdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b4bbbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_ceajud/activebreadcrumb';
    $title = get_string('activebreadcrumb', 'theme_ceajud');
    $description = get_string('activebreadcrumbdesc', 'theme_ceajud');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_header', get_string('headersettings', 'theme_ceajud'));
    $temp->add(new admin_setting_heading('theme_ceajud_header', get_string('headersettingsheading', 'theme_ceajud'),
        format_text(get_string('headerdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/sitetitle';
    $title = get_string('sitetitle', 'theme_ceajud');
    $description = get_string('sitetitledesc', 'theme_ceajud');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/logo';
    $title = get_string('logo', 'theme_ceajud');
    $description = get_string('logodesc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/alertbox';
    $title = get_string('alertbox', 'theme_ceajud');
    $description = get_string('alertboxdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_ceajud_usernav', get_string('usernavheading', 'theme_ceajud'),
        format_text(get_string('usernavdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));
    
    // Enable My.
    $name = 'theme_ceajud/enablemy';
    $title = get_string('enablemy', 'theme_ceajud');
    $description = get_string('enablemydesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Enable View Profile.
    $name = 'theme_ceajud/enableprofile';
    $title = get_string('enableprofile', 'theme_ceajud');
    $description = get_string('enableprofiledesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_ceajud/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_ceajud');
    $description = get_string('enableeditprofiledesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_ceajud/enablecalendar';
    $title = get_string('enablecalendar', 'theme_ceajud');
    $description = get_string('enablecalendardesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_ceajud/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_ceajud');
    $description = get_string('enableprivatefilesdesc', 'theme_ceajud');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_ceajud/enablebadges';
    $title = get_string('enablebadges', 'theme_ceajud');
    $description = get_string('enablebadgesdesc', 'theme_ceajud');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $temp->add(new admin_setting_heading('theme_ceajud_navbar', get_string('navbarsettingsheading', 'theme_ceajud'),
        format_text(get_string('navbardesc', 'theme_ceajud'), FORMAT_MARKDOWN)));
    
    $name = 'theme_ceajud/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_ceajud/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_ceajud', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_ceajud/enableevents';
    $title = get_string('events', 'theme_ceajud');
    $description = get_string('enableeventsdesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_ceajud/enablemysites';
    $title = get_string('mysites', 'theme_ceajud');
    $description = get_string('enablemysitesdesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_ceajud/enablethiscourse';
    $title = get_string('thiscourse', 'theme_ceajud');
    $description = get_string('enablethiscoursedesc', 'theme_ceajud');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable help link.
    $name = 'theme_ceajud/enablehelp';
    $title = get_string('enablehelp', 'theme_ceajud');
    $description = get_string('enablehelpdesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_ceajud/helptarget';
    $title = get_string('helptarget', 'theme_ceajud');
    $description = get_string('helptargetdesc', 'theme_ceajud');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_ceajud'),
        '_self' => get_string('targetsamewindow', 'theme_ceajud'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);
    $temp->add($setting);

    $name = 'theme_ceajud/toolsmenu';
    $title = get_string('toolsmenu', 'theme_ceajud');
    $description = get_string('toolsmenudesc', 'theme_ceajud');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_frontpage_blocks', get_string('frontpageblocksettings', 'theme_ceajud'));

    $name = 'theme_ceajud/infobox';
    $title = get_string('infobox', 'theme_ceajud');
    $description = get_string('infoboxdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/infobox2';
    $title = get_string('infobox2', 'theme_ceajud');
    $description = get_string('infobox2desc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_ceajud_marketing', get_string('marketingsettingsheading', 'theme_ceajud'),
        format_text(get_string('marketingdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/market1';
    $title = get_string('market1', 'theme_ceajud');
    $description = get_string('market1desc', 'theme_ceajud');
    $default = '';
    $setting = new ceajud_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/market2';
    $title = get_string('market2', 'theme_ceajud');
    $description = get_string('market2desc', 'theme_ceajud');
    $setting = new ceajud_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/market3';
    $title = get_string('market3', 'theme_ceajud');
    $description = get_string('market3desc', 'theme_ceajud');
    $setting = new ceajud_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/market4';
    $title = get_string('market4', 'theme_ceajud');
    $description = get_string('market4desc', 'theme_ceajud');
    $setting = new ceajud_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_frontpage_slider', get_string('frontpageslidersettings', 'theme_ceajud'));

    $temp->add(new admin_setting_heading('theme_ceajud_slideshow', get_string('slideshowsettingsheading', 'theme_ceajud'),
        format_text(get_string('slideshowdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/p1';
    $title = get_string('p1', 'theme_ceajud');
    $description = get_string('p1desc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/p1url';
    $title = get_string('p1url', 'theme_ceajud');
    $description = get_string('p1urldesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_ceajud/p1cap';
    $title = get_string('p1cap', 'theme_ceajud');
    $description = get_string('p1capdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/p2';
    $title = get_string('p2', 'theme_ceajud');
    $description = get_string('p2desc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/p2url';
    $title = get_string('p2url', 'theme_ceajud');
    $description = get_string('p2urldesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_ceajud/p2cap';
    $title = get_string('p2cap', 'theme_ceajud');
    $description = get_string('p2capdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/p3';
    $title = get_string('p3', 'theme_ceajud');
    $description = get_string('p3desc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/p3url';
    $title = get_string('p3url', 'theme_ceajud');
    $description = get_string('p3urldesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_ceajud/p3cap';
    $title = get_string('p3cap', 'theme_ceajud');
    $description = get_string('p3capdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/p4';
    $title = get_string('p4', 'theme_ceajud');
    $description = get_string('p4desc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/p4url';
    $title = get_string('p4url', 'theme_ceajud');
    $description = get_string('p4urldesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_ceajud/p4cap';
    $title = get_string('p4cap', 'theme_ceajud');
    $description = get_string('p4capdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/p5';
    $title = get_string('p5', 'theme_ceajud');
    $description = get_string('p5desc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/p5url';
    $title = get_string('p5url', 'theme_ceajud');
    $description = get_string('p5urldesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_ceajud/p5cap';
    $title = get_string('p5cap', 'theme_ceajud');
    $description = get_string('p5capdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_frontpage_courses', get_string('frontpagecoursesettings', 'theme_ceajud'));
    $temp->add(new admin_setting_heading('theme_ceajud_frontpage_courses', get_string('frontpagesettingsheading', 'theme_ceajud'),
        format_text(get_string('frontpagedesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_ceajud');
    $description = get_string('frontpagerendererdesc', 'theme_ceajud');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_ceajud'),
        2 => get_string('frontpagerendereroption2', 'theme_ceajud'),
        3 => get_string('frontpagerendereroption3', 'theme_ceajud'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_ceajud');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_ceajud');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_ceajud/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_ceajud');
    $description = get_string('tilesshowcontactsdesc', 'theme_ceajud');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_ceajud/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_ceajud');
    $description = get_string('tilesshowallcontactsdesc', 'theme_ceajud');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_ceajud/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_ceajud');
    $description = get_string('tilescontactstitledesc', 'theme_ceajud');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_layout', get_string('layoutsettings', 'theme_ceajud'));
    $temp->add(new admin_setting_heading('theme_ceajud_layout', get_string('layoutsettingsheading', 'theme_ceajud'),
        format_text(get_string('layoutdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/blockside';
    $title = get_string('blockside', 'theme_ceajud');
    $description = get_string('blocksidedesc', 'theme_ceajud');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('rightblocks', 'theme_ceajud'),
            1 => get_string('leftblocks', 'theme_ceajud'),
        ));
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_footer', get_string('footersettings', 'theme_ceajud'));
    $temp->add(new admin_setting_heading('theme_ceajud_footer', get_string('footersettingsheading', 'theme_ceajud'),
        format_text(get_string('footerdesc', 'theme_ceajud'), FORMAT_MARKDOWN)));

    $name = 'theme_ceajud/showfooterblocks';
    $title = get_string('showfooterblocks', 'theme_ceajud');
    $description = get_string('showfooterblocksdesc', 'theme_ceajud');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_ceajud/footer1header';
    $title = get_string('footer1header', 'theme_ceajud');
    $description = get_string('footer1desc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer1content';
    $title = get_string('footer1content', 'theme_ceajud');
    $description = get_string('footer1contentdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer2header';
    $title = get_string('footer2header', 'theme_ceajud');
    $description = get_string('footer2desc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer2content';
    $title = get_string('footer2content', 'theme_ceajud');
    $description = get_string('footer2contentdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer3header';
    $title = get_string('footer3header', 'theme_ceajud');
    $description = get_string('footer3desc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer3content';
    $title = get_string('footer3content', 'theme_ceajud');
    $description = get_string('footer3contentdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer4header';
    $title = get_string('footer4header', 'theme_ceajud');
    $description = get_string('footer4desc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footer4content';
    $title = get_string('footer4content', 'theme_ceajud');
    $description = get_string('footer4contentdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/footnote';
    $title = get_string('footnote', 'theme_ceajud');
    $description = get_string('footnotedesc', 'theme_ceajud');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);

    $temp = new admin_settingpage('theme_ceajud_generic', get_string('customcssjssettings', 'theme_ceajud'));
    $temp->add(new admin_setting_heading('theme_ceajud_generic', get_string('genericsettingsheading', 'theme_ceajud'),
        format_text(get_string('genericsettingsdescription', 'theme_ceajud'), FORMAT_MARKDOWN)));

    // Custom CSS file.
    $name = 'theme_ceajud/customcss';
    $title = get_string('customcss', 'theme_ceajud');
    $description = get_string('customcssdesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_ceajud/jssection';
    $title = get_string('jssection', 'theme_ceajud');
    $description = get_string('jssectiondesc', 'theme_ceajud');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_ceajud/fsize';
    $title = get_string('fsize', 'theme_ceajud');
    $description = get_string('fsizedesc', 'theme_ceajud');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);

    $ADMIN->add('theme_ceajud', $temp);
}
