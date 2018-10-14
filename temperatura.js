$(document).ready(function(){
	$.ajax({
		url: "http://localhost/granja/dataTemperatura.php",
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
						label: 'Hora Vs Valor Temperatura °C',
						backgroundColor: 'rgba(220,53,69,0.15)',
						borderColor: 'rgba(220,53,69,0.75)',
						borderWidth: 3.5,
						pointStyle: 'circle',
						pointRadius: 5,
						pointBorderColor: 'transparent',
						pointBackgroundColor: 'rgba(220,53,69,0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score,
						labelString: 'Value',
					}
				]
			};

			var ctx = $("#temperatura");

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