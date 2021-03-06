=== Track That Stat ===
Contributors: Gohard
Plugin URI: http://trackthatstat.org
Donate link: http://trackthatstat.org/donate
Tags: traffic, stats, analytics, admin, geolocation, seo, visitors, statistics, tracking, google, plugin, posts, page, links, images, comments, google, post
Requires at least: 3.0 
Tested up to: 3.4.2
Stable tag: 1.2.3

View all of your traffic in real time. Analyze your visitors, search engine terms, referral traffic and more with our
userfriendly interface. 

== Description ==

= Visit Official Site =

[Track That Stat](http://trackthatstat.org)

Track That Stat is a new wordpress plugin that allows you to gather all real time traffic data that is sent to your site. It has a user friendly interface that has multiple options for you to check all of your data in detail. The main purpose of this plugin is to see who is coming to your site and what they are doing as well as being able to have all of your statistics on one place.

= Main Features =
 
* The ability to track referring sites
* The ability to track referring keywords from search engines
* A dashboard that allows you to view quick stats for the past 30 days
* The details of the of the actual visitor that viewed your site/page
* The ability to see who is currently on your site (live visitors)
* The ability to see which page a unique visitor visited
* A detailed graph for unique and repeat visitors
* The ability to search stats by a specific date or custom date range
* The ability to track live rebots from feeds search engines etc
* The ability to exclude multiple ip addresses from tracking

And much more

= Requirements =
* PHP Version 5.2 or Higher
* Wordpress 3.0 or Higher
* Mysql Database 5.1 or Higher

= Upcoming Features (As of: 11/26/12) = 

* The option to display overall visitors in numbers depending on the date range
* More graph improvements
* The option to automatically exclude your self from the stats
* The ability to exclude robots from overall stats
* User guide pop up explaining features
* The ability to track outbound links
* Better IP exclude options
* The ability to export data in excel format
* plus more

== Installation ==

1. Simply log into your self hosted wordpress blog.
2. Navigate to "Plugins".
3. Click on "Add New".
4. Type in "Track That Stat" within the search box then click "Search Plugins".
5. Locate "Track That Stat" then click on "Install Now".



== Frequently Asked Questions ==

= Does Track That Stat slow down your blog like other wordpress tracking plugins? =

The simple answer is no. Track That Stat was built to be fast and effcient. 

= How many resources/load does it use on a hosting server? =

The plugin was written in order to avoid high loads on the server. Instead of triggering processes multiple times in one occurrence, then script will only trigger each process after 50 seconds.

So this lowers the load on the server as well as CPU. 

Most scripts will trigger the server every 1-3 seconds. So this creates many processes on the server and it will cause you to get suspended for using up too many resources.

= Any advantages over Google Analytics =

Google analytics is a great tool and is very detailed. The only downside is that all of the information within google analytics is tracked by Google. Google sees all of your traffic, referring links etc.

With this plugin, it is hosted on your self hosted WP installation. So you are the only one with access to that information. Some people may not want Google to know everything about the methods they are using to promote their sites.

Another advantage is having all of your statistics in one place when you log into your blogs.

= How can we be sure no data is sent out by the plugin? Do you guarantee you don't track customers blogs? =

All of your data is stored internally on your server. I do not have any access to this information. I guarantee that I do not track anything on your blogs. Not only would that be unethical but I am pretty sure wordpress.org would not let me upload the plugin to their directory if this was the case.

= How big this database become with a blog with 1k/uv mo? =

The database size would depend on the actual data that is being collecting so there is no set number. If all of your traffic comes from referring sites, then it would be less than if your traffic came from both search engines and referring sites, which would include keywords data as well.

= How can I exclude my self from being tracked from within Track That Stat? =

Simply click on "Settings" within the plugin and enter in your IP address. This will exclude you from being counted. A later update will 
have the option to not include you at all while you are logged into wp-admin.

= What is the difference between "Views" and "Visitors"? =

The actual "Views" are considered page views. This is one person visiting multiple pages from one IP address. "Unique Visitors" counts one unique visitor from a single IP address.

= Do you have a user guide? = 

For a brief overview of all the plugin you can watch this [Video](http://trackthatstat.org/go/tts-video-guide) 

== Screenshots ==

Check out all the screenshots here: http://trackthatstat.org/screen-shots

== Changelog ==

= 1.2.3 = 

* Updated the Dashboard graph. Shows all previous data now.
* Minor bug fixes


= 1.2.2 = 

* Major change to the graph. (Uses Jqplot)
* Removed all extra code that was unused
* Overall fixes for minor bugs

= 1.2.1 = 

* Upgraded IP database options to support IPv6
* Minor bug fixes

= 1.2 = 

* Detection of Search Engine SSL requests. The plugin will now show: "No Search Term (SSL)" when visitors search through SSLs.
* Results page display option upgraded to 10,25,50,150,250 (instead of 10,25,50)
* The results page will now save the setting you have previously entered for each feature.
* New navagation menu at the bottom of the plugin for better access.
* Bug fixed with the IP feature not displaying all of the ips. (added a new backup API for better results)
* Cleaned up the tables so that it does not display white lines when the column breaks.
* Added a new [FAQ](http://wordpress.org/extend/plugins/track-that-stat/faq) for the plugin.
* Added new userguide from within the plugin.
* Minor upgrades to the code/style.


= 1.1 = 

* Completely removed /js/trackthatstat.php and implemented an alternative.
* Minor bug fixes 

= 1.0.9 =

* Small issue fixed with code being displayed on /js/trackthatstat.php file.

= 1.0.8 =

* Updated mysql databases from "InnoDB" to "MyISAM" (only applies to brand new installations)
* Fixed issues with "truncate" erasing data once the plugin is disabled/reactivated 


= 1.0.7 =

* Updated the high chart version for the graphs
* Made changes to the admin jQuery code
* Fixed issues with the admin drag and drop feature
* Fixed the image insert issue within a post
* Fixed the issue with the ability to edit post/pages due to version 1.0.6 update


= 1.0.6 =

* Fixed the issue with the graph not displaying on some hosts
* Fixed the issue with jQuery coding. Now other plugins using jQuery lbrary should work
* Small modifications to the overall plugin

= 1.0.5 =

* Fixed the issue with data being reset on upgrades for some users and when
new plugins are installed.
* Fixed the issue with the keyword feature data including numbers instead of 
actual keywords.

= 1.0.3 =
* Dashboard bug fix. Now displays for multiple days again.

= 1.0.2 =
* IP exclude feature bug fixed
Now updates on referrals, visitors, keywords and content viewed.

= 1.0.1 =
* Minor bug fixes

= 1.0 =
* Initial release