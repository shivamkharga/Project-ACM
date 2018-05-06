<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to ACM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
                <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="/script/script.js"></script>

    </head>

    <body>
        
        <div class="navbar">
            <div id= "header"> Association for Computing Machinery, Chapter ULM</div>
            <div class="nav-col">
                <a class="link" href="/index.php">
                    <div class="item right-border">
                        Home
                    </div>
                </a>
                <div class="item selected right-border">
                    
                    <div class="dropdown link">
                        <a class="link" href="/resources/Events.php">
                            <div class="dropbtn">Events&nbsp;&nbsp;&#x25BE;</div></a>
                            <div class="dropdown-content">
                                  <a href="/resources/Events.php">Calendar</a>
                                  <a href="/resources/Events.php">Recommend an Event</a>
                                  <a href="/resources/Events.php">Past Events</a>
                                </div>
                      </div> 
                    
                </div>
                <div class="item right-border">
                    <div class="dropdown link">
                        <a class="link" href="/resources/Surviving.php">
                            <div class="dropbtn">Surviving a CS degree&nbsp;&nbsp;&#x25BE;</div></a>
                            <div class="dropdown-content">
                                    <div class="dropdown link-one">
                                        <div class="dropbtn"><a href="/resources/Surviving.php">Freshmen Must know list<span style="float:right; margin-right:13px; font-size: 14px;">&#x25B8;</span></a></div>
                                            <div class="dropdown-content-one">
                                                  <a href="/resources/Surviving.php">GitHub Student Pack</a>
                                                  
                                            </div>
                                    </div>

                                    <a href="/resources/Surviving.php">Getting Help</a>
                                    <a href="/resources/Surviving.php">Googling Like a Programmer</a>
                                    <a href="/resources/Surviving.php">What Course When</a>
                                    <a href="/resources/Surviving.php">Finding Documentation</a>
                                    <a href="/resources/Surviving.php">Learning the Lingo</a>
                                </div>
                      </div> 
                </div>
                <div class="item right-border">
                    <div class="dropdown link">
                        <a class="link" href="/resources/resources.php">
                            <div class="dropbtn">Useful Resources&nbsp;&nbsp;&#x25BE;</div></a>
                            <div class="dropdown-content">
                                  <a href="/resources/resources.php">Books</a>
                                  <a href="/resources/resources.php">Videos</a>
                                <a href="/resources/resources.php">Youtube Channels</a>
                                <a href="/resources/resources.php">Websites</a>
                                <a href="/resources/resources.php">Softwares</a>
                                <a href="/resources/resources.php">Interview Tips</a>
                                <a href="/resources/resources.php">Facebook Page</a>
                                <a href="/resources/resources.php">See All Resources</a>
                            </div>
                      </div> 
                </div>
                <div class="item right-border">
                    <div class="dropdown link">
                        <a class="link" href="/resources/Contacts.php">
                            <div class="dropbtn">Contacts&nbsp;&nbsp;&#x25BE;</div></a>
                            <div class="dropdown-content">
                                  <a href="/resources/Contacts.php">Professor and Officers Contact</a>
                                  <a href="/resources/Contacts.php">ACM National Champion</a>
                                  <a href="/resources/Contacts.php">ABET</a>
                                <a href="/resources/Contacts.php">IEEE</a>
                                <a href="/resources/Contacts.php">Blog</a>
                            </div>
                      </div> 
                </div>
                 <a class="link" href="/resources/Membership.php">
                    <div class="item right-border">
                       Membership
                    </div>
                </a>
                <a class="link" href="/resources/FAQ.php">
                    <div class="item">
                        FAQ
                    </div>
                </a>
            </div>
        </div>
        
        <main>
            
                <div class= "text">
                    <div class="welcome" id="Calendar"> Calendar<img style="width:40px;"src="/resources/images/calendar.png"></div>
                    <div  id="desc">

                         <?php
                                //get the q parameter from URL

                                $xml="https://calendar.ulm.edu/RSSFeeds.aspx?data=qaUdY1wvEciJ2wvy%2fMP8stIuwmDMkzkufjgrCy1C0S9I4u1TluveZQ%3d%3d";

                                $xmlDoc = new DOMDocument();


                                $xmlDoc->load($xml);


                                //get elements from "<channel>"
                                $channel=   $xmlDoc->getElementsByTagName('channel')->item(0);
                                $channel_title = $channel->getElementsByTagName('title')
                                ->item(0)->childNodes->item(0)->nodeValue;
                                $channel_link = $channel->getElementsByTagName('link')
                                ->item(0)->childNodes->item(0)->nodeValue;


                                //output elements from "<channel>"


                                echo("<div class='rss-calendar'> <div class='rss-title'><a href='" . $channel_link
                                  . "'>" . $channel_title . "</a></div>");


                                //get and output "<item>" elements
                                $x=$xmlDoc->getElementsByTagName('item');
                                for ($i=0; $i<=5; $i++) {
                                  $item_title=$x->item($i)->getElementsByTagName('title')
                                  ->item(0)->childNodes->item(0)->nodeValue;
                                  $item_link=$x->item($i)->getElementsByTagName('link')
                                  ->item(0)->childNodes->item(0)->nodeValue;
                                  $item_desc=$x->item($i)->getElementsByTagName('description')
                                  ->item(0)->childNodes->item(0)->nodeValue;
                                  echo ("<div class='rss-header'><a href='" . $item_link
                                  . "'>" . $item_title . "</a></div><hr>");

                                }
                                echo "</div>";
                        ?>
                        <div class='rss-calendar'> <div class='rss-title'>Upcoming Events</div>
                            <div class='rss-header'> </div>
                        
                        </div>
                        
                    </div>
                </div>
                
                <div class= "text">
                    <div class="welcome" id="recommend"> Recommend an Event</div>
                    <div  id="desc">
                        <img style="display:block;width:120px;margin:auto;"src="/resources/images/suggestion.png">
                        <form method="post">
                            <div class="form-group">
                              <label for="Name">Event Name:</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter Event Name" name="name">
                            </div>
                            <div class="form-group">
                              <label for="description">Description:</label>
                                <textarea class="form-control" id="description" placeholder="Enter Description" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form> 
                    </div>
                </div>
                
                <div id= "text">
                    <div class="welcome" id="past"> Past Events</div>
                    <div  class="desc">
                        End-of-Semester Outdoor Picnic - April 27, 2018 <hr>
                        ACM Annual Programming Contest -  March 23, 2018  <hr>   
                        ACM Pizza and GIT Tutorial - March 09, 2018 <hr>
                        ACM Debugging Seminar - February 02, 2018 <hr>
                        ACM Web Portfolio Workshop - January 26, 2018 <hr>
                        Intel® Nervana™ AI Academy Student Webcast - December 8, 2017
                        
                        
                    </div>
                </div>
            
            
        
         </main>
        
        
        
        
        <div id="footer">
            <div class="footer-content">
                <img id = "logo" src ="/resources/images/ulm.png">
                <div class="footer-text">
                    The University of Louisiana Monroe
                   <br>
                    700 University Avenue<br>
                     Monroe, LA 71209                    
                </div>
            </div>
            
            Designed by: Shivam Kharga, Saransh Bhandari, Nischal Adhikari, Hem BK (Class of 2019)
        </div>

    </body>
</html>