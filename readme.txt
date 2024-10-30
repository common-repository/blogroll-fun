=== Plugin Name ===
Contributors: jnewmano
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZHV7QFM84SL8A
Tags: blogroll, update, post, sidebar, time, blogroll last post, widget
Requires at least: 2.8
Tested up to: 3.7.2
Stable tag: trunk

Blogroll Fun adds last post information to all of the links in your blogroll.  Find out when friends have blogged just by looking at your blogroll!

== Description ==

Blogroll Fun uses a subscription to a free service that allows it to easily determine the last update time and the last post for all of the links in your blogroll without slowing down the loading time of your blog.  It allows you to choose if you want to display this information in your blogroll or not.  It simply replaces the standard wordpress link widget while providing additional functionality.

Blogroll Fun can be compared to the feed reading blogroll.  However, unlike feed reading blogroll the last post information is sent to your blog and stored with your blogroll.  It does not rely on your visitors to load this information, or any javascript tricks.

Settings can be updated by going to manage, widgets, then edit on the links widget.

Currently, no ads are being delivered through this plugin.

== Installation ==

1. Unzip blogroll.zip
1. Upload contents to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Update settings in the links widget.

If you are not using the wordpress theme widgets then you will need to modify your template.  Where your blogroll is displayed you need to change wp_list_bookmarks() to br_blogroll_fun()

== Frequently Asked Questions ==

= How long does it take for the last post information to show up? =

Depending on when you subscribe to our service it can take anywhere from 1 minute to 6 hours for the information to become available.  Once subscribed, the information will be updated every 6 hours.  We know that this is a long time, but be patient, it's worth it.  If after 6 hours you still don't see anything, send us an email or post a comment on our blog and we'll help you out.

= What if I want my information to be updated more often than every 6 hours? =

Due to cost and other restrictions we are unable to send updates more than once every six hours.  However, with small donations we can make adjustments to individual accounts and allow updates up to every 2 hours and disable the ads.

= Why are random links appearing in my blogroll? =

In order to support this service we insert small ads into your blogroll.  These ads can be disabled for one week by managing the widget and clicking on disable ads for one week.  To disable them permanently please make a small donation.  

== Changelog ==

= 0.8.3 =

Improved handling of notifications when adding links.

= 0.8.0 =

Various bug fixes and improved reliability.

== Upgrade Notice ==

= 0.8.2 =

Performance enchancements. Links update faster and more reliably when added to your blogroll.

= 0.8.0 =

Corrected issue where empty links were added to some blogroll setups.  More reliable plugin activation/deactivation.

= 0.7.4 =

Corrects blogroll mouse tip last updated time when no update time is available.

= 0.7.3 =

Adds an improved plugin status page.  Adds support for priority blogroll last updated information and removes ads for donators.
