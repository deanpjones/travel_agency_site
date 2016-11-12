//DEAN JONES
//NOV.07, 2016
//LOADIMAGES2.JS
//LOADS IMAGES ON LEFT SIDE OF (INDEX.PHP) (WITHOUT LINKS)

function loadImages2()
			{
					//------------------------------------
					//------------------------------------
					//IMAGES from Isleofskye.tumblr.com
					var images = ["01bridge_sm.jpg", "02sunset_sm.jpg", "03lake_sm.jpg", "04waterfall_sm.jpg", "05arctic_sm.jpg", "06river_sm.jpg"];
					var img_desc = ["A cyclist on a beautiful bridge on Minnow Lake.", 
									"A sunset at dawn in Hawaii.", 
									"Church of St. John in Newfoundland.", 
									"A glorious waterfall along Johnson's Trail.", 
									"Visit the stunning arctic.", 
									"A more extreme adventure with these rapids."
									];

					//ADD THUMBNAILS, WITH HOVER TO MAKE (ONE) TABLE CELL SHOW FULL SIZE VIEW.
					//
					document.write("<table id='main-img' border='0'>");

					for (var j=0; j<images.length; j++)
					{	
						document.write("<tr>");

							document.write("<td><img src='images/" + images[j] + "'></td>");
							document.write("<td>" + img_desc[j] + "</td>");
						document.write("</tr>");
					}
					document.write("</table>");
					
					function displayImage(index)
					{
						var img = document.getElentById("myimg");
						img.src = myimages[index];
					}
			}
