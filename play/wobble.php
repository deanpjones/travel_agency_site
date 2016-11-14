<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
		body > div
        {
            
            margin:121px 149px;
            
            width:500px;
            height:300px;
            
            background:#676470;
            color:#fff;
            
            font-family:Lato;
            font-weight:900;
            font-size:3.4em;
            
            text-align:center;
            line-height:298px;
            
            transition:all 0.3s ease;
            
        }
        
        @-webkit-keyframes wobble
        {
            15%
            {
                -webkit-transform: translateX(5px);
                transform: translateX(5px);
            }
            
            30%
            {
                -webkit-transform: translateX(-5px);
                transform: translateX(-5px);
            }
            
            50%
            {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }
            
            65%
            {
                -webkit-transform: translateX(-3px);
                transform: translateX(-3px);
            }
            
            80%
            {
                -webkit-transform: translateX(2px);
                transform: translateX(2px);
            }
            
            100%
            {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }
        
        @keyframes wobble
        {
            15%
            {
                -webkit-transform: translateX(5px);
                transform: translateX(5px);
            }
            
            30%
            {
                -webkit-transform: translateX(-5px);
                transform: translateX(-5px);
            }
            
            50%
            {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }
            
            65%
            {
                -webkit-transform: translateX(-3px);
                transform: translateX(-3px);
            }
            
            80%
            {
                -webkit-transform: translateX(2px);
                transform: translateX(2px);
            }
            
            100%
            {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }
        
        .wobble:hover
        {
            -webkit-animation: wobble 1s ease;
            animation: wobble 1s ease;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
        }

</style>
</head>
<body>
    <div class="wobble">WOBBLE</div>
</body>
</html>