@extends('layouts.app')

@section('content')
<head> 
  <title>Home</title>
</head>
<div class="container">
    <div>
        <canvas id="myChart"></canvas>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Users', 'Designs', 'Messages','Comments'],
            datasets: [{
              label: 'Number',
              data: [{{$users}},{{$designs}},{{$Messages}},{{$comments}}],
              borderWidth: 2,
              backgroundColor: [
                'rgba(255, 205, 86, 0.4)',
                'rgba(75, 192, 192, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(153, 102, 255, 0.4)',
                ],
                borderColor: [
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                ],
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
</div>
@endsection
