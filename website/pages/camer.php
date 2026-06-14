<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camera</title>

    <link rel="stylesheet" href="../css/camera.css" />
  </head>

  <body>
    <div class="Camera">
      <!--main camera-->
      <div class="maincam">
        <img src="http://192.168.50.8:5000/video_feed"
                      alt="IoT Flood Analytics Stream"
                      class="camera-feed">
        <div class="Cam-Tittle" id="mainTitle">Main Camera</div>
      </div>
      

      <!--Small cam-->
      <div class="small-cam">
        <div class="cam">
          <img src="../imgs/fur.jpg" />
          <span>Camera 1</span>
        </div>
        <div class="cam">
          <img src="../imgs/fur.jpg" />
          <span>Camera 2</span>
        </div>
        <div class="cam">
          <img src="../imgs/fur.jpg" />
          <span>Camera 3</span>
        </div>


      </div>
    </div>
  </body>
</html>