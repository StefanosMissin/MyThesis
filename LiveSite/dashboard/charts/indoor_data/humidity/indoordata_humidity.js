$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8080/MyThesis/LiveSite/dashboard/charts/indoor_data/humidity/indoor_data_humidity_get.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var time = [];
			var humi = [];

			for(var i in data) {
				time.push(data[i].event);
				humi.push(data[i].humidity);
			}

			var chartdata = {
				labels: time,
				datasets : [
					{
						label: 'Indoor Humidity',
                        backgroundColor: 
                        [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: 
                        [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
						],
						borderWidth: 4,
						data: humi
					}
                ]
                
            };
            

			var ctx = $("#indoor_data_humidity");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8080/MyThesis/LiveSite/dashboard/charts/indoor_data/humidity/indoor_data_humidity_get_live.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var time = [];
			var humi = [];

			for(var i in data) {
				time.push(data[i].event);
				humi.push(data[i].humidity);
			}

			var chartdata = {
				labels: time,
				datasets : [
					{
						label: 'Indoor Humidity',
                        backgroundColor: 
                        [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: 
                        [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255,99,132,1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
						],
						borderWidth: 4,
						data: humi
					}
                ]
                
            };
            

			var ctx = $("#indoor_data_humidity_live");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});