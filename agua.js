$(document).ready(function(){
	$.ajax({
		url: "http://tepremiapp.com/granja/dataHumedad.php",
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
						label: 'Comsumo de agua durante el dia Lts',
						backgroundColor: 'rgba(244,208,63,0.15)',
						borderColor: 'rgba(244,208,63,0.75)',
						borderWidth: 3.5,
						pointStyle: 'circle',
						pointRadius: 5,
						pointBorderColor: 'transparent',
						pointBackgroundColor: 'rgba(244,208,63,0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score,
						
					}
				]
			};

			var ctx = $("#agua");

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