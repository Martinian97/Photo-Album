Create a photo album with following features

    2.1 Login Form: index.php has the form, login.php has authentication
        Authenticate using standard credentials: 
            user:eval 
            pass:eva
    
    2.2 album php: Browsing through the album using next, prev, last, first buttons

    2.3 Image upload page that allows you to add an image to the album:  
        new_upload.php has the form & upload.php does the processing:
        
        - Check for image format as jpg both in javascript and php
        - Check for image size to be less than 200KB in php
        - Maximum of 10 images to upload- check in php
        - Images to be uploaded to images/ directory 
        - Errors can be displayed on upload.php itself with a back
          button to 
            enable navigation to the previous page
        
        - Optional : deleting images 
            Hint: use a csv file to save existing image ids 

    2.4 Optional : Use sessions to validate login sessions while accessing  
        album.php, new_uplod.php & upload.php. Session has to be initialized at login.
