----------------------------------------------------------**

LANDY 
Landing page / Product showcase theme 

----------------------------------------------------------**

Installing the theme                                                                                                       
	a. Installing the theme
	b. Importing the demo

2. Menu & widgets
	a. Setting up the menu
	b. Special widget areas
 3. Header
	a. Logo text or image
	b. Social icons
	c. Changing colors
	d. Background image
	e. Background video
	f. Showcase image
	g. Intro text, sub text & buttons
	h. Subscribe form
	i. Header intro animations

4. Homepage items
	a. Setting the custom homepage
	b. Creating a homepage item
	c. Video item
	d. Slider item
	e. Testimonials item
	f. Image item
	g. Gallery
	h. Text
	i. Homepage item options

5. Custom post formats
	a. Image
	b. Gallery
	c. Image format
	d. Gallery format
	e. Aside format
	f. Quote format
	g. Link format

6. Footer 
	a. Intro text, sub text & buttons
	b. Subscribe form
	c. Background image

7. Using the customizer and custom elements
	a. Changing colors
	b. General options

----------------------------------------------------------**


----------------------------------------------------------
1. INSTALLING THE THEME
----------------------------------------------------------


a. Installing
----------------------------------------------------------

Download your WordPress theme from your ThemeForest 

You can press the download drop down menu in your ThemeForest downloads page. You can choose between the full theme or only the installable WordPress theme. Download the installable WordPress theme if you just wish to install the theme.

Locate the file called "UploadLandytoWordPress.zip"

Login to your WordPress admin panel

Go to "appearance" - "themes" and click on "Add new"

Locate the zip file from step B and upload it.

Click on "activate now"


b. Importing the demo content
----------------------------------------------------------

Locate the "Demo content" folder inside the downloaded full theme package 

You can press the download drop down menu in your ThemeForest downloads page. You can choose between the full theme or only the installable WordPress theme. Download the installable WordPress theme if you just wish to install the theme. Download the full theme to get the demo content.

Locate the file called "DemoContentLandy.xml"

Login to your WordPress admin panel

Go to "Tools" - "import" and click on "Wordpress"

If you have never done this, it will ask you to install the wordpress import plugin

Then just locate the DemoContentLandy.xml file and upload it

Then go to "settings" - "reading" and set the page "Homepage" as your "static front page"


----------------------------------------------------------
2. MENU & WIDGETS
----------------------------------------------------------


a. Setting up the menu
----------------------------------------------------------

Go to "appearance" - "menus"
Click on "create new menu" and give it any name
Under "menu settings" make sure to check the option "main menu" under "theme locations”
The menu will now show up inside the theme sidebar navigation area

	Inner page scrolling links

Go to "appearance" - "menus"
Click on "Links"
Under URL create a link with the following structure: #example

 # means that the link will be to a page on the main page (i.e. one page scrolling), the word after that is the slug of your page.   To find out the slug of the page go to the page you want to link to and look for the slug beneath the pages title (see red square in the image below). For example if you wanted to link to the page in the example below you should fill in: #news


b. Special widget areas
----------------------------------------------------------

Go to "appearance" - "widgets"
You'll notice there are 2 special sidebar areas where you can add widgets called "Header subscribe" & "Footer subscribe"
These ones allow for a widget used inside the header area or the footer area below the buttons (or if there aren't any buttons) below the lead text.


----------------------------------------------------------
3. HEADER
----------------------------------------------------------


a. Logo text or image
----------------------------------------------------------

	Logo image

Go to "appearance" - "customize"
Click on "Logo image"
Upload your desired logo image
The menu will now show up inside the theme header area

	Logo text

Go to "appearance" - "customize"
Click on "Site title & tagline"
Change the logo text to your desired text


b. Social icons
----------------------------------------------------------

Go to "appearance" - "customize" and click on the tab: "Social icons". 
Simply enter the URL to your social profile in the text field
Make sure to start each URL with http://


c. Changing colors
----------------------------------------------------------

You can change all colors via the customizer panel ("appearance" - "customize")


d. Background image
----------------------------------------------------------

Go to "appearance" - "header". 
Upload your desired background header image
Crop it or upload it as is and save it.


e. Background video
----------------------------------------------------------

Go to "media"
Upload your background video in mp4, .ogg and .webm format
Click on the media attachment and copy the link of that attachment

Then go to "appearance" - "customize" and click on the tab "Header video background"
Paste the URLS from step 3 in the correct text field


f. Showcase image
----------------------------------------------------------

Go to "appearance" - "customize"
Locate the tab called "Header showcase image"
Upload your desired image
Save & publish


g. Intro text, sub text & buttons
----------------------------------------------------------

	Intro & sub text

Go to "appearance" - "customize"
Locate the tab called "Header intro text & buttons"
The "intro header" area is the large text, the "intro header subtext" is the sub text beneath that large text.
Save & publish


	Buttons

The "First button text" & "Second button text" are the text that will be shown on the button
The "First button link" & "Second button link" is the link that will be followed when clicking the button. Make sure to start with http://


	Button icons

The "First button icon" & "Second button icon" give you 15 options in a dropdown list of which icon you wish to show
The "First button custom icon" & "Second button custom icon" will overwrite the option set via step 1. 
Look for the icon you wish to use here: http://fortawesome.github.io/Font-Awesome/
only add fa-icon (not the first fa) 
Example: you wish to use "fa fa-bell", then simply add "fa-bell" in the "custom icon" text field.


h. Subscribe form
----------------------------------------------------------

Go to "appearance" - "widgets" and you'll notice the widget area called "Header subscribe"
Drag your desired widget in that area
The demo uses: MailChimp for WordPress Lite (https://wordpress.org/plugins/mailchimp-for-wp/)


i. Header animations
----------------------------------------------------------

Go to "appearance" - "customize"
Locate the tab called "Header animation options"
Pick an option form the dropdown


----------------------------------------------------------
4. HOMEPAGE ITEMS
----------------------------------------------------------


a. Setting the custom homepage
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column select "- Custom homepage" under "Page attributes" - "Template"

Save that page. Go to "Settings" - "reading" and next to "Front page displays" click on "A static page"
Next to "Front page" select the page you created in step 1-2.
This page will now display all pages that have this page set as their parent.


b. Creating a homepage item
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column click on "Page attributes" - "Parent" and set the page you created in step a. as the parent.
Then go to "Page attributes" - "Template" and select a homepage item layout (they all start with "- -")
The order can be used to order the items on the homepage (from 0- … with 0 being the first one).


c. Video item
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column, "Page attributes" - "Template" and select either "Video left", "Video right" or "Video full width"
Then scroll down and locate the tab called "Custom fields" underneath the post editor (If you do not see this, click on "screen options" and check "custom fields")
Create a new custom field called "video" (no capitals, and no "") and in the value field enter the iframe embed code.


d. Slider item
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column, "Page attributes" - "Template" and select either "Slider left" or  "Slider right"
Then click on "media", click on "Upload files" and "Select files" and upload all images you want to show in the slider.

After they are done uploading just press the "X" in the top right corner


e. Testimonials slider
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column, "Page attributes" - "Template" and select either "Testimonials slider"
Go to "testimonial" and just create a new post. The title is the testimonial author, the post content is the testimonial itself and the featured image is the testimonial person's image. 


f. Image item
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column, "Page attributes" - "Template" and select either "Image left", "Image right" or "Image full width"
Then click on "featured image" and upload the image


g. Gallery
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column, "Page attributes" - "Template" and select "Gallery slider"
Then click on "media", click on "Upload files" and "Select files" and upload all images you want to show in the gallery.
After they are done uploading just press the "X" in the top right corner


h. Text
----------------------------------------------------------

Go to "pages" and create a new page
In the right hand side column, "Page attributes" - "Template" and select "Text full width"


i. Homepage item options
----------------------------------------------------------

Go to "pages" and create a new page or edit an existing one
You have the option to edit the header intro color, the text color, the background color or upload a background image.
Upload a background image by clicking on "Upload file". Then press "Use as background image"
You can also stick an image to the bottom by selecting the option "Stick image to bottom"
You can also choose to center the text


----------------------------------------------------------
5. POST FORMATS
----------------------------------------------------------


a. Image
----------------------------------------------------------

Open up your post or make a new one
Go to the sidebar and locate the "Format" table in the right sidebar.
Here you need to select "Image"
Then locate the Featured Image table in the right sidebar.
Choose which image you want. The theme automatically makes sure it fits inside the content. (Width:1000px)
Press "Use as featured image"
Publish post


b. Gallery
----------------------------------------------------------

Open up your post or make a new one
Go to the sidebar and locate the "Format" table.
Here you need to select "Gallery"
Then locate the "add media" button on top of the post editor.
Click on the tab "Upload files"
Click on "Select files"
Select all images you wish to use and upload them. Then just press the "X" in the top right hand corner. DO NOT INSERT THEM INTO THE POST (blue button in the lower right of the popup).
Publish post
If you wish to change the order of the images or wish to delete some of them go to "add media", click on the drop down menu and select "Uploaded to this post". All images uploaded to that specific post will be shown in the gallery.

c. Link
----------------------------------------------------------

1. Open up your post or make a new one.

2. Go to the sidebar and locate the "Format" table.

3. Here you need to select "Link".

4. The title can be whatever you want.

5. The content of the post is the description of the link.

6. Then go to "Custom fields" below the post content editor.

7. Make a new custom field called "link" under "Name".

8. Fill in the link you want the title of the post to go to under "Value" (make sure it starts with http://).

9. Publish post


d. Quote
----------------------------------------------------------

1. Open up your post or make a new one.

2. Go to the sidebar and locate the "Format" table.

3. Here you need to select "Quote".

4. The title of the post is the quote. 

5. The content of the post is the author and or post content. 

6. Publish post


e. Video
----------------------------------------------------------

1. Open up your post or make a new one

2. Go to the sidebar and locate the "Format" table.

3. Here you need to select "Video"

4. Then go to "Custom fields" below the post content editor.

5. Make a new custom field called "video" under "Name".

6. Fill in the embed code to the video you want to display under "Value".

7. Publish post.

Sample embed code:
<iframe src="http://player.vimeo.com/video/4143170?title=0&amp;byline=0&amp;portrait=0" frameborder="0" width="1200" height="600"></iframe>


f. Aside 
----------------------------------------------------------

1. Open up your post or make a new one.

2. Go to the sidebar and locate the "format" table.

3. Here you need to select "Aside".

4. The title and content act like a normal standard post. You can also insert featured images.

----------------------------------------------------------
6. FOOTER 
----------------------------------------------------------

a.  Intro text, sub text & buttons 
----------------------------------------------------------

	Intro & sub text

Go to "appearance" - "customize"
Locate the tab called "Header intro text & buttons"
The "intro header" area is the large text, the "intro header subtext" is the sub text beneath that large text.
Save & publish

	Buttons

The "First button text" & "Second button text" are the text that will be shown on the button
The "First button link" & "Second button link" is the link that will be followed when clicking the button. Make sure to start with http://

	Button icons

The "First button icon" & "Second button icon" give you 15 options in a dropdown list of which icon you wish to show
The "First button custom icon" & "Second button custom icon" will overwrite the option set via step 1. 
Look for the icon you wish to use here: http://fortawesome.github.io/Font-Awesome/
only add fa-icon (not the first fa) 
Example: you wish to use "fa fa-bell", then simply add "fa-bell" in the "custom icon" text field.

b. Subscribe form
----------------------------------------------------------

Go to "appearance" - "widgets"
You'll notice the widget area called "Header subscribe"
Drag your desired widget in that area
The demo uses: MailChimp for WordPress Lite (https://wordpress.org/plugins/mailchimp-for-wp/)



c. Background image
----------------------------------------------------------

Go to "appearance" - "customize"
Locate the widget called "Footer background image"
Upload your background image. If you don't do this it will revert to the color set via "colors"


----------------------------------------------------------
7. GENERAL OPTIONS
----------------------------------------------------------


a. General options
----------------------------------------------------------
	
	Disable Preloader

Go to "appearance" - "customize" - "General options"
Check the option "Disable Preloader"
This will hide the preloader animation

	Hide social icons in the header

Go to "appearance" - "customize" - "General options"
Check the option "Hide header social icons"
This will hide the social icons next to the menu button

	Disable homepage items animations

Go to "appearance" - "widgets"
Check the option "Disable homepage items animations"
This will stop the animations on scrolling the theme

b. Colors
----------------------------------------------------------

Go to "appearance" - "customize" - "colors"
All colors can be changed in this option panel
