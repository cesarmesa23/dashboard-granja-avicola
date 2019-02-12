$(document).ready(function(){
	$.ajax({
		url: "http://tepremiapp.com/granja/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push(" " + data[i].hora);
				score.push(data[i].valor);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Horas Vs Valor Amoniaco',
						backgroundColor: 'rgba(0,103,255,.15)',
						borderColor: 'rgba(0,103,255,0.5)',
						borderWidth: 3.5,
						pointStyle: 'circle',
						pointRadius: 5,
						pointBorderColor: 'transparent',
						pointBackgroundColor: 'rgba(0,103,255,0.5)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			var ctx = $("#amoniaco");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},

		error: function(data) {
			console.log(data);
		}
	});
});