$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8080/MyThesis/LiveSite/dashboard/charts/outdoor_data/temperature/outdoor_data_temp_get.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var time = [];
			var temp = [];

			for(var i in data) {
				time.push(data[i].event);
				temp.push(data[i].temperature);
			}

			var chartdata = {
				labels: time,
				datasets : [
					{
						label: 'Outdoor Temperature',
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
						data: temp
					}
                ]
                
            };
            

			var ctx = $("#outdoor_data_temp");

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
		url: "http://localhost:8080/MyThesis/LiveSite/dashboard/charts/outdoor_data/temperature/outdoor_data_temp_get_live.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var time = [];
			var temp = [];

			for(var i in data) {
				time.push(data[i].event);
				temp.push(data[i].temperature);
			}

			var chartdata = {
				labels: time,
				datasets : [
					{
						label: 'Outdoor Temperature',
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
						data: temp
					}
                ]
                
            };
            

			var ctx = $("#outdoor_data_temp_live");

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