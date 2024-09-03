<!doctype html>
<html>
<head>
    <title>LabyMod Server Media Generator</title>
    <meta name="title" content="LabyMod Server Media Generator">
    <meta name="description" content="LabyMod server media manifest generator. Check github.com/labymod/server-media for more info.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://fjuro.site.namedhosting.com/">
    <meta property="og:title" content="LabyMod Server Media Generator">
    <meta property="og:description" content="LabyMod server media manifest generator. Check github.com/labymod/server-media for more info.">
    <meta property="og:image" content="https://labymod.net/page/tpl/assets/images/logo_main.png">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://fjuro.site.namedhosting.com/">
    <meta property="twitter:title" content="LabyMod Server Media Generator">
    <meta property="twitter:description" content="LabyMod server media manifest generator. Check github.com/labymod/server-media for more info.">
    <meta property="twitter:image" content="https://labymod.net/page/tpl/assets/images/logo_main.png">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.8/dist/semantic.min.js"></script>
    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }
    bg-div {
      background-color: lightblue;
    }
    </style>
    <script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("member").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("Member " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "member" + i;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    </script>
</head>
<body>
<div class="ui grid">
<div class="seven wide centered column" style="padding-left: 2%">
  <h1 style="padding-top: 2%">Server Media Generator</h1>
  <p>LabyMod server media manifest generator. Don't forget to check the <a href="https://github.com/LabyMod/server-media/blob/master/docs/Manifest.md#available-keys" target="_blank">docs</a>.</p>
    <form class="ui form" name="form" method="post" enctype="multipart/form-data" action="generate.php" autocomplete="off">
      <div class="ui equal width form">
        <div class="fields">
          <div class="field">
            <label>Short name</label>
            <input name="server_name" type="text" placeholder="laby" required>
          </div>
          <div class="field">
            <label>Nice name</label>
            <input name="nice_name" type="text" placeholder="LabyMod" required>
          </div>
          <div class="field">
            <label>Direct IP</label>
            <input name="direct_ip" type="text" placeholder="play.laby.net" required>
          </div>
        </div>
        <div class="fields">
          <div class="field">
            <label>Server wildcards</label>
            <input class="form-control" type="text" name="server_wildcards" placeholder="%.laby.net,%.labymod.net">
          </div>
          <div class="field">
            <label>Supported languages</label>
            <input class="form-control" type="text" name="supported_languages" placeholder="en,de">
          </div>
        </div>

      <div class="ui hidden divider"></div>
      <h3>Social</h3>
        <div class="fields">
          <div class="field">
            <label>Website</label>
            <input name="web" type="url" placeholder="https://labymod.net">
          </div>
          <div class="field">
            <label>Web shop</label>
            <input name="web_shop" type="url" placeholder="https://labymod.net/shop">
          </div>
          <div class="field">
            <label>Web support</label>
            <input name="web_support" type="url" placeholder="https://labymod.net/support">
          </div>
        </div>
        <div class="fields">
          <div class="field">
            <label>Twitter</label>
            <input name="twitter" type="text" placeholder="LabyMod">
          </div>
          <div class="field">
            <label>TikTok</label>
            <input name="tiktok" type="text" placeholder="LabyMod">
          </div>
          <div class="field">
            <label>Facebook</label>
            <input name="facebook" type="text" placeholder="LabyMod">
          </div>
        </div>
        <div class="fields">
          <div class="field">
            <label>Instagram</label>
            <input name="instagram" type="text" placeholder="LabyMod">
          </div>
          <div class="field">
            <label>TeamSpeak</label>
            <input name="teamspeak" type="text" placeholder="ts.labymod.net">
          </div>
        </div>
        <div class="fields">
          <div class="field">
            <label>Discord</label>
            <input name="discord" type="url" placeholder="https://discord.com/invite/labymod">
          </div>
          <div class="field">
            <label>YouTube</label>
            <input name="youtube" type="url" placeholder="https://www.youtube.com/channel/UCSamgE1KYvC7qZn56T0J2yg">
          </div>
        </div>
        
      <div class="ui hidden divider"></div>
      <h3>Gamemodes</h3>
        <!-- PŘIDAT TLAČÍTKO NA PŘIDÁNÍ POLÍ -->

      <div class="ui hidden divider"></div>
      <h3>Brand</h3>
        <div class="fields">
          <div class="field">
            <label>Primary</label>
            <input name="primary" type="text" placeholder="#008FE8">
          </div>
          <div class="field">
            <label>Background</label>
            <input name="background" type="text" placeholder="#0A56A5">
          </div>
          <div class="field">
            <label>Text</label>
            <input name="text" type="text" placeholder="#FFFFFF">
          </div>
        </div>

      <div class="ui hidden divider"></div>
      <h3>Location</h3>
        <div class="field">
          <label>City</label>
          <input name="city" type="text" placeholder="Berlin">
        </div>
        <div class="field">
          <label>Country</label>
          <input name="country" type="text" placeholder="Germany">
        </div>
        <div class="field">
          <label>Country code</label>
          <input name="country_code" type="text" placeholder="de">
        </div>

      <div class="ui hidden divider"></div>
      <h3>Other</h3>
        <div class="fields">
          <div class="field">
            <label>YouTube trailer</label>
            <input name="yt_trailer" type="text" placeholder="8asFIRe2HSw">
          </div>
          <div class="field">
            <label>User stats</label>
            <input name="user_stats" type="url" placeholder="https://laby.net/@{userName}" >
          </div>
        </div>
        <div style="text-align: center; padding-bottom: 2%">
          <input class="big ui primary button" type="submit" name="submit" value="Submit">
        </div>
        </div>
      </div>
    </form>
<!-- RIGHT SIDE -->
<div class="seven wide centered column" style="text-align: right; padding-top: 2%">
<table class="ui celled table">
  <thead>
    <tr><th>Field</th>
    <th>Description</th>
    <th>Example value</th>
  </tr></thead>
  <tbody>
    <tr>
      <td data-label="Name">Short name</td>
      <td data-label="Age">Short server name (must match the directory name!)</td>
      <td data-label="Job">laby</td>
    </tr>
    <tr>
      <td data-label="Name">Nice name</td>
      <td data-label="Age">Nice server name</td>
      <td data-label="Job">LabyMod</td>
    </tr>
    <tr>
      <td data-label="Name">Direct IP</td>
      <td data-label="Age">Direct Minecraft server IP</td>
      <td data-label="Job">play.labymod.net</td>
    </tr>
    <tr>
      <td data-label="Name">Server wildcards</td>
      <td data-label="Age">Wildcards the user can use</td>
      <td data-label="Job">%.laby.net,%.labymod.net</td>
    </tr>
    <tr>
      <td data-label="Name">Supported languages</td>
      <td data-label="Age">Supported languages on your server - Format: ISO 639-1</td>
      <td data-label="Job">en,de</td>
    </tr>
    <tr>
      <td data-label="Name">Website</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">Website <b>URL</b></a></td>
      <td data-label="Job">https://labymod.net</td>
    </tr>
    <tr>
      <td data-label="Name">Web shop</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#links">Shop <b>URL</b></a></td>
      <td data-label="Job">https://labymod.net/shop</td>
    </tr>
    <tr>
      <td data-label="Name">Web support</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#links">Support page <b>URL</b></a>, e.g. FAQ page</td>
      <td data-label="Job">https://labymod.net/support</td>
    </tr>
    <tr>
      <td data-label="Name">Twitter</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">Twitter <b>username</b></a></td>
      <td data-label="Job">LabyMod</td>
    </tr>
    <tr>
      <td data-label="Name">TikTok</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">TikTok <b>username</b></a></td>
      <td data-label="Job">LabyMod</td>
    </tr>
    <tr>
      <td data-label="Name">Facebook</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">Facebook <b>username</b></a></td>
      <td data-label="Job">LabyMod</td>
    </tr>
    <tr>
      <td data-label="Name">Instagram</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">Instagram <b>username</b></a></td>
      <td data-label="Job">LabyMod</td>
    </tr>
    <tr>
      <td data-label="Name">TeamSpeak</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">TeamSpeak server address</a></td>
      <td data-label="Job">ts.labymod.net</td>
    </tr>
    <tr>
      <td data-label="Name">Discord</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">Discord invite <b>URL</b></a></td>
      <td data-label="Job"><u>https://discord.gg/labymod</u> <i>or</i> <u>https://discord.gg/Wbg7rArky7</u> (<a href="https://github.com/LabyMod/server-media/blob/master/docs/Manifest.md#discord-url" target="_blank">Read more</a>)</td>
    </tr>
    <tr>
      <td data-label="Name">YouTube</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#social">YouTube channel <b>URL</b></a></td>
      <td data-label="Job">https://www.youtube.com/channel/UCSamgE1KYvC7qZn56T0J2yg</td>
    </tr>
    <tr>
      <td data-label="Name">Primary</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#colorize-your-page">Primary brand color</a></td>
      <td data-label="Job">#008FE8</td>
    </tr>
    <tr>
      <td data-label="Name">Background</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#colorize-your-page">Background color</a></td>
      <td data-label="Job">#0A56A5</td>
    </tr>
    <tr>
      <td data-label="Name">Text</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#colorize-your-page">Text color</a></td>
      <td data-label="Job">#FFFFFF</td>
    </tr>
    <tr>
      <td data-label="Name">City</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#server-location">Server location: City</a></td>
      <td data-label="Job">Berlin</td>
    </tr>
    <tr>
      <td data-label="Name">Country</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#server-location">Server location: Country</a></td>
      <td data-label="Job">Germany</td>
    </tr>
    <tr>
      <td data-label="Name">Country code</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#server-location">Server location: Country code</a> - Format: ISO 3166-1 alpha2</td>
      <td data-label="Job">de</td>
    </tr>
    <tr>
      <td data-label="Name">YouTube trailer</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#server-trailer">YouTube trailer <b>embed ID</b></a></td>
      <td data-label="Job">vNF-ztQGnUo</td>
    </tr>
    <tr>
      <td data-label="Name">User stats</td>
      <td data-label="Age"><a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md#links">User stats <b>URL</b></a></td>
      <td data-label="Job"><u>https://laby.net/@{userName}</u> <i>or</i> <u>https://laby.net/@{uuid}</u></td>
    </tr>
  </tbody>
</table>
<div style="text-align: center; padding-top: 2%"><p style="color: grey;">You must compress your images (except <span class="ui middle label" style="padding: 0.5% 0.6%; margin: 0 0.2%;">@2x</span> versions) before submitting. You can do this by clicking the following button:</p>
<a href="https://tinypng.com/" target="_blank">
<button class="middle ui warning button" style="width: 80%; margin-top: -1%;">Image compresser</button>
</a>
</div>
</div>
<!-- END OF RIGHT SIDE -->
</div>
</div>
</div>
<!-- Footer -->
<footer>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="seven wide column">
          <h4 class="ui inverted header">LabyGenerator</h4>
          <p>&copy; <?php echo date("Y"); ?> <a href="https://fjuro.alius.cz">Fjuro</a> &middot; <a href="https://github.com/Fjuro/LabyGenerator/blob/main/CREDITS.md" target="_blank">Credits</a></p>
          <p>This site is not affiliated with LabyMod in any way.</p>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">LabyMod</h4>
          <div class="ui inverted link list">
            <a href="https://labymod.net" class="item">Website</a>
            <a href="https://laby.net" class="item">LABY.net</a>
            <a href="https://github.com/LabyMod/server-media" class="item">Server media</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Server media</h4>
          <div class="ui inverted link list">
            <a href="https://github.com/LabyMod/server-media/blob/master/docs/Usages.md" class="item">Example usages</a>
            <a href="https://github.com/LabyMod/server-media/blob/master/docs/Files.md" class="item">Files and images</a>
            <a href="https://github.com/LabyMod/server-media/blob/master/docs/Manifest.md" class="item">Manifest.json</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
