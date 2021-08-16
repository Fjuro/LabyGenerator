<!doctype html>
<html>
<head>
    <title>LabyMod server media generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div style="text-align: center; width: 30%; margin: auto;">
  <h1>Form</h1>
    <form name="form" method="post" enctype="multipart/form-data" action="generate.php" autocomplete="off">
        <div class="mb-3">
            <label class="form-label" for="server_name">Server name: </label>
            <input class="form-control" type="text" name="server_name" id="server_name" placeholder="laby" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nice_name">Nice name: </label>
            <input class="form-control" type="text" name="nice_name" id="nice_name" placeholder="LabyMod" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="direct_ip">Direct IP: </label>
            <input class="form-control" type="text" name="direct_ip" id="direct_ip" placeholder="play.laby.net" required>
        </div>
      <h4>Social</h4>
        <div class="mb-3">
            <label class="form-label" for="web">Website: </label>
            <input class="form-control" type="text" name="web" id="web" placeholder="https://labymod.net">
        </div>
        <div class="mb-3">
            <label class="form-label" for="web_shop">Web shop: </label>
            <input class="form-control" type="text" name="web_shop" id="web_shop" placeholder="https://labymod.net/shop">
        </div>
        <div class="mb-3">
            <label class="form-label" for="web_support">Web support: </label>
            <input class="form-control" type="text" name="web_support" id="web_support" placeholder="https://labymod.net/support">
        </div>
        <div class="mb-3">
            <label class="form-label" for="twitter">Twitter: </label>
            <input class="form-control" type="text" name="twitter" id="twitter" placeholder="LabyMod">
        </div>
        <div class="mb-3">
            <label class="form-label" for="tiktok">TikTok: </label>
            <input class="form-control" type="text" name="tiktok" id="tiktok" placeholder="LabyMod">
        </div>
        <div class="mb-3">
            <label class="form-label" for="facebook">Facebook: </label>
            <input class="form-control" type="text" name="facebook" id="facebook" placeholder="LabyMod">
        </div>
        <div class="mb-3">
            <label class="form-label" for="instagram">Instagram: </label>
            <input class="form-control" type="text" name="instagram" id="instagram" placeholder="LabyMod">
        </div>
        <div class="mb-3">
            <label class="form-label" for="discord">Discord: </label>
            <input class="form-control" type="text" name="discord" id="discord" placeholder="https://discord.com/invite/labymod">
        </div>
        <div class="mb-3">
            <label class="form-label" for="youtube">YouTube: </label>
            <input class="form-control" type="text" name="youtube" id="youtube" placeholder="https://www.youtube.com/channel/UCSamgE1KYvC7qZn56T0J2yg">
        </div>
        <div class="mb-3">
            <label class="form-label" for="teamspeak">TeamSpeak: </label>
            <input class="form-control" type="text" name="teamspeak" id="teamspeak" placeholder="ts.labymod.net">
        </div>
      <h4>Discord</h4>
        <div class="mb-3">
            <label class="form-label" for="server_id">Server ID: </label>
            <input class="form-control" type="text" name="server_id" id="server_id" placeholder="260471731809026048">
        </div>
      <h4>Brand</h4>
        <div class="mb-3">
            <label class="form-label" for="primary">Primary: </label>
            <input class="form-control" type="text" name="primary" id="primary" placeholder="#008FE8">
        </div>
        <div class="mb-3">
            <label class="form-label" for="background">Background: </label>
            <input class="form-control" type="text" name="background" id="background" placeholder="#0A56A5">
        </div>
        <div class="mb-3">
            <label class="form-label" for="text">Text: </label>
            <input class="form-control" type="text" name="text" id="text" placeholder="#FFFFFF">
        </div>
      <h4>Other</h4>
        <div class="mb-3">
            <label class="form-label" for="yt_trailer">YouTube trailer: </label>
            <input class="form-control" type="text" name="yt_trailer" id="yt_trailer" placeholder="8asFIRe2HSw">
        </div>
        <div class="mb-3">
            <label class="form-label" for="user_stats">User stats: </label>
            <input class="form-control" type="text" name="user_stats" id="user_stats" placeholder="https://laby.net/@{userName}">
        </div>
        <p style="text-align: center;">
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">
        </div>
    </form>
</div>
</body>
</html>