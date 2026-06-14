<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/map.css">

  <!-- Leaflet CSS -->
  <link rel="stylesheet"
  href="https://unpkg.com/leaflet/dist/leaflet.css"/>
</head>

<body>
    <main>
        <h3>ILOILO Maps</h3>
        <section class="google_map">
         <div id="map"></div>
        </section>

        <section class="table_container">
          <table>
            <thead>
              <th>Camera</th>
              <th>AREA</th>
              
              <th>STATUS</th>
              <th>TIME&DATE</th>
            </thead>

            <tbody>
              <td>Camera 1</td>
              <td>Tabuc Suba</td>
              
              <td class="Status"><span>Normal</span></td>
              <td>05/11/2025</td>
            </tbody>

          </table>
        </section>

    </main>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="../js/map.js"></script>

</body>
</html>