<!-- DO NOT EDIT THIS FILE; it is auto-generated from readme.txt -->
# Mutual Buddies

Mutual buddies displays BuddyPress mutual friends of the logged in user & the user whose profile the user is looking at on the Profile page.

**Contributors:** [pareshradadiya](https://profiles.wordpress.org/pareshradadiya), [sanket.parmar](https://profiles.wordpress.org/sanket.parmar)  
**Tags:** [buddypress](https://wordpress.org/plugins/tags/buddypress), [social](https://wordpress.org/plugins/tags/social), [friends](https://wordpress.org/plugins/tags/friends), [facebook](https://wordpress.org/plugins/tags/facebook), [mutual friends](https://wordpress.org/plugins/tags/mutual friends), [common friends](https://wordpress.org/plugins/tags/common friends), [friendship](https://wordpress.org/plugins/tags/friendship)  
**Requires at least:** 4.0  
**Tested up to:** 4.5.2  
**Stable tag:** 2.0  
**License:** [GPLv3](http://www.gnu.org/licenses/gpl-3.0.html)  

## Description ##

Are you looking for BuddyPress mutual friends? Mutual Buddies display a list of mutual friends on a BuddyPress member’s profile and members list

You can see which friends you have in common in your friends network. Like when you go to a friends profile you can see which persons your both friends with (common friends). Just like on Facebook. This plugin add a new component inside members's profile page and list all mutual friends.

Mutual friends are the people who are friends with both you and the person whose profile you're viewing. For instance, if you're friends with Mike, and James is friends with Mike, then Mike will be shown as a mutual friend when you're viewing James's profile.

**Languages**

Mutual Buddies has been translated into the following languages:

1. English
2. French by [fxbenard](https://profiles.wordpress.org/fxbenard/)
3. Deutsch by [per4mance](https://profiles.wordpress.org/per4mance)

Would you like to help translate the plugin into more languages? [Join our WP-Translations Community](https://www.transifex.com/wp-translations/mutual-buddies/).
### More Information ###
Visit the [Mutual Buddies website](http://pareshradadiya.github.io/Mutual-Buddies/) for documentation, and information on project.


## Installation ##

### Automatic installation ###
Automatic installation is the easiest option as WordPress handles the file transfers itself and you don’t need to leave your web browser. To do an automatic install of BuddyPress Mutual Buddies, log in to your WordPress dashboard, navigate to the Plugins menu and click Add New.

In the search field type “BuddyPress Mutual Buddies” and click Search Plugins. Once you’ve found our plugin you can view details about it such as the the point release, rating and description. Most importantly of course, you can install it by simply clicking “Install Now”.

### Manual installation ###
The manual installation method involves downloading our eCommerce plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).


## Frequently Asked Questions ##

### Can I use my existing WordPress theme? ###
Yes! Mutual Buddies works out-of-the-box with nearly every WordPress theme.

### Where can I report bugs or contribute to the project? ###
Bugs can be reported either in support forum or preferably on the [Mutual-Buddies GitHub repository](https://github.com/PareshRadadiya/Mutual-Buddies).


## Screenshots ##


## Changelog ##

### 2.0 ###
* Fix - KELO theme the pop-up is completely white after it loads.

### 1.8 ###
* Tweak - Changed template dir name from "bmf_templates" to "mutual-buddies"
* New - Added a few new action hooks

### 1.7 ###
* Tweak - Changed text domain from "bmf" to "mutual-buddies"
* Tweak - Allow the templates directory to be modified via plugins or themes

### 1.6 ###
* Fix - Link in the members list won't work in case of js error or slow net connectivity
* Fix - Load plugin text domain.

### 1.5 ###
* Tweak - Added Filters: bmf_show_total_mutual_friend_count, bmf_show_mutual_friend_count, bmf_show_friend_count
* Fix - Hide friends count when friends are = 0 ( zero ).

### 1.4 ###
* Tweak - Show friends instead of mutual fiends when mutual fiends count is 0
* Fix - Load more inside mutual friends dialog always loading a 2nd page

### 1.3 ###
* Tweak - Replaced bp_directory_members_item and bp_friend_requests_item hooks with bp_member_last_active filter
* Fix - Member loop squeeze members next to each other while masonry grid is used

### 1.2 ###
* Feature - Mutual friends support for Friends > Request Page
* Fix - Styling fixes inside popup

### 1.1 ###
* Tweak - SCSS files are removed from bundle

### 1.0 ###
* Initial release


