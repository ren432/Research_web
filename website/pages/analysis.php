<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/analysis.css" />

    <!-- FONTS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

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
          <h2>4</h2>
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
              <h3>4</h3>
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

      const ctx = document.getElementById("pieChart");

      new Chart(ctx, {
        type: "doughnut",

        data: {
          labels: ["High Risk", "Medium Risk", "Normal"],

          datasets: [
            {
              data: [1, 1, 2],

              backgroundColor: ["#ff4d4d", "#ffc107", "#3ddc6c"],

              borderWidth: 0,
              hoverOffset: 6,
            },
          ],
        },

        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: "65%",

          plugins: {
  legend: {
    position: "right",

    labels: {
      color: "#000",
      padding: 20,
      boxWidth: 15,
      boxHeight: 15,
      usePointStyle: true,

      font: {
        size: 20,
      },

      generateLabels(chart) {
        const data = chart.data.datasets[0].data;
        const labels = chart.data.labels;
        const total = data.reduce((a, b) => a + b, 0);

        return labels.map((label, i) => {
          const value = data[i];
          const percent = ((value / total) * 100).toFixed(1);

          return {
            text: `${label}: ${value} (${percent}%)`,
            fillStyle: chart.data.datasets[0].backgroundColor[i],
            strokeStyle: chart.data.datasets[0].backgroundColor[i],
            hidden: false,
            index: i
          };
        });
      }
    }
  }
}
        },
      });

      /* BAR CHART */

      const barCtx = document.getElementById("riskBarChart");

      new Chart(barCtx, {
        type: "bar",

        data: {
          labels: ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6","May 7"],

          datasets: [
            {
              label: "High Risk",
              data: [1, 0, 2, 0,0,0,1],
              backgroundColor: "#ff4d4d",
              borderRadius: 6,
            },

            {
              label: "Medium Risk",
              data: [1, 2, 2, 1,0,0,1],
              backgroundColor: "#ffc107",
              borderRadius: 6,
            },

            {
              label: "Normal",
              data: [2, 2, 0, 3, 4,4,2],
              backgroundColor: "#3ddc6c",
              borderRadius: 6,
            },
          ],
        },

        options: {
          responsive: true,
          maintainAspectRatio: false,

          plugins: {
            legend: {
              position: "top",

              labels: {
                color: "#000",

                font: {
                  size: 14,
                },
              },
            },
          },

          scales: {
            x: {
              ticks: {
                color: "#000",
              },

              grid: {
                display: false,
              },
            },

            y: {
              min: 0, 
              ticks: {
                stepSize: 1,
                callback: function(value){return value}
              }
            }
          },
        },
      });
    </script>
  </body>
</html>