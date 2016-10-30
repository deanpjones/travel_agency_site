function loadImages()
			{
				var path2 = "images/";
				var images2 = ["101starsky.jpg","102mountains.jpg","103ocean.jpg","104autumn.jpg",
					"105river.jpg","106ocean.jpg","107starsky.jpg","108ocean.jpg","109beach.jpg","110beach.jpg"];
//FIX LINKS
				var links2 = ["http://www.redhat.com", 
					"http://www.redhat.com", 
					"http://www.ucluelet-info.com", 
					"http://www.redhat.com", 
					"http://www.redhat.com",
					"https://westcoastsightseeing.com", 
					"http://www.redhat.com", 
					"http://www.redhat.com", 
					"http://www.redhat.com", 
					"http://www.redhat.com"];

					//var imgString;															//UNDEFINED
				var imgString = "";															//NEED BLANK STRING TO START
					console.log(images2.length);
					console.log(links2.length);
					//console.log(imgString.typeof)
				imgArrayId = document.getElementById('img-array');							//GETS THE PARENT(ID)
				
					//BUILD LOOP FOR IMAGES TO LOAD.
					for(i=0; i<images2.length; i++)
					{
						//imgString = "<a href='" + links2[i] + "' target='_blank'>" + 		//DON'T USE (=) IT'S OVERWRITING
						imgString += "<a href='" + links2[i] + "' target='_blank'>" + 
							"<img class='resize' src='" + path2 + images2[i] + "' alt='" + images2[i] + "' /></a><br />";
						console.log(imgString);
					}
				imgArrayId.innerHTML = imgString;
				//<a href='http://www.redhat.com' target="_blank"><img class="resize" src="images/101starsky.jpg" alt="101starsky.jpg" /></a>
			}