=== MC4WP Extra ===
Contributors: lapzor
Donate link: https://lapzor.com/
Tags: comments, spam
Requires Plugins: mailchimp-for-wp
Requires at least: 6.5
Tested up to: 6.5
Stable tag: 6.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds extra functionality to the Mailchimp for Wordpress plugin.
This plugin is created by a third party, not by Mailchimp for Wordpress, ibericode or Mailchimp.

Most features in this plugin are based on [sample code snippets](https://github.com/ibericode/mailchimp-for-wordpress/tree/main/sample-code-snippets) that are provided by ibericode / Mailchimp for Wordpress.

== Description ==

Adds the following functionality to the MC4WP (Mailchimp for Wordpress) plugin:

- Adding a tag per integration method
- Allowing to set whitelisted tags via form fields in integrations
- Receive email notifications when there is an API error from a MC4WP form



== Frequently Asked Questions ==

= How to use a whitelisted tag in a ContactForm 7 form or Custom integration =

First make sure the tag you want to set is listed in the "Whitelisted tags" field under MC4WP > Integrations > Contact Form 7 or Custom.
Then you can add a field to the form, this can be any field type, such as a checkboxes, radio buttons, drop-down menu, etc. 
Make sure the field name starts with mc4wp_tag_ and the value of the field is the tag you want to set.


= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. Tags and whitelisted tags per integration method
2. Notification email when a MC4WP Form API error occurs 

== Changelog ==

= 1.0 =
* Initial public release