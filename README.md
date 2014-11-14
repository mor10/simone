# Simone

Simone is a responsive modern design theme designed and developed by [Morten Rand-Hendriksen](http://mor10.com) available from the [WordPress Theme Directory](http://wordpress.org/themes/simone/).

Simone's design is focused on typography and aims to put the content front and center. Fonts are large and clear and scale according to screen width. On wider screens blockquotes and images can be aligned left and right to break out of the main stream and get a pull-quote effect. The featured images are responsive through the use of the <picture> element resulting in appropriate image sizes being loaded to fit individual screen sizes.

## Features

### Translations
Simone ships with English as the default language. Translations are available for:
- Catalan (CA via Faleg)
- Chinese (simplified) (zh_CN via Jerry Wang)
- Dutch (nl_NL via Richard van Naamen)
- Finnish (fi via Sami Keijonen)
- French (fr_FR via Christine Rondeau)
- German (de_DE via Caspar Hübinger)
- Hungarian (hu_HU via Beata Kozma)
- Italian (it_IT via  Giorgio Riccardi)
- Norwegian Bokmål (nb_NO)
- Persian / Farsi (fa_IR via Emad Navy)
- Portugese (pt_PT via João Gomes)
- Russian (ru_RU via Vladimir Samoletov)
- Spanish (es_ES via Juan Pablo)
- Swedish (se_SE via Ted Derneby)

### RTL language support
Simone ships with full RTL language support. All relevant content is reversed including menus, menu position, search bars, and other features. Sidebar can be left in its default position or moved to the left through the customizer.

### Customizer options
Extended options available from the Customizer:

1. Header background color
2. Header text color
3. Link color (changes link colors throughout the site including site title. Also sets color of .border-custom class.)
4. Optional Header image of 1280px x 300px
5. Sidebar position: Simone can be configured to display the sidebar on the right (default) or on the left.
6. Archive display: Archive pages show excerpts by default. This can be changed to display full content.

### Widgetized areas
1. Sidebar, max content width 300px.
2. Footer, max content width 320px.

### Post Formats
Standard and Aside post formats are supported. Asides are displayed without headings or meta content in index pages. All other displays are identical with Standard posts.

### Featured Images
Posts and pages can have Featured Images. On single posts and pages max Featured Image (Post Thumbnail) size is 1060px x 650px. On index pages the featured image is displayed in 780px x 250px hard crop.

### Optional Social Media menu
The header features an optional social media menu which is displayed on the far right of the menu area. Social media icons are automatically generated based on the URLs of different social media services so a link menu item with a Twitter URL will automatically show the Twitter icon etc. To activate the menu simply create a new menu and assign it to the Social Menu template location.
The social menu is inspired by this [article by Justin Tadlock](http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2).

### Extras
Simone ships with three border options for images and other elements that can be applied by adding a class to the desired element. The classes add a 1px solid border around the current element. The classes are .border-black (black), .border-gray (#b9b9b9 or 25% gra), and .border-custom (defaults to header color but is overridden by custom link color in Customizer). These classes are added to allow the user to add borders in a semantic and standards based way.

## Licenses and External Assets
Simone is distributed under the terms of the [GNU GPL v2](http://www.gnu.org/licenses/gpl-2.0.html)

Simone's code base started out as [_s](http://underscores.me) as it were on February 6, 2014.

The theme features three custom fonts: 
- [Lato](http://www.google.com/fonts/specimen/Lato): [SIL Open Font Licence 1.1](http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL) 
- [PT Serif](http://www.google.com/fonts/specimen/PT+Serif): [SIL Open Font Licence 1.1](http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL) 
- [FontAwesome](http://fontawesome.io): Published under [various licenses](http://fortawesome.github.io/Font-Awesome/license/)

The accessible main menu is powered by [SuperFish](http://users.tpg.com.au/j_birch/plugins/superfish/). [MIT License](https://github.com/joeldbirch/superfish/blob/master/MIT-LICENSE.txt)
Responsive triggers for Superfish and Masonry powered by [Enquire.js](http://wicky.nillia.ms/enquire.js/). [MIT Licence](http://wicky.nillia.ms/enquire.js/#license)
Responsive featured images powered by [Picturefill](http://scottjehl.github.io/picturefill/)

## Namesake
Simone is named after philosopher [Simone de Beauvoir](http://en.wikipedia.org/wiki/Simone_de_Beauvoir)

## Changelog
### 2.0
####New features:
- RTL language support
- Custom background color and background image option in Customizer
- Sidebar position option in Customizer
- Index and archive content display (excerpt or content) in Customizer
####Updates:
- New translation for Persian / Farsi (coursesy of Emad Navy)
- New translation for Swedish (courtesy of Ted Derneby)
- New method for loading of stylesheets when child theme is used.

### 1.0.11
- New translation for Catalan (courtesy of Faleg)
- New translation for Dutch (courtesy of Richard van Naamen)

### 1.0.10 
- New translation for Simplified Chinese (courtesy of Jerry Wang)
- Updated Portugese translation (courtesy of João Gomes)
- Heavier font in site description for improved accessibility
- Various code fixes and cleanups

### 1.0.9
- Font Awesome updated to 4.2.0
- New social menu icons for Foursquare, JSFiddle, Reddit, SoundCloud, Stack Overflow, Vine, Yelp, WordPress.com
- New translations for Spanish (courtesy of Juan Pablo), Portugese (courtesy of João Gomes), and Russian (courtesy of Vladimir Samoletov).
- Various CSS and HTML updates.

### 1.0.8.1
- New translations for Finnish (courtesy of Sami Keijonen) and Italian (courtesy of  Giorgio Riccardi).

### 1.0.8
- New translations for French, German, and Norwegian. Hungarian translation added courtesy of Beata Kozma.

### 1.0.7.2
- Full refactoring of translation files including updated nb_NO translation.

### 1.0.7.1
- Minor translation updates to address date formatting and wider language support. Stop-gap while waiting for more translation files to come online.

### 1.0.7
- French translation courtesy of Christine Rondeau

### 1.0.6
- German translation courtesy of Caspar Hübinger

### 1.0.5
- Translation files updated to reflect recent changes.
- Various translation improvements throughout
- Norwegian Bokmål translation updated

### 1.0.4
- Various translation improvements courtesy of Caspar Hübinger (@glueckpress). See https://github.com/mor10/simone/pull/5 for details.

### 1.0.3
- Featured image on single posts and pages and the first post on index page now responsive with <picture> element
- Fixed .screen-reader-text based on http://snook.ca/archives/html_and_css/hiding-content-for-accessibility