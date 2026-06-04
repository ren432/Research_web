<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="../css/analysis.css">

  <!-- FONTS -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <!-- CHART.JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

  <!-- TITLE -->

  <div class="dashboard-title">

    <h1>
      <i class="fa-solid fa-droplet"></i>
      ANALYSIS
    </h1>

  </div>

  <!-- CARDS -->

  <div class="cards">

    <div class="card">

      <div class="icon blue">
        <i class="fa-solid fa-video"></i>
      </div>

      <div class="card-text">
        <p>Total Records</p>
        <h2>124</h2>
        
      </div>

    </div>

    <div class="card">

      <div class="icon red">
        <i class="fa-solid fa-triangle-exclamation"></i>
      </div>

      <div class="card-text">
        <p>High Risk Events</p>
        <h2>16</h2>
       
      </div>

    </div>

    

  </div>

  <!-- CHARTS -->

  <div class="charts">

    <!-- PIE CHART -->

    <div class="chart-box">

      <h2>Risk Level Distribution</h2>

      <div class="pie-container">

        <div class="chart-wrapper">

          <canvas id="pieChart"></canvas>

          <!-- CENTER TEXT -->

          <div class="chart-center">
            <p>Total</p>
            <h3>124</h3>
          </div>

        </div>

      </div>

    </div>

    <!-- BAR CHART -->

    <div class="chart-box">

      <h2>Risk Events Over Time</h2>

      <div class="bar-chart-container">
        <canvas id="riskBarChart"></canvas>
      </div>

    </div>

  </div>

  <!-- SCRIPT -->

  <script>

    /* PIE CHART */

    const ctx = document.getElementById('pieChart');

    new Chart(ctx, {

      type: 'doughnut',

      data: {

        labels: ['High Risk', 'Low Risk', 'Normal'],

        datasets: [{
          data: [14, 28, 58],

          backgroundColor: [
            '#ff4d4d',
            '#ffc107',
            '#3ddc6c'
          ],

          borderWidth: 0,
          hoverOffset: 6
        }]
      },

      options: {

        responsive: true,
        maintainAspectRatio: false,
        cutout: '65%',

        plugins: {

          legend: {

            position: 'right',

            labels: {
              color: '#000',
              padding: 20,
              boxWidth: 15,

              font: {
                size: 16
              }
            }
          }
        }
      }
    });

    /* BAR CHART */

    const barCtx = document.getElementById('riskBarChart');

    new Chart(barCtx, {

      type: 'bar',

      data: {

        labels: ['May 1', 'May 2', 'May 3', 'May 4'],

        datasets: [

          {
            label: 'High Risk',
            data: [1, 4, 5, 6],
            backgroundColor: '#ff4d4d',
            borderRadius: 6
          },

          {
            label: 'Low Risk',
            data: [5, 7, 9, 10],
            backgroundColor: '#ffc107',
            borderRadius: 6
          },

          {
            label: 'Normal',
            data: [14, 9, 7, 20],
            backgroundColor: '#3ddc6c',
            borderRadius: 6
          }

        ]
      },

      options: {

        responsive: true,
        maintainAspectRatio: false,

        plugins: {

          legend: {

            position: 'top',

            labels: {

              color: '#000',

              font: {
                size: 14
              }
            }
          }
        },

        scales: {

          x: {

            ticks: {
              color: '#000'
            },

            grid: {
              display: false
            }
          },

          y: {

            ticks: {
              color: '#000'
            },

            grid: {
              color: 'rgba(0,0,0,0.08)'
            }
          }
        }
      }
    });

  </script>

</body>
</html>