<?php
$conn = mysqli_connect("localhost","root","","flood_monitoring");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flood Dashboard</title>

    <link rel="stylesheet" href="../css/dashboard.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>

  <body>
    <main class="dashboard">
      <!-- TOP GRID -->
      <section class="top-grid">
        <!-- LIVE CAMERA -->
        <div class="card camera-card">
          <div class="card-header">
            <h3>Live Camera</h3>
            <select>
              <option>Camera 1 - Tabuc Suba</option>
            </select>
          </div>

          <div class="camera-view">

            <div class="camera-box">
                <img src="http://192.168.50.8:5000/video_feed"
                      alt="IoT Flood Analytics Stream"
                      class="camera-feed">
            </div>
            
            <div class="location-tag">
              Tabuc Suba - Resident Area
            </div>
          </div>
        </div>

        <!-- ALERTS -->
        <div class="card">
          <div class="card1">
           <h3>Current Status</h3>
           <div class="Risk_Alert">
            <div class="alert-icon">
              <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div class="alert-text">
              <span class="risk">HIGH RISK</span>
              <span class="message">Flood Detected</span>
            </div>
            </div>
          </div>

          <div class= "card2">
            <h3>Recent Alerts</h3>
            <div class="alert high">
              <div>
                <span class="risk"> High Risk - Flood Detected</span><br>
                <span>Tabuc suba street 2  </span>
              </div>

              <small>10:30 AM</small>
            </div>
            <div class="alert medium">
              <div>
                <span class="risk"> Medium Risk - Water Reach 50% </span><br>
                <span>Tabuc Suba Street 1</span>
              </div>
              <small>9:15 AM</small>
            </div>
            <button class="btn">View All Alerts</button>
          </div>
        </div>
      </section>

 <!-- MIDDLE GRID -->
<section class="mid-grid">

  <!-- CHART -->
  <div class="card chart-card">
    <h3>Threshold Warning Trend (Last 7 Days)</h3>

    <div class="chart-container">
      <canvas id="barChart"></canvas>
    </div>
  </div>

  <!-- SUMMARY -->
  <div class="card summary">
    <h3>Today's Summary</h3>

    <div class="summary-box red">
      <span> High Risk</span>
      <span>1 Camera</span>
    </div>

    <div class="summary-box orange">
      <span> Medium Risk</span>
      <span>1 Camera</span>
    </div>

    <div class="summary-box green">
      <span> Low Risk</span>
      <span>2 Camera</span>
    </div>
  </div>

</section>

      <!-- TABLE -->
      <section class="card table-card">
        <h3>Recent Records</h3>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Location</th>
              <th>Date & Time</th>
              <th>Risk</th>
              <th>View</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>tabuc_suba-01</td>
              <td>
                <img
                  class="thumb"
                  src="../imgs/fur.jpg"
                />
              </td>
              <td>Tabuc Suba</td>
              <td>May 14, 2026<br />10:30 AM</td>
              <td><span class="tag red">High Risk</span></td>
              <td>👁</td>
            </tr>
          </tbody>
        </table>
        <button class="btn">View All Records</button>
      </section>
    </main>

    <script>
      const ctx = document.getElementById("barChart").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: [
            "May 8",
            "May 9",
            "May 10",
            "May 11",
            "May 12",
            "May 13",
            "May 14",
          ],
          datasets: [
            {
              label: "High Risk",
              data: [3, 0, 0, 0, 0, 3, 0],
              backgroundColor: "#ff4d4d",
            },
            {
              label: "Medium Risk",
              data: [2, 2, 0, 2, 2, 2, 2],
              backgroundColor: "#f1c40f",
            },
            {
              label: "Low Risk",
              data: [1, 1, 1, 1, 1, 1, 1],
              backgroundColor: "#2ecc71",
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { position: "top" },
          },
          scales: {
            y: {
              min: 0,
              max: 3,
              ticks: {
                stepSize: 1,
                callback: function(value) {return value + " ft";}
              }
            }
            
          },
        },
      });
    </script>
  </body>
</html>