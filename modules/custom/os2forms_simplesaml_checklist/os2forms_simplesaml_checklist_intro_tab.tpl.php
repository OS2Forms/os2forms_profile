<?php

/**
 * @file
 * Default theme implementation for the OS2Forms SimpleSAML Checklist "Intro" tab.
 *
 * @see template_preprocess()
 * @see template_preprocess_os2forms_simplesaml_checklist_intro_tab()
 * @see template_process()
 */
?>
<h3>How to use the OS2Forms SimpleSAML Checklist</h3>
<p>Please read these instructions to install and configure SimpleSAML integration with Drupal.</p>

<h4>Important warning</h4>
<p>Clicking the checkboxes does not make your site SimpleSAML ready, instead it helps to set it up by providing step by step guidelines. Follow each step carefully and only mark it done when you tested it.</p>

<h4>Getting started</h4>
<p>Each time you open the checklist, it will attempt to check if any tasks have already been completed. For example, if you already have HTTPS enabled then that item will be checked. You still need to click "Save" to save the progress.</p>
<p>The best way to proceed is to start at the top and work your way through each tab until you're done, clicking save after each completed item.</p>
<p>Please note, that not all of the checkboxes are checked automatically, meaning that if a task has been done by you and tested, it's your responsibility to mark the checkbox as done. The checkboxes that support autocheck are marked with <i>(auto)</i> suffix</p>

<h4>How it's organized</h4>
<p>The sections are organized in order they are expected to be done. The tasks in each section also ordered based on their weight.</p>
<ul>
  <li><strong>Install SimpleSAMLphp:</strong> Section for installing and configuring SimpleSAMLphp library. This is a third party tool that does the actual job.</li>
  <li><strong>Install simplesamlphp_auth module:</strong> Section for installing and configuring Drupal contrib module that does the integration between Drupal and SimpleSAMLphp installation.</li>
  <li><strong>HTTPS certificate:</strong> Section for enabling HTTPS for the website. This is an important step for production solution.</li>
  <li><strong>Install os2forms_simplesaml module:</strong> Section for installing and configuring OS2Forms custom module that extends the functionality of the <b>simplesamlphp_auth</b> contrib module.</li>
</ul>
