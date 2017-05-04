<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/css/frontpage.css"> 
    </head>
    <body>
        <div class="container">
            <div class="logo-fp">
                <img src="/assets/images/windowFace.png">
            </div>
            <div class="boards-fp">
                <div class="boardsBox-fp">
                    <h1>Boards</h1>
                    <div class="rightMenu">
                        <ul>
                            @if (Auth::check())
                            <li><a href="/account">My Account</a></li>
                            @else
                            <li><a href="/login">Login/Signup</a></li>
                            @endif
                            <li><a href="/posts">Browse All</a></li>
                        </ul>
                    </div>
                </div>    
                <div class="boardTopics">
                    <div class="column">
                        <h3>Interests</h3>
                        <ul>
                            <li><a href="/posts?b=Technology">Technology</a></li>
                            <li><a href="/posts?b=comics-cartoons">Comics and Cartoons</a></li>
                            <li><a href="/posts?b=tv-film">TV and Film</a></li>
                            <li><a href="/posts?b=weapons">Weapons</a></li>
                            <li><a href="/posts?b=auto">Auto</a></li>
                            <li><a href="/posts?b=animals-nature">Animals and Nature</a></li>
                            <li><a href="/posts?b=sports">Sports</a></li>
                            <li><a href="/posts?b=science-math">Science and Math</a></li>
                            <li><a href="/posts?b=history">History</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h3>Creative</h3>
                        <ul>
                            <li><a href="/posts?b=photography">Photography</a></li>
                            <li><a href="/posts?b=food-cooking">Food and Cooking</a></li>
                            <li><a href="/posts?b=artwork">Artwork</a></li>
                            <li><a href="/posts?b=wallpapers">Wallpapers</a></li>
                            <li><a href="/posts?b=literature">Literature</a></li>
                            <li><a href="/posts?b=music">Music</a></li>
                            <li><a href="/posts?b=fashion">Fashion</a></li>
                            <li><a href="/posts?b=graphic-design">Graphic Design</a></li>
                            <li><a href="/posts?b=gifs">GIFs</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h3>Serious</h3>
                        <ul>
                            <li><a href="/posts?b=us-news">US News</a></li>
                            <li><a href="/posts?b=world-news">World News</a></li>
                            <li><a href="/posts?b=politics">Politics</a></li>
                            <li><a href="/posts?b=snowflakes">Snowflakes</a></li>
                            <li><a href="/posts?b=alt-right">Alt-Right</a></li>
                            <li><a href="/posts?b=business-finance">Business and Finance</a></li>
                            <li><a href="/posts?b=fitness">Fitness</a></li>
                            <li><a href="/posts?b=travel">Travel</a></li>
                            <li><a href="/posts?b=advice">Advice</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h3>Video Games</h3>
                        <ul>
                            <li><a href="/posts?b=e-sports">E-Sports</a></li>
                            <li><a href="/posts?b=video-games-general">Video Games General</a></li>
                            <li><a href="/posts?b=fps">FPS</a></li>
                            <li><a href="/posts?b=mmo">MMO</a></li>
                            <li><a href="/posts?b=rpg">RPG</a></li>
                            <li><a href="/posts?b=gaming-wallpapers">Gaming Wallpapers</a></li>
                            <li><a href="/posts?b=pc-masters">PC Masters</a></li>
                            <li><a href="/posts?b=console-peasants">Console Peasants</a></li>
                            <li><a href="/posts?b=retro-gaming">Retro Gaming</a></li>
                        </ul>
                    </div>
                    <div class="column">
                        <h3>Japanese Culture</h3>
                        <ul>
                            <li><a href="/posts?b=anime">Anime</a></li>
                            <li><a href="/posts?b=manga">Manga</a></li>
                            <li><a href="/posts?b=anime-wallpapers">Anime Wallpapers</a></li>
                            <li><a href="/posts?b=cosplay">Cosplay</a></li>
                        </ul>
                        <h3>Other</h3>
                        <ul>
                            <li><a href="/posts?b=random">Random</a></li>
                            <li><a href="/posts?b=offical-stuff">Offical Stuff</a></li>
                            <li><a href="/posts?b=vaping">Vaping</a></li>
                            <li><a href="/posts?b=programming">Programming</a></li>
                        </ul>
                    </div>
                </div>      
            </div>
            <h3 class="centerText" id="submitThread"><a href="/posts/create">Start Thread</a></h3>
        </div>
    </body>
</html>
