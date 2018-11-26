window.onload = function(e)
{

	var mymap = L.map('mapid').setView([40.875770, -124.078639], 18);

//var zoomLevel = 13;
//var xCoordinate = 40.875770;
//var yCoordinate = -124.078639; 

/*
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={pk.eyJ1IjoiYmFrZWRub3RmcmllZDEyNSIsImEiOiJjam5nZTN4cjEwMjdlM3FucjRxcW1teXRuIn0.yZ53U04Y-hb31wLfEpC5jg}', 
{
	id: 'mapbox.streets'
}).addTo(mymap);

*/

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 20,
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
				'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox.streets'
		}).addTo(mymap);
	
//----------------------------------------------------------------------------		
// Event Listeners
//----------------------------------------------------------------------------	

	var loggedMeter = mymap.on('click');
	
	console.log(loggedMeter.value);
	
	//var loggedString = JSON.stringify(loggedMeter);
	
	//console.log(loggedString);
	
	/*
	function log(meter)
	{
		console.log(meter);
		
	}

	*/
//----------------------------------------------------------------------------	
// Close Event Listeners
//----------------------------------------------------------------------------	

	
//----------------------------------------------------------------------------	
// Parking Meter location codes:
//
// 0: North Campus 		0001-0000
// 1: Library			1001-1000
// 2: Center Campus		2001-2038
// 3: East Campus		3001-3041
// 4: South Campus		4001-4078
//
// Description: Marker points for each parking meter on campus
//----------------------------------------------------------------------------

//----------------------------------------------------------------------------
// Center Campus
//----------------------------------------------------------------------------

	var meter2001 = L.marker([40.874829, -124.079730]).addTo(mymap)
		.bindPopup('Meter ID: 2001');	
		
	var meter2002 = L.marker([40.874778, -124.079730]).addTo(mymap)
		.bindPopup('Meter ID: 2002');
		
	var meter2003 = L.marker([40.874648, -124.079732]).addTo(mymap)
		.bindPopup('Meter ID: 2003');

	var meter2004 = L.marker([40.874605, -124.079731]).addTo(mymap)
		.bindPopup('Meter ID: 2004');	
	
	var meter2005 = L.marker([40.874775, -124.079616]).addTo(mymap)
		.bindPopup('Meter ID: 2005');	
	
	var meter2006 = L.marker([40.874730, -124.079617]).addTo(mymap)
		.bindPopup('Meter ID: 2006');	
	
	var meter2007 = L.marker([40.874316, -124.079620]).addTo(mymap)
		.bindPopup('Meter ID: 2007');

	var meter2008 = L.marker([40.874227, -124.079514]).addTo(mymap)
		.bindPopup('Meter ID: 2008');	
	
	var meter2009 = L.marker([40.874226, -124.079448]).addTo(mymap)
		.bindPopup('Meter ID: 2009');	
	
	var meter2010 = L.marker([40.874224, -124.079370]).addTo(mymap)
		.bindPopup('Meter ID: 2010');	
	
	var meter2011 = L.marker([40.874225, -124.079295]).addTo(mymap)
		.bindPopup('Meter ID: 2011');	
	
	var meter2012 = L.marker([40.874227, -124.079223]).addTo(mymap)
		.bindPopup('Meter ID: 2012');	
	
	var meter2013 = L.marker([40.875433, -124.078647]).addTo(mymap)
		.bindPopup('Meter ID: 2013');

	var meter2014 = L.marker([40.875372, -124.078644]).addTo(mymap)
		.bindPopup('Meter ID: 2014');	
	
	var meter2015 = L.marker([40.875305, -124.078646]).addTo(mymap)
		.bindPopup('Meter ID: 2015');	
	
	var meter2016 = L.marker([40.875168, -124.078646]).addTo(mymap)
		.bindPopup('Meter ID: 2016');	
	
	var meter2017 = L.marker([40.875099, -124.078646]).addTo(mymap)
		.bindPopup('Meter ID: 2017');	
	
	var meter2018 = L.marker([40.875046, -124.078654]).addTo(mymap)
		.bindPopup('Meter ID: 2018');	
	
	var meter2019 = L.marker([40.874980, -124.078648]).addTo(mymap)
		.bindPopup('Meter ID: 2019');

	var meter2020 = L.marker([40.874920, -124.078661]).addTo(mymap)
		.bindPopup('Meter ID: 2020');	
	
	var meter2021 = L.marker([40.874857, -124.078651]).addTo(mymap)
		.bindPopup('Meter ID: 2021');	
	
	var meter2022 = L.marker([40.874793, -124.078650]).addTo(mymap)
		.bindPopup('Meter ID: 2022');	
	
	var meter2023 = L.marker([40.875629, -124.078525]).addTo(mymap)
		.bindPopup('Meter ID: 2023');	
	
	var meter2024 = L.marker([40.875571, -124.078524]).addTo(mymap)
		.bindPopup('Meter ID: 2024');	
	
	var meter2025 = L.marker([40.875502, -124.078526]).addTo(mymap)
		.bindPopup('Meter ID: 2025');

	var meter2026 = L.marker([40.875336, -124.078527]).addTo(mymap)
		.bindPopup('Meter ID: 2026');	
	
	var meter2027 = L.marker([40.875280, -124.078527]).addTo(mymap)
		.bindPopup('Meter ID: 2027');	
	
	var meter2028 = L.marker([40.875090, -124.078530]).addTo(mymap)
		.bindPopup('Meter ID: 2028');	
	
	var meter2029 = L.marker([40.875037, -124.078527]).addTo(mymap)
		.bindPopup('Meter ID: 2029');	
	
	var meter2030 = L.marker([40.874876, -124.078531]).addTo(mymap)
		.bindPopup('Meter ID: 2030');	
	
	var meter2031 = L.marker([40.874829, -124.078528]).addTo(mymap)
		.bindPopup('Meter ID: 2031');

	var meter2032 = L.marker([40.874769, -124.078529]).addTo(mymap)
		.bindPopup('Meter ID: 2032');	
	
	var meter2033 = L.marker([40.874717, -124.078531]).addTo(mymap)
		.bindPopup('Meter ID: 2033');	
	
	var meter2034 = L.marker([40.874650, -124.078534]).addTo(mymap)
		.bindPopup('Meter ID: 2034');	
	
	var meter2035 = L.marker([40.874583, -124.078529]).addTo(mymap)
		.bindPopup('Meter ID: 2035');	
	
	var meter2036 = L.marker([40.874528, -124.078532]).addTo(mymap)
		.bindPopup('Meter ID: 2036');	
	
	var meter2037 = L.marker([40.874420, -124.078530]).addTo(mymap)
		.bindPopup('Meter ID: 2037');

	var meter2038 = L.marker([40.874366, -124.078530]).addTo(mymap)
		.bindPopup('Meter ID: 2038');
//----------------------------------------------------------------------------

//----------------------------------------------------------------------------
// East Campus
//----------------------------------------------------------------------------

	var meter3001 = L.marker([40.874478, -124.075829]).addTo(mymap)
		.bindPopup('Meter ID: 3001');

	var meter3002 = L.marker([40.874420, -124.075845]).addTo(mymap)
		.bindPopup('Meter ID: 3002');

	var meter3003 = L.marker([40.874379, -124.075862]).addTo(mymap)
		.bindPopup('Meter ID: 3003');

	var meter3004 = L.marker([40.874334, -124.075882]).addTo(mymap)
		.bindPopup('Meter ID: 3004');

	var meter3005 = L.marker([40.874207, -124.075931]).addTo(mymap)
		.bindPopup('Meter ID: 3005');

	var meter3006 = L.marker([40.874158, -124.075947]).addTo(mymap)
		.bindPopup('Meter ID: 3006');
	
	var meter3007 = L.marker([40.874113, -124.075958]).addTo(mymap)
		.bindPopup('Meter ID: 3007');

	var meter3008 = L.marker([40.874069, -124.075972]).addTo(mymap)
		.bindPopup('Meter ID: 3008');

	var meter3009 = L.marker([40.874021, -124.075986]).addTo(mymap)
		.bindPopup('Meter ID: 3009');

	var meter3010 = L.marker([40.873965, -124.076025]).addTo(mymap)
		.bindPopup('Meter ID: 3010');
	
	var meter3011 = L.marker([40.873868, -124.076049]).addTo(mymap)
		.bindPopup('Meter ID: 3011');
	
	var meter3012 = L.marker([40.873826, -124.076068]).addTo(mymap)
		.bindPopup('Meter ID: 3012');

	var meter3013 = L.marker([40.873763, -124.076100]).addTo(mymap)
		.bindPopup('Meter ID: 3013');
	
//----------------------------------------------------------------------------

	var meter3014 = L.marker([40.874257, -124.075801]).addTo(mymap)
		.bindPopup('Meter ID: 3014');

	var meter3015 = L.marker([40.874221, -124.075816]).addTo(mymap)
		.bindPopup('Meter ID: 3015');

	var meter3016 = L.marker([40.874183, -124.075839]).addTo(mymap)
		.bindPopup('Meter ID: 3016');

	var meter3017 = L.marker([40.874143, -124.075863]).addTo(mymap)
		.bindPopup('Meter ID: 3017');

	var meter3018 = L.marker([40.874105, -124.075874]).addTo(mymap)
		.bindPopup('Meter ID: 3018');

	var meter3019 = L.marker([40.874028, -124.075884]).addTo(mymap)
		.bindPopup('Meter ID: 3019');

	var meter3020 = L.marker([40.873965, -124.075900]).addTo(mymap)
		.bindPopup('Meter ID: 3020');

	var meter3021 = L.marker([40.873921, -124.075920]).addTo(mymap)
		.bindPopup('Meter ID: 3021');

	var meter3022 = L.marker([40.873866, -124.075941]).addTo(mymap)
		.bindPopup('Meter ID: 3022');

	var meter3023 = L.marker([40.873811, -124.075960]).addTo(mymap)
		.bindPopup('Meter ID: 3023');

	var meter3024 = L.marker([40.873756, -124.075983]).addTo(mymap)
		.bindPopup('Meter ID: 3024');

	var meter3025 = L.marker([40.873699, -124.076005]).addTo(mymap)
		.bindPopup('Meter ID: 3025');

//----------------------------------------------------------------------------
	
	var meter3026 = L.marker([40.873455, -124.076213]).addTo(mymap)
		.bindPopup('Meter ID: 3026');

	var meter3027 = L.marker([40.873403, -124.076236]).addTo(mymap)
		.bindPopup('Meter ID: 3027');

	var meter3028 = L.marker([40.873349, -124.076252]).addTo(mymap)
		.bindPopup('Meter ID: 3028');

	var meter3029 = L.marker([40.873296, -124.076274]).addTo(mymap)
		.bindPopup('Meter ID: 3029');

	var meter3030 = L.marker([40.873244, -124.076295]).addTo(mymap)
		.bindPopup('Meter ID: 3030');

	var meter3031 = L.marker([40.873179, -124.076319]).addTo(mymap)
		.bindPopup('Meter ID: 3031');

	var meter3032 = L.marker([40.873122, -124.076341]).addTo(mymap)
		.bindPopup('Meter ID: 3032');

	var meter3033 = L.marker([40.873065, -124.076362]).addTo(mymap)
		.bindPopup('Meter ID: 3033');

	var meter3034 = L.marker([40.873011, -124.076384]).addTo(mymap)
		.bindPopup('Meter ID: 3034');

	var meter3035 = L.marker([40.872955, -124.076400]).addTo(mymap)
		.bindPopup('Meter ID: 3035');
	
	var meter3036 = L.marker([40.872741, -124.076480]).addTo(mymap)
		.bindPopup('Meter ID: 3036');
	
	var meter3037 = L.marker([40.872689, -124.076504]).addTo(mymap)
		.bindPopup('Meter ID: 3037');

	var meter3038 = L.marker([40.872632, -124.076519]).addTo(mymap)
		.bindPopup('Meter ID: 3038');

	var meter3039 = L.marker([40.872573, -124.076544]).addTo(mymap)
		.bindPopup('Meter ID: 3039');

	var meter3040 = L.marker([40.872515, -124.076564]).addTo(mymap)
		.bindPopup('Meter ID: 3040');

	var meter3041 = L.marker([40.872465, -124.076586]).addTo(mymap)
		.bindPopup('Meter ID: 3041');

//----------------------------------------------------------------------------	
	
//----------------------------------------------------------------------------
// South Campus
//----------------------------------------------------------------------------

	var meter4001 = L.marker([40.871327, -124.077364]).addTo(mymap)
		.bindPopup('Meter ID: 4001');

	var meter4002 = L.marker([40.871343, -124.077433]).addTo(mymap)
		.bindPopup('Meter ID: 4002');

	var meter4003 = L.marker([40.871360, -124.077504]).addTo(mymap)
		.bindPopup('Meter ID: 4003');
	
	var meter4004 = L.marker([40.871374, -124.077572]).addTo(mymap)
		.bindPopup('Meter ID: 4004');

	var meter4005 = L.marker([40.871388, -124.077638]).addTo(mymap)
		.bindPopup('Meter ID: 4005');

	var meter4006 = L.marker([40.871403, -124.077713]).addTo(mymap)
		.bindPopup('Meter ID: 4006');

	var meter4007 = L.marker([40.871414, -124.077768]).addTo(mymap)
		.bindPopup('Meter ID: 4007');
	
	var meter4008 = L.marker([40.871434, -124.077830]).addTo(mymap)
		.bindPopup('Meter ID: 4008');

	var meter4009 = L.marker([40.871502, -124.078159]).addTo(mymap)
		.bindPopup('Meter ID: 4009');

	var meter4010 = L.marker([40.871516, -124.078236]).addTo(mymap)
		.bindPopup('Meter ID: 4010');

	var meter4011 = L.marker([40.871531, -124.078305]).addTo(mymap)
		.bindPopup('Meter ID: 4011');

	var meter4012 = L.marker([40.871548, -124.078367]).addTo(mymap)
		.bindPopup('Meter ID: 4012');

	var meter4013 = L.marker([40.871582, -124.078534]).addTo(mymap)
		.bindPopup('Meter ID: 4013');

	var meter4014 = L.marker([40.871596, -124.078599]).addTo(mymap)
		.bindPopup('Meter ID: 4014');

	var meter4015 = L.marker([40.871610, -124.078666]).addTo(mymap)
		.bindPopup('Meter ID: 4015');

	var meter4016 = L.marker([40.871625, -124.078742]).addTo(mymap)
		.bindPopup('Meter ID: 4016');

	var meter4017 = L.marker([40.871642, -124.078807]).addTo(mymap)
		.bindPopup('Meter ID: 4017');

	var meter4018 = L.marker([40.871654, -124.078872]).addTo(mymap)
		.bindPopup('Meter ID: 4018');

	var meter4019 = L.marker([40.871765, -124.079353]).addTo(mymap)
		.bindPopup('Meter ID: 4019');
	
	var meter4020 = L.marker([40.871778, -124.079429]).addTo(mymap)
		.bindPopup('Meter ID: 4020');

	var meter4021 = L.marker([40.871778, -124.079429]).addTo(mymap)
		.bindPopup('Meter ID: 4021');

	var meter4022 = L.marker([40.871811, -124.079583]).addTo(mymap)
		.bindPopup('Meter ID: 4022');

	var meter4023 = L.marker([40.871831, -124.079656]).addTo(mymap)
		.bindPopup('Meter ID: 4023');
	
	var meter4024 = L.marker([40.871844, -124.079730]).addTo(mymap)
		.bindPopup('Meter ID: 4024');

	var meter4025 = L.marker([40.871862, -124.079810]).addTo(mymap)
		.bindPopup('Meter ID: 4025');

	var meter4026 = L.marker([40.871876, -124.079877]).addTo(mymap)
		.bindPopup('Meter ID: 4026');
	
	var meter4027 = L.marker([40.871889, -124.079931]).addTo(mymap)
		.bindPopup('Meter ID: 4027');

	var meter4028 = L.marker([40.871914, -124.080047]).addTo(mymap)
		.bindPopup('Meter ID: 4028');

	var meter4029 = L.marker([40.871929, -124.080111]).addTo(mymap)
		.bindPopup('Meter ID: 4029');

	var meter4030 = L.marker([40.871943, -124.080176]).addTo(mymap)
		.bindPopup('Meter ID: 4030');
	
	var meter4031 = L.marker([40.871957, -124.080248]).addTo(mymap)
		.bindPopup('Meter ID: 4031');

	var meter4032 = L.marker([40.871973, -124.080317]).addTo(mymap)
		.bindPopup('Meter ID: 4032');

	var meter4033 = L.marker([40.871989, -124.080396]).addTo(mymap)
		.bindPopup('Meter ID: 4033');

	var meter4034 = L.marker([40.872004, -124.080465]).addTo(mymap)
		.bindPopup('Meter ID: 4034');
	
	var meter4035 = L.marker([40.872018, -124.080536]).addTo(mymap)
		.bindPopup('Meter ID: 4035');

	var meter4036 = L.marker([40.872077, -124.080808]).addTo(mymap)
		.bindPopup('Meter ID: 4036');

	var meter4037 = L.marker([40.872094, -124.080879]).addTo(mymap)
		.bindPopup('Meter ID: 4037');

	var meter4038 = L.marker([40.872112, -124.080948]).addTo(mymap)
		.bindPopup('Meter ID: 4038');
	
	var meter4039 = L.marker([40.872147, -124.081083]).addTo(mymap)
		.bindPopup('Meter ID: 4039');

	var meter4040 = L.marker([40.872166, -124.081154]).addTo(mymap)
		.bindPopup('Meter ID: 4040');

	var meter4041 = L.marker([40.872184, -124.081220]).addTo(mymap)
		.bindPopup('Meter ID: 4041');

	var meter4042 = L.marker([40.872088, -124.081257]).addTo(mymap)
		.bindPopup('Meter ID: 4042');
	
	var meter4043 = L.marker([40.872071, -124.081187]).addTo(mymap)
		.bindPopup('Meter ID: 4043');

	var meter4044 = L.marker([40.872057, -124.081112]).addTo(mymap)
		.bindPopup('Meter ID: 4044');

	var meter4045 = L.marker([40.871911, -124.080436]).addTo(mymap)
		.bindPopup('Meter ID: 4045');

	var meter4046 = L.marker([40.871893, -124.080362]).addTo(mymap)
		.bindPopup('Meter ID: 4046');
	
	var meter4047 = L.marker([40.871880, -124.080293]).addTo(mymap)
		.bindPopup('Meter ID: 4047');

	var meter4048 = L.marker([40.871808, -124.079973]).addTo(mymap)
		.bindPopup('Meter ID: 4048');

	var meter4049 = L.marker([40.871792, -124.079895]).addTo(mymap)
		.bindPopup('Meter ID: 4049');

	var meter4050 = L.marker([40.871776, -124.079828]).addTo(mymap)
		.bindPopup('Meter ID: 4050');
	
	var meter4051 = L.marker([40.871760, -124.079755]).addTo(mymap)
		.bindPopup('Meter ID: 4051');

	var meter4052 = L.marker([40.871745, -124.079686]).addTo(mymap)
		.bindPopup('Meter ID: 4052');

	var meter4053 = L.marker([40.871731, -124.079615]).addTo(mymap)
		.bindPopup('Meter ID: 4053');

	var meter4054 = L.marker([40.871713, -124.080134]).addTo(mymap)
		.bindPopup('Meter ID: 4054');
	
	var meter4055 = L.marker([40.871658, -124.080154]).addTo(mymap)
		.bindPopup('Meter ID: 4055');

	var meter4056 = L.marker([40.871607, -124.080175]).addTo(mymap)
		.bindPopup('Meter ID: 4056');
	
	var meter4057 = L.marker([40.871542, -124.080200]).addTo(mymap)
		.bindPopup('Meter ID: 4057');	
	
	var meter4058 = L.marker([40.871491, -124.080218]).addTo(mymap)
		.bindPopup('Meter ID: 4058');	
	
	var meter4059 = L.marker([40.871431, -124.080241]).addTo(mymap)
		.bindPopup('Meter ID: 4059');	
	
	var meter4060 = L.marker([40.871373, -124.080263]).addTo(mymap)
		.bindPopup('Meter ID: 4060');

	var meter4061 = L.marker([40.871308, -124.080286]).addTo(mymap)
		.bindPopup('Meter ID: 4061');
	
	var meter4062 = L.marker([40.871257, -124.080307]).addTo(mymap)
		.bindPopup('Meter ID: 4062');	
	
	var meter4063 = L.marker([40.871205, -124.080326]).addTo(mymap)
		.bindPopup('Meter ID: 4063');	
	
	var meter4064 = L.marker([40.871090, -124.080214]).addTo(mymap)
		.bindPopup('Meter ID: 4064');		
	
	var meter4065 = L.marker([40.871076, -124.080141]).addTo(mymap)
		.bindPopup('Meter ID: 4065');

	var meter4066 = L.marker([40.871060, -124.080069]).addTo(mymap)
		.bindPopup('Meter ID: 4066');
	
	var meter4067 = L.marker([40.870979, -124.079694]).addTo(mymap)
		.bindPopup('Meter ID: 4067');	
	
	var meter4068 = L.marker([40.870966, -124.079627]).addTo(mymap)
		.bindPopup('Meter ID: 4068');	
	
	var meter4069 = L.marker([40.870989, -124.079391]).addTo(mymap)
		.bindPopup('Meter ID: 4069');		
	
	var meter4070 = L.marker([40.871034, -124.079376]).addTo(mymap)
		.bindPopup('Meter ID: 4070');		
	
	var meter4071 = L.marker([40.871082, -124.079356]).addTo(mymap)
		.bindPopup('Meter ID: 4071');		
		
	var meter4072 = L.marker([40.871130, -124.079338]).addTo(mymap)
		.bindPopup('Meter ID: 4072');		
		
	var meter4073 = L.marker([40.871185, -124.079321]).addTo(mymap)
		.bindPopup('Meter ID: 4073');		
		
	var meter4074 = L.marker([40.871232, -124.079299]).addTo(mymap)
		.bindPopup('Meter ID: 4074');		
	
	var meter4075 = L.marker([40.871382, -124.079244]).addTo(mymap)
		.bindPopup('Meter ID: 4075');		
	
	var meter4076 = L.marker([40.871441, -124.079223]).addTo(mymap)
		.bindPopup('Meter ID: 4076');		
	
	var meter4077 = L.marker([40.871491, -124.079204]).addTo(mymap)
		.bindPopup('Meter ID: 4077');		
	
	var meter4078 = L.marker([40.871541, -124.079186]).addTo(mymap)
		.bindPopup('Meter ID: 4078');		
	
//----------------------------------------------------------------------------
// Close Parking Meters
//----------------------------------------------------------------------------


//----------------------------------------------------------------------------
// Click Events for Meters
//
// Description: Click event listener that will give a value of meter number
// when clicked on.
//----------------------------------------------------------------------------

    meter2001.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2001"
      console.log("2001");
   });

   meter2002.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2002"
      console.log("2002");
   });

   meter2003.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2003"
      console.log("2003");
   });

   meter2004.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2004"
      console.log("2004");
   });

   meter2005.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2005"
      console.log("2005");
   });

   meter2006.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2006"
      console.log("2006");
   });

   meter2007.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2007"
      console.log("2007");
   });

   meter2008.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2008"
      console.log("2008");
   });

   meter2009.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2009"
      console.log("2009");
   });

   meter2010.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2010"
      console.log("2010");
   });

   meter2011.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2011"
      console.log("2011");
   });

   meter2012.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2012"
      console.log("2012");
   });

   meter2013.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2013"
      console.log("2013");
   });

   meter2014.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2014"
      console.log("2014");
   });

   meter2015.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2015"
      console.log("2015");
   });

   meter2016.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2016"
      console.log("2016");
   });

   meter2017.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2017"
      console.log("2017");
   });

   meter2018.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2018"
      console.log("2018");
   });

   meter2019.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2019"
      console.log("2019");
   });

   meter2020.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2020"
      console.log("2020");
   });

   meter2021.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2021"
      console.log("2021");
   });

   meter2022.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2022"
      console.log("2022");
   });

   meter2023.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2023"
      console.log("2023");
   });

   meter2024.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2024"
      console.log("2024");
   });

   meter2025.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2025"
      console.log("2025");
   });

   meter2026.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2026"
      console.log("2026");
   });

   meter2027.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2027"
      console.log("2027");
   });

   meter2028.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2028"
      console.log("2028");
   });

   meter2029.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2029"
      console.log("2029");
   });

   meter2030.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2030"
      console.log("2030");
   });

   meter2031.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2031"
      console.log("2031");
   });

   meter2032.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2032"
      console.log("2032");
   });

   meter2033.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2033"
      console.log("2033");
   });

   meter2034.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2034"
      console.log("2034");
   });

   meter2035.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2035"
      console.log("2035");
   });

   meter2036.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2036"
      console.log("2036");
   });

   meter2037.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2037"
      console.log("2037");
   });

   meter2038.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "2038"
      console.log("2038");
   });

   meter3001.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3001"
      console.log("3001");
   });

   meter3002.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3002"
      console.log("3002");
   });

   meter3003.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3003"
      console.log("3003");
   });

   meter3004.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3004"
      console.log("3004");
   });

   meter3005.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3005"
      console.log("3005");
   });

   meter3006.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3006"
      console.log("3006");
   });

   meter3007.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3007"
      console.log("3007");
   });

   meter3008.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3008"
      console.log("3008");
   });

   meter3009.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3009"
      console.log("3009");
   });

   meter3010.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3010"
      console.log("3010");
   });

   meter3011.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3011"
      console.log("3011");
   });

   meter3012.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3012"
      console.log("3012");
   });

   meter3013.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3013"
      console.log("3013");
   });

   meter3014.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3014"
      console.log("3014");
   });

   meter3015.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3015"
      console.log("3015");
   });

   meter3016.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3016"
      console.log("3016");
   });

   meter3017.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3017"
      console.log("3017");
   });

   meter3018.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3018"
      console.log("3018");
   });

   meter3019.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3019"
      console.log("3019");
   });

   meter3020.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3020"
      console.log("3020");
   });

   meter3021.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3021"
      console.log("3021");
   });

   meter3022.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3022"
      console.log("3022");
   });

   meter3023.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3023"
      console.log("3023");
   });

   meter3024.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3024"
      console.log("3024");
   });

   meter3025.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3025"
      console.log("3025");
   });

   meter3026.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3026"
      console.log("3026");
   });

   meter3027.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3027"
      console.log("3027");
   });

   meter3028.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3028"
      console.log("3028");
   });

   meter3029.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3029"
      console.log("3029");
   });

   meter3030.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3030"
      console.log("3030");
   });

   meter3031.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3031"
      console.log("3031");
   });

   meter3032.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3032"
      console.log("3032");
   });

   meter3033.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3033"
      console.log("3033");
   });

   meter3034.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3034"
      console.log("3034");
   });

   meter3035.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3035"
      console.log("3035");
   });

   meter3036.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3036"
      console.log("3036");
   });

   meter3037.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3037"
      console.log("3037");
   });

   meter3038.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3038"
      console.log("3038");
   });

   meter3039.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3039"
      console.log("3039");
   });

   meter3040.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3040"
      console.log("3040");
   });

   meter3041.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "3041"
      console.log("3041");
   });

   meter4001.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4001"
      console.log("4001");
   });

   meter4002.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4002"
      console.log("4002");
   });

   meter4003.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4003"
      console.log("4003");
   });

   meter4004.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4004"
      console.log("4004");
   });

   meter4005.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4005"
      console.log("4005");
   });

   meter4006.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4006"
      console.log("4006");
   });

   meter4007.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4007"
      console.log("4007");
   });

   meter4008.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4008"
      console.log("4008");
   });

   meter4009.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4009"
      console.log("4009");
   });

   meter4010.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4010"
      console.log("4010");
   });

   meter4011.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4011"
      console.log("4011");
   });

   meter4012.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4012"
      console.log("4012");
   });

   meter4013.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4013"
      console.log("4013");
   });

   meter4014.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4014"
      console.log("4014");
   });

   meter4015.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4015"
      console.log("4015");
   });

   meter4016.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4016"
      console.log("4016");
   });

   meter4017.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4017"
      console.log("4017");
   });

   meter4018.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4018"
      console.log("4018");
   });

   meter4019.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4019"
      console.log("4019");
   });

   meter4020.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4020"
      console.log("4020");
   });

   meter4021.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4021"
      console.log("4021");
   });

   meter4022.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4022"
      console.log("4022");
   });

   meter4023.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4023"
      console.log("4023");
   });

   meter4024.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4024"
      console.log("4024");
   });

   meter4025.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4025"
      console.log("4025");
   });

   meter4026.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4026"
      console.log("4026");
   });

   meter4027.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4027"
      console.log("4027");
   });

   meter4028.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4028"
      console.log("4028");
   });

   meter4029.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4029"
      console.log("4029");
   });

   meter4030.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4030"
      console.log("4030");
   });

   meter4031.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4031"
      console.log("4031");
   });

   meter4032.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4032"
      console.log("4032");
   });

   meter4033.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4033"
      console.log("4033");
   });

   meter4034.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4034"
      console.log("4034");
   });

   meter4035.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4035"
      console.log("4035");
   });

   meter4036.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4036"
      console.log("4036");
   });

   meter4037.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4037"
      console.log("4037");
   });

   meter4038.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4038"
      console.log("4038");
   });

   meter4039.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4039"
      console.log("4039");
   });

   meter4040.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4040"
      console.log("4040");
   });

   meter4041.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4041"
      console.log("4041");
   });

   meter4042.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4042"
      console.log("4042");
   });

   meter4043.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4043"
      console.log("4043");
   });

   meter4044.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4044"
      console.log("4044");
   });

   meter4045.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4045"
      console.log("4045");
   });

   meter4046.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4046"
      console.log("4046");
   });

   meter4047.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4047"
      console.log("4047");
   });

   meter4048.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4048"
      console.log("4048");
   });

   meter4049.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4049"
      console.log("4049");
   });

   meter4050.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4050"
      console.log("4050");
   });

   meter4051.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4051"
      console.log("4051");
   });

   meter4052.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4052"
      console.log("4052");
   });

   meter4053.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4053"
      console.log("4053");
   });

   meter4054.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4054"
      console.log("4054");
   });

   meter4055.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4055"
      console.log("4055");
   });

   meter4056.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4056"
      console.log("4056");
   });

   meter4057.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4057"
      console.log("4057");
   });

   meter4058.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4058"
      console.log("4058");
   });

   meter4059.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4059"
      console.log("4059");
   });

   meter4060.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4060"
      console.log("4060");
   });

   meter4061.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4061"
      console.log("4061");
   });

   meter4062.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4062"
      console.log("4062");
   });

   meter4063.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4063"
      console.log("4063");
   });

   meter4064.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4064"
      console.log("4064");
   });

   meter4065.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4065"
      console.log("4065");
   });

   meter4066.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4066"
      console.log("4066");
   });

   meter4067.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4067"
      console.log("4067");
   });

   meter4068.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4068"
      console.log("4068");
   });

   meter4069.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4069"
      console.log("4069");
   });

   meter4070.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4070"
      console.log("4070");
   });

   meter4071.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4071"
      console.log("4071");
   });

   meter4072.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4072"
      console.log("4072");
   });

   meter4073.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4073"
      console.log("4073");
   });

   meter4074.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4074"
      console.log("4074");
   });

   meter4075.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4075"
      console.log("4075");
   });

   meter4076.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4076"
      console.log("4076");
   });

   meter4077.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4077"
      console.log("4077");
   });

   meter4078.on("click", function(event){
      var clickedMarker = event.layer;
      var textbox = "4078"
      console.log("4078");
   });

//----------------------------------------------------------------------------
// End Click Events for Meters
//----------------------------------------------------------------------------




}
