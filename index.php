<html
<head>
<link rel="stylesheet" media="all" type="text/css" href="style1.css" />
</head>
<body>
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>VNC-CONFIG</span>
            <span>GENERATOR</span>
          </div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
		  <form method="post" action="vncgen.php">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="ip или hostname"name="ip" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="PORT" value="5900" name="port">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Имя юзера" name="username" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="password" placeholder="vncpassword" value="onwAytw0" name="vncpassword">
            </div>
            <div class="app-form-group buttons">
		</form>
          <button class="app-form-button">GENERATE</button>
		
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>