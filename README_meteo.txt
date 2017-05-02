=====================================================================================
PROJECT NAME: METEO                    For feedback and/or bug reports please contact:
                                       E-mail:               yves.i.binda@gmail.com
                                       Website:                www.yvesbinda.com        
=====================================================================================
VERSION HISTORY:1.0                                     DATE CREATED          April, 29 2017        
        
VERSION NUMBER: 1.0                                     CREATED BY             YVES BINDA        
=====================================================================================
PROJECT DESCRIPTION:


Meteo is an elegant yet simple single page site which not only provides weather updates but also suggests activities according to the forecast. 


Based on the users’ unique interests, the site creates a personalized, weather-sensitive schedule of upcoming events and curated activities; making plans more successful and inclement weather less problematic.
        
This project demonstrates the implementation of OPENWEATHERMAP API. 
Specifically, the following two types of API calls have been implemented in this installation:
        

(1) Daily Forecast API - Shows the forecast for the next 5 days


(2) 3 hour forecast data - Shows the forecast in the steps of 3 hours, for the next 24                  

     hours, from the host time.


The application consists of three modules:

         (a) index.php:  The home and landing page for the application.

         
         (b) functions.php : Contains the standard routines to... 

        - Get IP and thus the city and country of the user
        - Convert the metric units to relevant US Standards


         (c) fetch_forecast_data.php :This program is called using AJAX for obtaining the              
             forecast for the next 5 days. 

The output produced and returned by this program is HTML formatted with weather forecast details.
        
        
Build:
~~~~~~
The build is based on and is compatible with PHP 5.5 (or higher), HTML-5, CSS-3, jQuery-3.2.1 and Bootstrap-3.3.7. 
It can therefore be run and hosted on any AMP installation or a web server compatible with PHP.

Weather Icons:
~~~~~~~~~~~~~~
The weather icons are dynamically sourced from OPENWEATHERMAP repositories. 
The native icons used by the OPENWATHERMAP API were found best suited to represent graphically the weather conditions by the time of the day.
        
        
Footnotes:
~~~~~~~~~~
All the units returned by the API follow the metric format. Hence, the standard conversion methods have to be used.
        
        
==============================================================================================


Thought Process 
~~~~~~~~~~~~~~~~~  


First, I must say that while the page may not be as complete as I would I hoped it to to I learned a lot creating this project. 


I started off with custom designed and found myself having to change most of it as I discovered the format and options available  on OpenWeatherMap.


I still tried to retain as much of the original design as possible.


The design and function of this site are based on several concepts: 


1) Weather sites should help make the weather less ominous.


. Application: Weather and traffic are often anticipated with dread because of their inclement and imposing nature. But the Traffic app Waze has managed to make traffic surmountable with its simple and cartoonish User Interface. Similarly, the design of my weather site is meant to remove the seriousness often attached with the weather by applying playful and light design principles: bright colors, cartoonish icons, rounded typography and approachable copy content. 




2) Weather sites should help users plan their activities in harmony with rather than in spite of the weather. 
. Application:  Each subscriber enters his or her favorite activities upon sign-up ( Arts, Food, Sports and Family ) and receives a weather-sensitive, personally-curated activity schedule based on the upcoming forecast. No more rain on BBQ day!






     ——————————————————    Trade-offs and Wishlist     ——————————————————————


* With more time I also would have linked more of the buttons to create a more complete experience. 


* Having limited experience with PHP, I ran into quite a few roadblocks when I had to move the index file from HTML to PHP to simplify the code. 


* The OpenWeathermap hourly weather forecast only came back in 3 hours chunks so I had to change my original design. 




* If I had more time I would explore a way of implementing more features from OpenWeatherMap.  


         I received great advice from a mentor and friend who helped me with PHP.




 I  look forward to enhancing my skill set as a designer as well as furthering my growth as a programmer by working alongside the team at BuildIT.
   


