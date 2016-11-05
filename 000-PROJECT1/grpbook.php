<!DOCTYPE html> 
<!--http://addtext.com/-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Travel Experts</title>  
     
<style>
#slideshow, img.bgM {
  min-height: 100%;
  min-width: 100%;
  width: 100%;
  height: auto;
  position: fixed;
  top: 50px;
  left: 0;
  z-index:-9999;
}
#wrap {
	  background-color:grey;
	  width:30%;
}
</style>

    
</head>
<body>
<h1>welcome</h1>
    <div id="slideshow">
  <img src="i1.jpg" class="bgM"/>
  <img src="i2.jpg" class="bgM"/>
  <img src="i3.jpg" class="bgM"/>
  <img src="i4.jpg" class="bgM"/>
</div>
<div id="wrap">
<div class="sform">
		   <p>Find Your Favorite Vacation</p>
		 <form class="form-horizontal" action="bouncer.php" method="get">
		    <div class="form-group">
		     <label class="col-sm-4 control-label" for="place">From:</label>
			    <div class="col-sm-7">
			      <select id="place" class="form-control" name="place" >
				     <option  >calgary</option>
					 <option  >toronto</option>
					 <option  >vancouver</option>
				  </select>
			    </div>
			</div>
			<div class="form-group">
			 <label class="col-sm-4 control-label" for="des">To:</label>
			    <div class="col-sm-7">
			      <select id="des" class="form-control" name="des">
				     <option value="ch">China</option>
					 <option value="usa">America</option>
					 <option value="in">India</option>
				  </select>
				</div>
			</div>
			<div class="form-group">
				  <label class="col-sm-4 control-label" for="dpdate">Depart:</label>
				<div class="col-sm-7">
				  <input type="date" class="form-control" name="dpdate" id="dpdate">
				</div>
			</div>
			<div class="form-group">
				  <label class="col-sm-4 control-label" for="back">Back:</label>
				<div class="col-sm-7">
				  <input type="date" class="form-control" name="bdate" id="bdate">
				</div>
			</div>
			
			<div class="form-group">
			    <div class="col-sm-offset-5 col-sm-7">
				  <input type="button" class="btn btn-default" name="submit" value="Book" onClick="myMap()">
				</div>
			</div>
				  
	 </form>
		</div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="jquery.cycle.all.js"></script>
<script>
$(document).ready(function() {
	$('#slideshow').cycle({
	fx: 'fade',
	pager: '#smallnav',
	pause:   1,
	speed: 1800,
	timeout:  1000
	});
});
</script>
</body>
</html>


 