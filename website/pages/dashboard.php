<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download" />

    
</head>
  <body>
    <!-- main screen -->
    <main>
      <!-- main content -->
      <section class="Dashboard">
        <div class="wrap_container">
          <div class="Wrapp_container_data">

            <div class="right">
              <div class="column_risk_level">
                <div class="wrap_Container_Data_overview">
                  <div class="Risk container_Low">
                    <div class="risklevel green">
                      <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                      <p class="txt">Low Risk</p>
                      <div class="container_percentage">
                        <h1>12</h1>
                          <p>Areas</p>
                      </div>
                    </div>
                  </div>
                  <div class="Risk container_high_risk">
                    <div class="risklevel yellow">
                      <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                      <p class="txt">Medium Risk</p>
                      <div class="container_percentage">
                        <h1>10</h1>
                        <p>Areas</p>
                      </div>
                    </div>
                  </div>
                  <div class="Risk container_critical">
                    <div class="risklevel red">
                      <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                      <p class="txt">High Risk</p>
                      <div class="container_percentage">
                        <h1>4</h1>
                        <p>Areas</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            <!-- Camera -->
            <div class="main_layout">
              <!-- LEFT CONTENT -->
              <div class="left_content">
                  <!-- CAMERA RECORD -->
                  <!-- <div class="chart-card">
                    <h2>Threshold Warning Trend <span>(Last 7 Days)</span></h2> 
                    <canvas id="riskTrendChart"></canvas>
                  </div> -->
                  <div class="container_record">
                      <div class="Camera_content">
                          <div>
                              <h4>Live (Camera)</h4>
                          </div>
          
                          <div class="column">
          
                              <!-- CAMERA -->
                              <div class="live_camera">
                                <img src="http://192.168.50.8:5000/video_feed"
                                          alt="Iot Flood Analytics Stream"
                                          class="camera-feed">
                              </div>
          
                              <!-- RIGHT FORM -->
                              <div class="row_data">
          
                                  <div class="data location_container">
                                      <h5>Location</h5>
                                      <div class="location">
                                          tabuc suba - resident
                                      </div>
                                  </div>
                                  <div class="data description_container">
                                      <h5>Description (Optional)</h5>
                                      <div class="description_data">
                                          <textarea placeholder="Enter Description..."></textarea>
                                      </div>
                                  </div>
                                  <div class="data Tags_container">
                                      <h5>Tags</h5>
                                      <div class="high_risk">
                                          <span class="tags data2">High Risk</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

          
                  <!-- RECENT RECORDS -->
                  <div class="container_RecentData">
                      <div class="recent_data">
                          <h4>Recent Records</h4>
          
                          <table>
          
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Image</th>
                                      <th>Location</th>
                                      <th>Date & Time</th>
                                      <th>Tags</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
          
                              <tbody>
                                  <tr>
                                      <td>IMG-0001</td>
                                      <td><img src="../imgs/tabuc_suba1.png" class="record-img" /></td>
                                      <td>Tabuc Suba</td>
                                      <td>
                                          05/22/2026
                                          <p>10:30 AM</p>
                                      </td>
                                      <td>High Risk</td>
                                      <td>
                                        <div class="wrap_action">
                                          <div class="action">
                                            <button class="btn edit" onclick=""><span>edit</span></button>
                                            <button class="btn view" onclick=""><span class="material-symbols-outlined">download</span></button>
                                          </div>
                                        </div>
                                    </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          
              <!-- RIGHT SIDEBAR -->
              <div class="container_graph">
          
                  <!-- WATER LEVEL -->
                  <div class="WaterLevel_Container">
                    <h4>Risk Recently Sensor</h4>

                      <div class="chart-wrapper">
                        <canvas id="pieChart"></canvas>

                          <div class="chart-center">
                            <p>Total</p>
                            <h3>100</h3>
                        </div>
                      </div>
                    </div>
                  <!-- ALERTS -->
                  <div class="recent_alert_container">
                    <h4>Recent Alerts</h4>

                    <div class="alert_box">
                      <div class="icon red">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                      </div>
                      <h5>High Risk</h5>
                    </div>

                    <div class="alert_box">
                      <div class="icon yellow">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                      </div>
                        <h5>Medium Risk</h5>
                      </div>
                    </div>
                  
              </div>
            </div>
              <!-- end main -->
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../js/dashboard.js"></script>
   </main>
  </body>
</html>