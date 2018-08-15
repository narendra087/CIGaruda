$(document).ready(function(){
	$.ajax({
		url: "http://localhost/GarudaCI/json/consPEDirektoratjktdc",
		method: "GET",
		type: 'GET',
         dataType: 'json',

		success: function(data) {
			console.log(data);
			var tipe = [];
			var percentage = [];

			for(var i in data) {
				tipe.push(data[i].unit);
				percentage.push(data[i].rerata_dimensi);
			}

			var chartdata = {

				labels: tipe,

				datasets : [
					{
						label: 'Score',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 3, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: percentage
					}
				]
			};



			var options = {
			scales: {
					yAxes: [{
							ticks: {
									min:0,
									max:6,
									scaleSteps:1
							}
					}]
			}
	};

			var ctx = $("#consPEDirektoratjktdc");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				options: options,
				data: chartdata
						});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
