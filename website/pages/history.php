<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/history.css" />
  </head>

  <body>
    <div class="dashboard">
      <div class="table-header">
        <h2>Historical Records</h2>
      </div>
       <div class="controls">

        <div class="search-box">
            <input type="text" placeholder="Search records...">
        </div>

        <div class="date-filter">
            <label>From</label>
            <input type="date">

            <label>To</label>
            <input type="date">
        </div>

        <div class="risk-filter">
            <label>
                <input type="checkbox" checked>
                High Risk
            </label>

            <label>
                <input type="checkbox" checked>
                Medium Risk
            </label>

            <label>
                <input type="checkbox" checked>
                Low Risk
            </label>
        </div>

        <div class="order-filter">
            <select>
                <option>Descending</option>
                <option>Ascending</option>
            </select>
        </div>

    </div>

    <!-- TABLE STARTS HERE -->
    <table>
          
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Location</th>
            <th>Date & Time</th>
            <th>Status</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Cam3-01</td>
            <td>
              <img src="../imgs/tabuc_suba2.png" class="record-img" />
            </td>
            <td>
              <div class="location">
                <div>
                  <h4>Tabuc Suba - Bridge Point</h4>
                </div>
              </div>
            </td>
            <td>
              <div class="datetime">
                <h4>May 21, 2025</h4>
                <p>10:30 AM</p>
              </div>
            </td>
            <td>
              <div class="tags">
                <span class="tag red">High Risk</span>
              </div>
            </td>
            </td>
              <td class="Description">
                <div >
                  <span>High flood risk detected in Tabuc Suba.</span>
                </div>
            </td>
            <td>
              <div class="wrap_action">
                <div class="action">
                  <button class="btn edit" onclick="">Edit</button>
                  <button class="btn view" onclick="">View</button>
                </div>
              </div>
            </td>
          </tr>



          <tr>
            <td>Cam1-02</td>
            <td>
              <img src="../imgs/tabuc_suba1.png" class="record-img" />
            </td>
            <td>
              <div class="location">
                <div>
                  <h4>Tabuc Suba - Gate 3</h4>
                </div>
              </div>
            </td>
            <td>
              <div class="datetime">
                <h4>May 21, 2025</h4>
                <p>09:45 AM</p>
              </div>
            </td>
            <td>
              <div class="tags">
                <span class="tag yellow">Medium Risk</span>
              </div>
            </td>
            </td>
              <td class="Description">
                <div>
                  <span>High flood risk detected in Tabuc Suba.</span>
                </div>
            </td>
            <td>
              <div class="wrap_action">
                <div class="action">
                  <button class="btn edit" onclick="">Edit</button>
                  <button class="btn view" onclick="">View</button>
                </div>
              </div>
            </td>
          </tr>


          <tr>
            <td>Cam2-03</td>

            <td>
              <img src="../imgs/tabuc_suba2.png" class="record-img" />
            </td>
            <td>
              <div class="location">
                <div>
                  <h4>Tabuc Suba - Main St</h4>
                </div>
              </div>
            </td>
            <td>
              <div class="datetime">
                <h4>May 21, 2025</h4>
                <p>08:20 AM</p>
              </div>
            </td>
            <td>
              <div class="tags">
                <span class="tag red">High Risk</span>
              </div>
            </td>
            </td>
              <td class="Description">
                <div>
                  <span>High flood risk detected in Tabuc Suba.</span>
                </div>
            </td>
            <td>
              <div class="wrap_action">
                <div class="action">
                  <button class="btn edit" onclick="">Edit</button>
                  <button class="btn view" onclick="">View</button>
                </div>
              </div>
            </td>
          </tr>


          <tr>
            <td>Cam1-04</td>

            <td>
              <img src="../imgs/tabuc_suba1.png" class="record-img" />
            </td>

            <td>
              <div class="location">
                <div>
                  <h4>Downtown - Kinalagkad</h4>
                </div>
              </div>
            </td>

            <td>
              <div class="datetime">
                <h4>May 21, 2025</h4>
                <p>08:20 AM</p>
              </div>
            </td>
            <td>
              <div class="tags">
                <span class="tag green">Low Risk</span>

              </div>
            </td>
              <td class="Description">
                <div>
                  <span>High flood risk detected in Tabuc Suba.</span>
                </div>
            </td>
            <td>
              <div class="wrap_action">
              <div class="action">
                <button class="btn edit" onclick="">Edit</button>
                <button class="btn view" onclick="">View</button>
              </div>
            </div>
          </td>
          </tr>
          
        </tbody>
      
    
    </table>

    </div>
    </div>
  </body>
</html>