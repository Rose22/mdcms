# Welcome to mdCMS

mdCMS is a Content Management System without an administration panel. You simply directly interact with the files in the content/ folder using either FTP, SFTP, or whatever else you prefer.
It uses Markdown-Extra, an extended version of markdown.

In mdCMS, there is a content folder.
In that content folder, these files should be present:
	* header.md (the header of your website)
	* home.md (your home page)
	* 404.md (displays when a page cannot be found)
	* footer.md (the footer of your website)

In addition, there is a static/ folder, that contains a file called "style.css". You can style your site in there.

To get rid of this welcome message, please create a home.md file in the content/ folder.

---

# An introduction to Markdown
## How it's written
    # This is a full header
    ## This is a slightly smaller header
    ### This is even smaller
    #### And so on
    
    This text is _italic_
    This text is **bold**
    This text is ***Bold and italic***
    
    Markdown doesn't automatically add line breaks sometimes.  
    To force a new line, add two spaces at the end of a sentence.. Like this.  
    
    [This is a link to Google](http://www.google.com)  
    Text between [] specifies the text, text between () specifies the location it points to.
    
    You can also use links like this: [YouTube][yt]  
    The second square bracket gives an identifier for you to use..
    
    Then, anywhere in the document, you can specify:
    [yt]: http://www.youtube.com
    
    And it will automatically use that reference.
    
    And an image:
    ![](http://placehold.it/250x250)
    
    You can leave the part between [] empty, or optionally, put some text in it.
    You will see the text when you hover over the image with your mouse.
    
    * This
    * Is
    * An unordered list
    
    1. This is an ordered (numbered) list
    2. With more items
    3. And even more
    
    ---
    
    That was a separator line.
    
    You can display blocks of code, by indenting them by 1 tab:  
        <span class="example">Like this</span>
        
    You can also create quotes, by using this format:
        > This is a quote
        > With multiple lines
        
    Or just:
        > This is a quote
          With multiple lines
          
    Lastly, you can also simply use HTML in your document. Like this:  
    <strong>This text is bold</strong>

## What it looks like
---
# This is a full header
## This is a slightly smaller header
### This is even smaller
#### And so on

This text is _italic_  
This text is **bold**  
This text is ***Bold and italic***  

Markdown doesn't automatically add line breaks sometimes.  
To force a new line, add two spaces at the end of a sentence.. Like this.  
    
[This is a link to Google](http://www.google.com)  
Text between [] specifies the text, text between () specifies the location it points to.  

You can also use links like this: [YouTube][yt]  
The second square bracket gives an identifier for you to use..  

Then, anywhere in the document, you can specify:  
[yt]: http://www.youtube.com  

And it will automatically use that reference.  

And an image:  
![](http://placehold.it/250x250)  

You can leave the part between [] empty, or optionally, put some text in it.  
You will see the text when you hover over the image with your mouse.  

* This
* Is
* An unordered list

1. This is an ordered (numbered) list
2. With more items
3. And even more

---

That was a separator line.

You can display blocks of code, by indenting them by 1 tab:  
        <span class="example">Like this</span>
    
You can also create quotes, by using this format:
    > This is a quote  
    > With multiple lines
    
Or just:
    > This is a quote  
      With multiple lines
      
Lastly, you can also simply use HTML in your document. Like this:  
    <strong>This text is bold</strong>
