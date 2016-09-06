## Introduction
mdCMS is a Content Management System without an administration panel. You simply directly interact with the files in the content/ folder using either FTP, SFTP, or whatever else you prefer.

It uses Markdown-Extra, an extended version of markdown.

To see it in action, visit [mdcms.twentyroses.nl](http://mdcms.twentyroses.nl)


## How to use
### Overview
In mdCMS, there is a very simple folder structure. To work on your site, you only need to work with these folders:

- mdcms
    - content
    - static
        - styles
        - scripts
            - include
        - pics

You can ignore the index.php, conf.php, and sys files/folders.

### Creating and editing content
All you need to know to _create_ a site with mdCMS, is how to create and edit _content_. But you can go further, to customize your site.

To create a new page, simply create a new file in the content/ folder, ending with .md
So, for example, if I wanted to create an "About Me" page..
I'd create a file called about_me.md in the content/ folder.

You can then start editing your newly created page. Pages use a text format called "markdown". [Click here to read a short introduction on Markdown](?p=markdown_guide)


To customize the look of your website, you can edit the stylesheet within /static/styles/. You can also add stylesheets to that folder, and they will be automatically included. Stylesheets are written in CSS.
And to include javascripts into your page, simply place them in /static/scripts/include/
