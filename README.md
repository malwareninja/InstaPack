# InstaPack
*** InstaPack v1.0 ***  
This library is developed solely for Educational Purpose.  
I do not motivate any of the user of this library to misuse it in any of the ways.  
If found, will be held responsible, no involvement of mine will be there at all!  
Enjoy! Learn! Don't Misuse!  
For more such applications & Help:-  
*******************************************  
* Github  :- https://github.com/suraj2334
* Website :- http://suraj-mundalik.info  
*******************************************  
  
<b><h3>Features</h3></b>  
1. Fetch Profile Picture of any Instagram account in Full Resolution  
2. Fetch Post Image of any Instagram post (with valid URL to the Post) in Full Resolution  
3. Fetch Post Video of any Instagram post (with valid URL to the Post) in Full Resolution  

<b><h3>Supported Methods</h3></b>  
1. Fetch_Profile_Picture("username")  

   This method takes Instagram <b>username</b> as an Parameter and directly returns the Profile Picture of that user in Full Resolution.  

2. Fetch_Post_Image("Instagram_Post_URL")  

   This method takes Instagram <b>Post URL</b> (URL of the post for which you want to fetch the Image) as an Parameter and directly returns the Post Image of that post in Full Resolution.  

3. Fetch_Post_Video("Instagram_Post_URL")  

   This method takes Instagram <b>Post URL</b> (URL of the post for which you want to fetch the Video) as an Parameter and directly returns the Post Video of that post in Full Resolution.  


<b><h3>How to access these methods?</h3></b>  

1. Include the <b>InstaPack/library.php</b> in your script  
2. Create an Object of type InstaPack  
   <b>For example :- $IP = new InstaPack;</b>  
3. Call any of the method to use it  
   <b>For example :- echo $IP->Fetch_Profile_Picture("github");</b>  
   
<b><h1>Examples</h1></b>  

<b><h3>Fetch Profile Picture of any User</h3></b>  
```  
<?php  
  require('InstaPack/library.php');  
  $IP = new InstaPack;  
  echo $IP->Fetch_Profile_Picture("github");    
?>  
```  

That is it! Above code will fetch profile picture of user github in full resolution.  

<b><h3>Fetch Post Image from Instagram Post URL</h3></b>  
```  
<?php  
  require('InstaPack/library.php');  
  $IP = new InstaPack;  
  echo $IP->Fetch_Post_Image("https://www.instagram.com/p/BZ73_2qFnV9/?taken-by=github");  
?>  
```  

That is it! Above code will fetch the post image in the given Instargram Post URL in full resolution.  

<b><h3>Fetch Post Video from Instagram Post URL</h3></b>  
```  
<?php  
  require('InstaPack/library.php');  
  $IP = new InstaPack;  
  echo $IP->Fetch_Post_Video("https://www.instagram.com/p/BaCc4jwFtW9/?taken-by=github");  
?>  
```  

That is it! Above code will fetch the post video in the given Instargram Post URL in full resolution.  

<b><h3>Errors</h3></b>  
The library provides sufficient error handling for invalid parameters passed to its methods. If the method fails to fetch the data it will return the error <b><i>Unable to retrieve the ***.</b></i>  
Where *** can be:-  
1. Profile Picture (If the username is invalid or not found)  
2. Post Image (If the Post URL is invalid or not found)  
2. Post Video (If the Post URL is invalid or not found)  

<b><h1>Do contact if there are any queries!</h1></b>  
