=== Easy Media Gallery ===
Contributors: GhozyLab
Donate link: http://ghozylab.com/donate
Tags: gallery, wordpress gallery plugin, widget, photo album, grid gallery, portfolio wordpress plugin, wordpress portfolio plugin, best gallery plugin, filterable gallery, google, image album, twitter, admin, plugin, portfolio, reverbnation embed, embed mp4, embed vimeo youtube, embed dailymotion, embed livestream, embed metacafe, soundcloud embed, media gallery, post, page, admin, posts, images, html5 video, google street view, html5 mp4
Requires at least: 3.3
Tested up to: 3.5.2
Stable tag: 1.2.15
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin enables you to create an awesome portfolio or gallery. Over 20,000 WordPress sites are already using Easy Media Gallery. Is Yours?


== Description ==

Easy Media Gallery is a wordpress plugin designed to display portfolios and various media support including gallery sets, single image, google maps, video, audio and link with very ease and elegant.

= Live Demos =

* [DEMO 1](http://ghozylab.com/new-feature-sample-1/)
* [DEMO 2](http://ghozylab.com/new-feature-sample-2/)
* [DEMO 3](http://ghozylab.com/sample-1)
* [DEMO 4](http://ghozylab.com/sample-2)
* [DEMO 5](http://ghozylab.com/sample-3)
* [DEMO 6](http://ghozylab.com/sample-4)

= Full media support =
<p>Easy Media Gallery satisfy all your needs letting you create different types of portfolio. Each item can be:</p> 

* An image
* Grid Gallery (<em>[Pro Version](http://ghozylab.com/new-feature-sample-1/)</em>)
* Filterable Media (<em>[Pro Version](http://ghozylab.com/new-feature-sample-2/)</em>)
* An image gallery (<em>[Pro Version](http://ghozylab.com/sample-1/)</em>)
* A video
* An mp3 player
* Embed from Reverbnation or Soundcloud (<em>[Pro Version](http://ghozylab.com/sample-1/)</em>)
* Google Maps / Google Street View (<em>[Pro Version](http://ghozylab.com/sample-1/)</em>)
* A link (<em>[Pro Version](http://ghozylab.com/sample-1/)</em>)

= Features =
Easy Media Gallery supports a wide range of media formats, and an even wider range of social media sites. Simply link to any image, flash video, or popular website, and the media will be automatically loaded into the overlay. Easy Media Gallery can be used to embed videos from :

* YouTube
* YouTube Playlist
* Vimeo
* Veoh
* DailyMotion
* MetaCafe
* Livestream
* YouKu
* Facebook
* Google video
* Revver
* RuTube
* HTML5 MP3 and MP4, MOV, M4V, M4A, FLV, AIFF

It is a very customizable plugin that allow you to set display whatever you want like adjust colors, positions, media sizes, hover effect and much more with one easy control panel. That easy control panel for experts it would save your time, and for you who do not have more knowledge about website styling, of course this plugin will allow you to manage your website much more easily. 

= Examples =
<p>http://www.youtube.com/watch?v=dXFBNY5t6E8</p>

* You can learn more by watching the video from [our youtube channel](http://www.youtube.com/GhozyLab).


> #### **Upgrade to Easy Media Gallery Pro**
> Take your media to the next level with [Easy Media Gallery Pro](http://ghozylab.com/pricing/), which gives you additional features such as:

> * No coding, the plugin takes care of everything
> * Create unlimited number of media
> * Media are built on-the-fly as you enter and select options
> * Works with all modern browsers, degrades gracefully for others
> * Fully CSS3 compliant with text shadowing, box shadowing, gradients, etc
> * Color picker for unlimited color combinations
> * See your media on different theme and more.
> * Powerfull control panel and Shortcode Manager make getting started super easy
> * 24/7 Technical Support

= Examples =
<p>http://www.youtube.com/watch?v=TQ1MMxhsyD8</p>


== Installation ==

= For automatic installation: =

The simplest way to install is to click on 'Plugins' then 'Add' and type 'Easy Media Gallery' in the search field.

= For manual installation 1: =

1. Login to your website and go to the Plugins section of your admin panel.
1. Click the Add New button.
1. Under Install Plugins, click the Upload link.
1. Select the plugin zip file (easy-media-gallery.x.x.x.zip) from your computer then click the Install Now button.
1. You should see a message stating that the plugin was installed successfully.
1. Click the Activate Plugin link.

= For manual installation 2: =

1. You should have access to the server where WordPress is installed. If you don't, see your system administrator.
1. Copy the plugin zip file (easy-media-gallery.zip) up to your server and unzip it somewhere on the file system.
1. Copy the "easy-media-gallery" folder into the /wp-content/plugins directory of your WordPress installation.
1. Login to your website and go to the Plugins section of your admin panel.
1. Look for "Easy Media Gallery" and click Activate.


== Frequently Asked Questions ==

= Images not showing up (issue for version 1.1.7 and below) =

Sometimes you may face problem that your images are not displaying in the site. We use timthumb script to resize the images. To change permission, you can use a FTP program like FileZilla or you can even use File Manager from your cPanel. We would recommend you use FileZilla to do this task, you can [DOWNLOAD HERE](https://filezilla-project.org/download.php) . Okay, Changing permission is very easy.

1. Firstly you should have FTP account, if you don't have, make one from cPanel.
1. Now login to FTP, using FileZilla and navigate to Easy Media Gallery folder/directory in /wp-content/plugins/easy-media-gallery/includes/class/
1. Make sure there is a folder with name <strong>cache</strong>, If not exist just create new one and right click on <strong>cache</strong> folder and click on Permissions. Type 755 and click on OK. If this still does not work, then try applying 777 permission to cache folder (<em>Not Recommended - Less secure</em>) or you can try to bypass modescurity from .htaccess using <strong>SecFilterEngine Off</strong>. See example below:

`<IfModule mod_security.c>
SecFilterEngine Off
</IfModule>
`

* [VIDEO - How to change cache folder permission from cPanel](http://youtu.be/lYDJ8fM18pc)
* [VIDEO - How to change cache folder permission from FileZilla](http://youtu.be/S_Az2Zg5OLc)

= How do I use the shortcode to my post/page template? =

There are 2 ways to use the shortcode, once you've created your media, you can use them in your website simply using the Easy Media Gallery shortcode wizard on top of each page or post editor.

`[easy-media med="231,233"]`

or you can display it where you want and as you want outside your post/page using wordpress <strong>do_shortcode</strong>. See example below:

`<?php echo do_shortcode('[easy-media med="231,233"]'); ?>`

<strong>Keep in mind:</strong>
We have created a shortcode manager that allow you to put media wherever you like with ease. Please learn more at:

* [Basic Tutorials](http://ghozylab.com/create-media)
* [Youtube Channel](http://www.youtube.com/GhozyLab)


= Is there any documentation with detail for this plugin? =

To make the plugin easy for everyone, the documentation comes with detailed videos explaining each step necessary to setup and use Easy Media Gallery:

* [Easy Media Gallery Installation](http://www.youtube.com/watch?v=PSCYB-N-TEE)
* [Full Tutorial How to Use Easy Media Gallery](http://www.youtube.com/watch?v=LBck-tnVYas)
* [How to Create Google Maps Media Types](http://www.youtube.com/watch?v=PEgfleRf6hg)
* [How to Create Audio (mp3) Media Types](http://www.youtube.com/watch?v=Bsn-CB5Hpbw)
* [How to Create Video (Youtube) Media Types](http://www.youtube.com/watch?v=htxwZw_aPF0)
* [How to Insert Image into Media Description](http://www.youtube.com/watch?v=9cuYyBMKx2k)
* [How to Change Media Columns](http://www.youtube.com/watch?v=56f_C7OXiAE)
* [How to Change Media Border Size and Color](http://www.youtube.com/watch?v=2T73wvt_wOA)
* [How to Publish Easy Media Gallery ( Standard Method )](http://www.youtube.com/watch?v=Z2qwXz7GIRw)
* [How to Publish Easy Media Gallery ( Advanced Method )](http://www.youtube.com/watch?v=LMBg0Zv8048)


= How can I get support? =

* We are not able to provide anything other than community based support for Easy Media Gallery Lite. Please consider upgrading to [Easy Media Gallery Professional](http://ghozylab.com/) for support.


= How can I say thanks? =

* Just recommend our plugin to your friends! or
* If you really love Easy Media Gallery, any donation would be appreciated! It helps to continue the development and support of the plugin.
But seriously, I just want to drink coffee for free, so help a developer out. You can use this link [Donate to Easy Media Gallery][easymedia donate].

[easymedia donate]: http://ghozylab.com/donate
            "Donate to Easy Media Gallery"


== Screenshots ==

1. Easy Media Gallery Control Panel
2. Easy Media Gallery Media Builder (Gallery)
3. Easy Media Gallery Media List
4. Easy Media Gallery Admin Panel
5. Easy Media Gallery Shortcode Manager
6. Easy Media Gallery Metabox (Audio)
7. Embed music from Soundcloud
8. Embed music from Reverbnation

== Changelog ==

= 1.2.15 =
* Added : Livestream video embed support
* Fixed : Malfunction at 3rd party Plugin detected 
* Fixed : Thumbnails size when cover not set 
* Many other PHP and CSS clean and optimization

= 1.2.14 =
* Empty

= 1.2.13 =
* Remove Donation button from Control Panel
* Many other PHP optimization

= 1.2.12 =
* Added : WordPress Pointers 
* update easymedia_resizer.php 
* Many other PHP and CSS clean and optimization

= 1.2.11 =
* Fixed : metabox notification
* Added : option disable MooTools
* Update documentation

= 1.2.10 =
* Fixed : m4v video
* Update PRO Version price

= 1.2.9 =
* patch for the_title(), Thanks to Kevin Falcoz (aka 0pc0deFR)

= 1.2.7 =
* Remove Teaser Image from MP4 player 
* Many other PHP and CSS clean and optimization

= 1.2.5 =
* Remove Styleswitcher 
* Fixed : Hide View & Preview Button
* Added : AJAX Support
* Fixed : responsive video 
* Many other PHP and CSS clean and optimization

= 1.2.3 =
* Remove thumbnails hover title
* Remove default text for empty title and sub title  
* Fixed : re-upload missing file
* Fixed : frontend script
* Fixed : responsive video 
* Updated : pro version description
* Many other PHP and CSS clean and optimization
* Fixes for minor issues discovered since 1.2.1

= 1.2.1 =
* Fixed : image max-width
* Fixed : change AJAX method POST to GET 
* Fixed : embed facebook video 
* Fixed : thumbnail position on mobile
* Fixed : auto width (js and css) 
* Fixed : jQuery conflict
* Added : HTML Tag for media title
* Updated : pro version description
* Many other PHP and CSS clean and optimization
* Fixes for minor issues discovered since 1.2.0

= 1.2.0 =
* Fixed : Aqua-Resizer optimization
* Fixed : caption overflow (CSS and jQuery)
* Fixed : hover effect in IE 8
* Fixed : media width issue
* Updated : pro version price
* Many other PHP and CSS clean and optimization
* Fixes for minor issues discovered since 1.1.9

= 1.1.9 =
* Added : admin notify option 
* Replace timthumb with Aqua-Resizer
* Fixed : IE 8 issue
* Fixed : uninstall issue
* Fixed : dailymotion compatible iPhone, iPad, Android 
* Updated : pro version price
* Many other code clean and optimization
* Fixes for minor issues discovered since 1.1.7

= 1.1.7 =
* Added : Embed Youtube playlist 
* Fixed : jQuery UI (CSS) conflict 
* Fixed : Double post with some themes
* Many other code clean and optimization
* Fixes for minor issues discovered since 1.1.5

= 1.1.5 =
* Added : parsing - parse youtu.be 
* Fixed : overflow issue (chrome)
* Fixed : hover effect with old jQuery version < 1.6.4
* Fixed : jQuery UI (CSS) conflict
* Fixed : Mediabox jQuery Scroll Func 
* Fixed : jQuery conflict with some themes

= 1.1.3 =
* Added function to allow shortcodes on widget
* Added the option to keep data when uninstall/upgrade plugin
* Added the option video autoplay
* Added some help inside the Admin interface for very common questions
* Improved loading for backend javascripts
* Fixes for minor issues discovered since 1.1.1

= 1.1.1 =
* Add Resize thumbnails option
* Removed the use of PHP function getimagesize()
* Fixed: jQuery image preview
* Update: Video tutorial
* Many other code clean and optimization

= 1.1.0 =
* Fixed: PHP warning in the tinymce-dlg.php file
* Fixed: Hover effect not works on several themes
* Fixed: Only display 10 media, although we have determined more than 10. Now you can put unlimited media
* Fixed: Title was given wrong position by CSS
* Fixed: Theme's that set image heights affected the media image dimensions.
* Many other code clean and optimization
* Add Dasboard Share Button

= 1.0.0 =
* This is the launch version. No changes yet.

== Upgrade Notice ==

= 1.2.15 =
New version availabe, update NOW!