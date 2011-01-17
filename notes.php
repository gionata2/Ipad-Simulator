<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Ipad simulator</title>
    <meta name="description" content="This is a jquery iPad simulator, this is only an experiment o what can be done with javascript in ast browsers">
    <meta name="keywords" content="Ipad, ipad simulator, apple ipad, alexw.me, altryne, alex wolkov, ipad javascript simulator">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="style/grid.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="style/main.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="style/notes.css" type="text/css" media="screen"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
    <script type="text/javascript" src="js/iscroll.js"></script>
    <script type="text/javascript" src="js/notes.js"></script>
</head>
<body>
    <div id="notes_container">
        <div id="left_side">
            <div id="search">
                <div id="counter">
                    <span id="number">0</span> Notes
                </div>
                <div id="search_cont">
                    <input type="search" id="text" placeholder="search"/>
                </div>
            </div>
            <div id="notes_list_cont">
                <ul id="notes_list">
                    <li class="active">
                        <span class="name">SFjkasf...</span>
                        <span class="date">10:37 pm</span>
                    </li>
                    <li>
                        <span class="name">Public user Interface...</span>
                        <span class="date">Dec 8, 2010</span>
                    </li>
                    <li>
                        <span class="name">Public user Interface...</span>
                        <span class="date">Dec 8, 2010</span>
                    </li>
                    <li>
                        <span class="name">Public user Interface...</span>
                        <span class="date">Dec 8, 2010</span>
                    </li>
                    <li>
                        <span class="name">Public user Interface...</span>
                        <span class="date">Dec 8, 2010</span>
                    </li>
                </ul>
            </div>
            <div id="pocket"></div>
        </div>
        <div id="right_side">
            <div id="header">
                <span id="main_title">BLA BLA BLA</span>
                <div id="add_btn">+</div>
            </div>
            <div id="note_wrap">
                <div id="relative_date">Today</div>
                <div id="date_time">Sep 13, 2010 11:42 AM</div>
                <div id="note">
                    <textarea id="note_area"></textarea>
                </div>
            </div>
            <div id="navigation">
                <div id="prev"><-</div>
                <div id="send">mail</div>
                <div id="delete">del</div>
                <div id="next">-></div>
            </div>
        </div>
    </div>

<!--    <script>-->
<!--   var _gaq = [['_setAccount', 'UA-7437527-1'], ['_trackPageview']];-->
<!--   (function(d, t) {-->
<!--    var g = d.createElement(t),-->
<!--        s = d.getElementsByTagName(t)[0];-->
<!--    g.async = true;-->
<!--    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';-->
<!--    s.parentNode.insertBefore(g, s);-->
<!--   })(document, 'script');-->
<!--  </script>-->
</body>
</html>