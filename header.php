<?php
session_start();

// when nav bar for desktop size
echo "
    <ul class='topnav'>
                <li><a class='logo' href='#home'>Journey to Mental Wealth</a></li>

                <li class='right'><a href='recommend.php'>Recommend a Resource</a></li>
                <li class='right'><a href='about.html'>About</a></li>
            </ul>

            <!-- mobile navigation -->
            <div id='mySidepanel' class='sidepanel'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>×</a>
                <a href='#'>About</a>
                <a href='#'>Services</a>
                <a href='#'>Clients</a>
                <a href='#'>Contact</a>
            </div>

            <button class='openbtn mobile-nav' onclick='openNav()'>☰ Menu </button>
";
