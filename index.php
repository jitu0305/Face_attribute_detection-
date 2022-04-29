<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Face Detection</title>

  <link rel="stylesheet" href="style.css">

  <script defer src="face-api.min.js"></script>
  <script defer src="script.js"></script>
</head>

<body>

  <div id="details">
    <div>
      Show face boundary
      <label class="switch">
        <input id="bound" type="checkbox">
        <span class="slider round"></span>
      </label>
    </div>
    <div>
      Show face landmark
      <label class="switch">
        <input id="landmark" type="checkbox">
        <span class="slider round"></span>
      </label>
    </div>
    <div>
      <div>
        <small>Face Detection</small>
        <div id="face">Detecting face...</div>
      </div>
      <div>
        <small>Probability</small>
        <div id="face-p">-</div>
      </div>
    </div>

    <div>
      <div>
        <small>Gender</small>
        <div id="gen">-</div>
      </div>
      <div>
        <small>Probability</small>
        <div id="gen-p">-</div>
      </div>
    </div>

    <div>
      <div>
        <small>Age</small>
        <div id="age">-</div>
      </div>
      <div>
        <small>Probability</small>
        <div id="gen-p">-</div>
      </div>
    </div>

    <div>
      <div>
        <small>Expression</small>
        <div id="exp">-</div>
      </div>
      <div>
        <small>Probability</small>
        <div id="exp-p">-</div>
      </div>
    </div>
    <div id="exp-emo"></div>

  </div>
  <!--<div class="header">📷 Allow Web Cam to run this appThe Facial Attributes Using Face Detection</div> --> 
  <div id="alert"><label id='camnot'>📷 Allow Web Cam to run this app</label> <br>The Facial Attributes Using Face Detection</div>

  <h2 id="loader">Loading...</h2>

  <div id="cam-wrp">
    <video id="cam" width="750" height="562" autoplay muted></video>
  </div>
  <div id="info">
  <b>Project members:
    <ul>
      <li>jitu</li>
  
    </ul>
  </b>
  <ol>
    <li>Emotion recognition is the process of identifying human emotion.</li><br>
    <li>Use of technology to help people with emotion recognition is a relatively nascent research area.</li><br>
    <li>Considering different modalities is vital when designing intelligent systems, as some emotions can be identified more easily by a specific modality.</li>
    </ol>
  </div>
</body>

</html>