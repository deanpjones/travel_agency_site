//DEAN JONES
//NOV.07, 2016
//LOADIMAGES.JS
//LOADS IMAGES ON RIGHT SIDE OF (INDEX.PHP) (WITH LINKS) TO PAGE THAT TAB OPENS (AND TIMES OUT CLOSES)

function loadImages()
			{
				var path2 = "images/";
				var images2 = ["101starsky.jpg","102mountains.jpg","103ocean.jpg","104autumn.jpg",
					"105river.jpg","106ocean.jpg","107starsky.jpg","108ocean.jpg","109beach.jpg","110beach.jpg"];

				var links2 = ['http://www.skynews.ca/this-weeks-sky', 
					'http://endlessnature.org/', 
					'http://www.ucluelet-info.com', 
					'https://www.visitnorway.com/plan-your-trip/seasons-climate/autumn/', 
					'http://chinookrafting.com/',
					'https://westcoastsightseeing.com', 
					'http://www.stellarium.org/en_CA/', 
					'http://www.oceanstravel.ca/', 
					'http://www.gohawaii.com/', 
					'http://www.australia.com/en-ca'];

					//var imgString;														//UNDEFINED
				var imgString = "";															//NEED BLANK STRING TO START
					console.log(images2.length);
					console.log(links2.length);
					//console.log(imgString.typeof)
					
					
				imgArrayId = document.getElementById('img-array');							//GETS THE PARENT(ID)
				//BUILD LOOP FOR IMAGES TO LOAD.
					for(i=0; i<images2.length; i++)
					{
					/* imgString += "<a onclick='return open_tab(&apos;" + links2[i] + "&apos;)'" + " target='_blank'>" +
									//<a onclick="open_tab('http://www.gohawaii.com/')" target="_blank">						
							"<img class='resize' src='" + path2 + images2[i] + "' /></a>";
							//<img class="resize" src="images/102mountains.jpg" alt="102mountains.jpg" /></a> */	
							
						//*************************************************************************************************************
						//imgString += "<div id='arr'" + i + " class='arr'><img class='resize' onclick=\"open_tab('" + links2[i] + "')\" src='" + path2 + images2[i] + "' alt='" + images2[i] + "' /></div>";
						imgString += "<div id='arr'" + i + " class='arr'><img class='resize' onclick=\"open_tab('" + links2[i] + "')\" src='" + path2 + images2[i] + "' alt='" + images2[i] + "' style='cursor:pointer;' title='" + links2[i] + "' /></div>";
						//*************************************************************************************************************
						//<img class="resize" onclick="open_tab('http://www.redhat.com')" src="images/101starsky.jpg" alt="101starsky.jpg" />
							
						//imgString += "<div id='arr'" + i + " class='arr'><a href='" + links2[i] + "' target='_blank'>" + 
						//	"<img class='resize' src='" + path2 + images2[i] + "' alt='" + images2[i] + "' style='cursor:pointer;' title='" + links2[i] + "' /></a></div>";	
						
						//------------	
						console.log(imgString);
					}
				imgArrayId.innerHTML = imgString;

			}