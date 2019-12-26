<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <title>sabrina chin</title>
    <link rel=stylesheet href=style.css>
    <meta name=description content="Send something nice to your girlfriend :)">
    <meta name=keywords content=sabrina,chin,virginia,tech,student,education,change,pretty>
    <meta name=author content="Luke Ogburn">
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <style>
        form:first-of-type{
            margin-top: 20vh;
        }
        form:not(:first-of-type){
            margin-top: 1vh;
        }
        form{
            width: 40vw;
            margin-left: 30vw;
        }
        input[type=text]{
            border: none;
            border-bottom: 2px solid black;
            width: calc(100% - 0.6em);
            height: 2em;
            font-size: 1.5em;
            padding: 0.1em 0.3em;
        }
        .buttonDiv{
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 1em;
            margin-top: 1em;
        }
        button{
            width: 100%;
            padding: 1em 0;
            border: 1px solid black;
            background-color: white;
            border-radius: 0.3em;
            cursor: pointer;
        }
        
        @media (max-width: 600px){
            form{
                width: 90%;
                margin-left: 5%;
                margin-right: 5%;
            }
        }
        @media (max-width: 1000px){
            form{
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;
            }
        }
    </style>
</head>
<body>
    <form method=POST action=add.php>
        <input type=text name=text placeholder="Send Sabrina something sweet" maxlength=100 autofocus>
        <div class=buttonDiv>
            <button type=submit name=submit value=now>SEND NOW</button>
            <button type=submit name=submit value=list>ADD TO LIST</button>
        </div>
    </form>
    <div>
        <form action="chooseFromList.php">
            <button type=submit>USE FROM LIST</button>
        </form>
        <form action="clearCurrent.php">
            <button type=submit>CLEAR CURRENT</button>
        </form>
        <br><br>
        <form action="list.php">
            <button type=submit>VIEW CURRENT LIST</button>
        </form>
        <form action="current.txt">
            <button type=submit>VIEW CURRENT</button>
        </form>
    </div>
</body>
</html>
