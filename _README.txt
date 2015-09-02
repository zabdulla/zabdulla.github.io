mnmlist README

Author: Leo Babauta
Author URI: http://mnmlist.com
Theme URI: http://mnmlist.com/theme


mnmlist is a clean and very minimalist theme that focuses on the content without distractions. It has a single sidebar. No widgets. No comments. No dynamic sidebar. No nothing.

This is v2 of the theme. In this version:

* I've stripped away the header
* stripped away the sidebar
* changed the fonts
* added an archives page with search
* greatly simplified the design

You can still get v1 of the theme on the theme page: http://mnmlist.com/theme.

This theme is uncopyrighted -- use as you like, spread it, sell it, do whatever you want. Thanks and enjoy.


Basic Setup
---------------------------------
You'll need to edit several pages in the Wordpress theme editor - go to Wordpress admin, then Appearance, then editor (after you've activated this theme).

- Index
At the top of this page (the main page of your blog) are a couple things to note/change:
* Blog name - it's set to put the name of your blog first, but you can change this by substituting whatever you like for <?php bloginfo('name'); ?> ... the same code is also on the "single" and "page" templates if you want to change those.
* Feed - right now the feed link goes to a page called "feeds", which you can create yourself as I have at http://mnmlist.com/feeds/ ... or you can just put your RSS feed link here.
* all - right now the "all" link goes to a page called "archive", which I recommend. There's already an archive template, but to create the archive page, you'll want to create a new page called "archive" and change the type of template it uses to "archive" (under "attributes" on the right side of the Wordpress page editor).

- Footer
Right now, there's an "uncopyright" link, but it will go to my uncopyright page. Create your own, or put a copyright notice here, or whatever links you want. I also have links that say "more" and "less", but you can change these to whatever links you want -- perhaps your about page, contact page, or whatever.

- Archives
To get the search box to work correctly, you'll need to put your domain name into the line:
	var domainroot="mnmlist.com"
You'll also want to change the categories and links in the Categories section to reflect your blog's categories and links.


Again, there are no comments. You'll need to add these in to the theme if you want them. It's not that hard -- just copy comments php files and code from other themes, and add it to this theme.

This theme is designed to be as minimalist as possible, so I've stripped out a lot of functions that other themes have. That's the choice I've made and I like it that way.

This theme is "as is" - any bugs, you need to fix it. Any changes you want, you'll need to make them.