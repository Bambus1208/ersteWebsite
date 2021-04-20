<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="map created using amCharts pixel map generator" />


		<script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>

		<script type="text/javascript">
		var temp={
			"lat": [50.088, 3.59, 3.59, 26.9261, 26.9261, 45.52, 12.3702, 12.3702, 28.0, 28.0, 31.56, 27.19, 27.19, 19.2, 19.2, 25.45, -23.549, 40.0, 40.0, 22.0, 22.0, 19.11, 17.73, 17.73, 26.5831, 26.5831, 30.75, -32.94, -32.94, -8.8135, -8.8135, -33.867, 35.47, 35.47, 18.53, 18.53, 24.65, 16.0, 35.87, -6.39, 30.91, 41.0, 41.0, 32.0, 32.0, 34.0, -3.78, -3.78, 23.127, 23.127, 14.09, 14.09, -18.89, -6.97, 31.22, 31.22, 30.11, 20.72, -37.81, -37.81, -12.97, -12.97, 53.567, 53.567, 12.95, 9.06, 9.03, 9.03, 26.0, 17.67, 5.56, 5.56, 19.427, 34.68, 34.68, 6.69, 6.69, 36.0, 32.16, 32.0, 38.0, 43.0, 43.0, 38.0, -3.12, -3.12, 34.0, 5.1, 5.1, 33.59, 33.59, -12.093, 20.6596, 20.6596, 8.49, 55.756, 25.32, 25.32, 48.423, 36.77, 36.77, 36.0, 36.0, -30.04, -30.04, 45.48, 4.647, 28.38, 28.38, 34.68, 34.68, 28.67, 28.67, -17.77, -17.77, 12.65, 26.85, 26.85, 20.01, -6.91, 33.575, 44.805, -22.91, -22.91, 55.676, 55.676, 21.16, -5.14, -5.14, -23.46, -23.46, 56.33, 22.573, 22.573, 48.133, 48.133, 30.01, 30.01, 23.71, -31.96, -31.96, 45.0, 45.0, 49.28, 13.09, 13.09, 34.0911, 43.65, 43.65, -26.19, 35.706, 35.706, 31.224, 42.698, 42.698, -22.904, -22.904, -34.93, -34.93, 34.0253, 51.5, 51.5, -2.5, -1.44, -1.44, -22.74, 23.0, 33.0, 33.0, -15.78, -27.46, -27.46, 36.0, 36.0, -0.19, 25.0, 25.0, 31.64, 31.64, -9.65, -9.65, 15.3333, 15.3333, 28.99, 28.99, 12.31, 12.31, 43.06, 43.06, -36.85, 51.05, 30.0, 30.0, -31.4, -31.4, 44.0, -19.92, -19.92, 19.89, 19.05, 26.47, 26.47, 18.4764, 18.4764, 4.06, 4.06, 7.38, 39.908, 39.908, 41.895, 41.895, 55.15, 55.15, 24.86, -25.42, -25.42, 21.2, 39.019, 39.019, -2.9833, -34.61, -34.61, 37.55, 35.15, 30.057, 30.057, 52.523, 52.523, -6.22, 23.03, 23.03, 9.55, 9.55, 19.25, 19.25, 23.36, 6.29, 41.828, 41.828, 43.277, 35.69, 35.69, 22.58, 22.58, 18.9647, 18.9647, 6.34, 3.44, 22.31, 22.31, 34.0, 34.0, -16.72, -16.72, -2.21, -2.21, -8.08, -8.08, 59.939, 59.939, 28.0, 28.0, 5.33, 5.33, 48.857, -33.425, -33.425, -7.24, 40.0, 40.0, 50.95], 
			"long": [14.421, 98.67, 98.67, 75.8089, 75.8089, -73.57, -1.5247, -1.5247, 115.0, 115.0, 74.35, 78.01, 78.01, 72.97, 72.97, 81.84, -46.639, 44.0, 44.0, 108.0, 108.0, 73.06, 83.3, 83.3, 106.7167, 106.7167, 76.78, -60.67, -60.67, 13.2319, 13.2319, 151.207, 139.62, 139.62, 73.84, 73.84, 46.71, 96.0, 139.64, 106.83, 75.84, 44.0, 44.0, 119.0, 119.0, 109.0, -38.59, -38.59, 113.341, 113.341, -87.22, -87.22, 47.51, 110.42, 29.95, 29.95, 31.25, -103.4, 144.96, 144.96, -38.5, -38.5, 10.033, 10.033, 77.6167, 7.49, 38.74, 38.74, 119.0, 75.89, -0.2, -0.2, -99.128, 135.17, 135.17, -1.63, -1.63, 37.0, 74.18, 51.0, 112.0, 125.0, 125.0, 114.0, -60.02, -60.02, 114.0, 7.35, 7.35, 130.41, 130.41, -77.046, -103.3496, -103.3496, 4.55, 37.618, 83.01, 83.01, 35.138, 3.04, 3.04, 104.0, 104.0, -51.22, -51.22, 9.19, -74.096, 77.3, 77.3, 135.5, 135.5, 77.21, 77.21, -63.21, -63.21, -7.99, 80.92, 80.92, 73.78, 107.6, -7.6014, 20.478, -47.08, -47.08, 12.568, 12.568, 79.08, 119.41, 119.41, -46.49, -46.49, 44.0, 88.364, 88.364, 11.567, 11.567, 31.21, 31.21, 90.407, 115.84, 115.84, 126.0, 126.0, -123.13, 80.25, 80.25, 74.8061, -79.38, -79.38, 28.04, 51.436, 51.436, 121.476, 23.322, 23.322, -43.21, -43.21, 138.6, 138.6, -6.8361, -0.126, -0.126, -44.3, -48.5, -48.5, -43.47, 77.0, 107.0, 107.0, -47.91, 153.02, 153.02, 117.0, 117.0, -78.5, 102.0, 102.0, 74.87, 74.87, -35.75, -35.75, 38.9333, 38.9333, 77.7, 77.7, 76.65, 76.65, 141.34, 141.34, 174.7833, -114.06, 125.0, 125.0, -64.19, -64.19, 88.0, -43.94, -43.94, 75.32, -98.22, 80.33, 80.33, -69.8933, -69.8933, 9.71, 9.71, 3.93, 116.398, 116.398, 12.482, 12.482, 61.43, 61.43, 67.01, -49.29, -49.29, 72.82, 125.747, 125.747, 104.75, -58.37, -58.37, 126.997, 136.91, 31.227, 31.227, 13.413, 13.413, 106.97, 72.58, 72.58, -13.67, -13.67, 73.16, 73.16, 85.33, -75.54, 123.416, 123.416, 76.8958, 139.692, 139.692, 88.33, 88.33, 72.8258, 72.8258, 5.62, -76.52, 70.79, 70.79, 69.0, 69.0, -49.26, -49.26, -79.9, -79.9, -34.92, -34.92, 30.316, 30.316, 113.0, 113.0, -4.03, -4.03, 2.351, -70.567, -70.567, 112.74, 49.0, 49.0, 6.95]
			};
			
			var marker = {
				"selectable": true,
				"longitude": [],
				"latitude": [],
				"svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
				"color": "rgba(75,216,181,0.8)",
				"scale": 1
			};
			function showCities() {
				console.log("debug" + temp.lat);
				for (var i = 0; i < temp.long.length; i++) {
					setTimeout(function (i) {
						console.log(temp.long, i, temp.long[i]);
						marker.longitude[0]=temp.long[i];
						marker.latitude[0]=temp.lat[i];
						createMap();
					}, 500 * i, i);
				}
				setTimeout(function () {
					createMap();
				}, 500 * temp.long.length);
            };
			/*
			function showCities() {
                console.log("debug"+temp.lat);
            for (var i = 0; i < temp.long.length; i++) {
				setTimeout(function () {
					const index = i;
                console.log(temp.long ,index,temp.long[index]);
                marker.longitude[i]=temp.long[index];
                marker.latitude.push(temp.lat[index]);
            //document.location.reload(true);
                }, 500);
            }
            };
			
			function showCities() {
				console.log("debug"+temp.lat);
			for (var i = 0; i < temp.long.length; i++) {
				setTimeout(function () {
				console.log(temp.long ,i,temp.long[i]);
				marker.longitude[i]=temp.long[i];
				marker.latitude.push(temp.lat[i]);
			//document.location.reload(true);
				}, 500);
			}
			};	
	
	
			/*
			 		function showCities() {
			for (var i = 0; i <= temp.long.length; i++) {
				marker.longitude[i] = temp.long[i];
				marker.latitude[i] = temp.lat[i];
				await delay(2000);
			}
			};	
			function delay(n) {
				return new Promise(done => {
					setTimeout(() => {
						done();
					}, n);
				});
			};

			function showCities() {
				//setTimeout(function() {
					for (var i = 1; i < temp.long.length; i++) {
						var element={"element":{"selectable": true,
								"longitude": temp.long[i],
								"latitude": temp.lat[i],
								"svgPath": "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123",
								"color": "rgba(75,216,181,0.8)",
								"scale": 1}};
								marker.push(","+element);
								} 
								location.reload();
							
				//}, 500);
			};		
			
			var longitude;
			var latitude;
			var selectable = false;
			var svgPath = "M3.5,13.277C3.5,6.22,9.22,0.5,16.276,0.5C23.333,0.5,29.053,6.22,29.053,13.277C29.053,14.54,28.867,15.759,28.526,16.914C26.707,24.271,16.219,32.5,16.219,32.5C16.219,32.5,4.37,23.209,3.673,15.542C3.673,15.542,3.704,15.536,3.704,15.536C3.572,14.804,3.5,14.049,3.5,13.277C3.5,13.277,3.5,13.277,3.5,13.277M16.102,16.123C18.989,16.123,21.329,13.782,21.329,10.895C21.329,8.008,18.989,5.668,16.102,5.668C13.216,5.668,10.876,8.008,10.876,10.895C10.876,13.782,13.216,16.123,16.102,16.123C16.102,16.123,16.102,16.123,16.102,16.123";
			var color = rgba(35,77,128,1);
			var scale = 1;
			var pointers = [];
			var imageSeries = chart.series.push(new am4maps.MapImageSeries());
			for (var i = 0; i < temp.long.length; i++) {
				imageSeries.data = [{
					"latitude": temp.lat[i],
					"longitude": temp.long[i],
				}];
			}

			class Pointer {

				constructor(pLatitude, pLongitude) {
					this.latitude = pLatitude;
					this.longitude = pLongitude;
				} 
				show() {
					this.color = rgba(75, 216, 181, 0.8);
				}
			}

			for (var i = 0; i < temp.long.length; i++) {
				pointers.push(new Pointer(temp.lat[i])(temp.long[i]));
			} 

			function showCities() {
				pointers.forEach(function(p) {p.show() });
			}*/
			</script>
			<script type="text/javascript">
				function createMap() {
					AmCharts.makeChart("map",{
					"type": "map",
					"pathToImages": "http://www.amcharts.com/lib/3/images/",
					"addClassNames": true,
					"fontSize": 15,
					"color": "#000000",
					"projection": "miller",
					"backgroundAlpha": 1,
					"backgroundColor": "rgba(35,77,128,1)",
					"dataProvider": {
						"map": "worldLow",
						"getAreasFromMap": true,
						"images": [
							{
								"top": 40,
								"left": 60,
								"width": 80,
								"height": 40,
								"pixelMapperLogo": true,
								"imageURL": "http://pixelmap.amcharts.com/static/img/logo-black.svg",
								"url": "http://www.amcharts.com"
							},

							marker
						]
					},
					"balloon": {
						"horizontalPadding": 15,
						"borderAlpha": 0,
						"borderThickness": 1,
						"verticalPadding": 15
					},
					"areasSettings": {
						"color": "rgba(129,129,129,1)",
						"outlineColor": "rgba(35,77,128,1)",
						"rollOverOutlineColor": "rgba(35,77,128,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true,
						"unlistedAreasAlpha": 0,
						"unlistedAreasOutlineAlpha": 0
					},
					"imagesSettings": {
						"alpha": 1,
						"color": "rgba(129,129,129,1)",
						"outlineAlpha": 0,
						"rollOverOutlineAlpha": 0,
						"outlineColor": "rgba(35,77,128,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true
					},
					"linesSettings": {
						"color": "rgba(129,129,129,1)",
						"selectable": true,
						"rollOverBrightness": 20,
						"selectedBrightness": 20
					},
					"zoomControl": {
						"zoomControlEnabled": true,
						"homeButtonEnabled": false,
						"panControlEnabled": false,
						"right": 38,
						"bottom": 30,
						"minZoomLevel": 0.25,
						"gridHeight": 100,
						"gridAlpha": 0.1,
						"gridBackgroundAlpha": 0,
						"gridColor": "#FFFFFF",
						"draggerAlpha": 1,
						"buttonCornerRadius": 2
					}
				});
				};
				createMap();
		</script>
	</head>
	<body style="margin: 0;background-color: rgba(35,77,128,1);">
		 <button onclick=showCities()>Start Animation</button> 
		 <!-- <button onclick=document.location.reload()>Reload</button> -->
		<div id="map" style="width: 100%; height: 966px;"></div>
	</body>
</html>