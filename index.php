<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Untitled Document</title>
  <script type="text/javascript" src="dmxAppConnect/dmxAppConnect.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="dmxAppConnect/dmxBootstrap4TableGenerator/dmxBootstrap4TableGenerator.css">
  </head>
  <body id="gm_alle" is="dmx-app">
    <dmx-serverconnect id="gm_al" url="dmxConnect/api/GM.php"></dmx-serverconnect>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Marke</th>
                  <th>Type</th>
                  <th>Typezusatz</th>
                  <th>Erstzulassung</th>
                  <th>Farbe</th>
                  <th>Preis</th>
                  <th>Normalpreis</th>
                  <th>Haendlerpreis</th>
                  <th>Tagesangebot</th>
                </tr>
              </thead>
              <tbody is="dmx-repeat" dmx-generator="bs4table" dmx-bind:repeat="gm_al.data.gm_alle" id="tableRepeat1">
                <tr>
                  <td dmx-text="marke"></td>
                  <td dmx-text="type"></td>
                  <td dmx-text="typezusatz"></td>
                  <td dmx-text="erstzulassung"></td>
                  <td dmx-text="farbe"></td>
                  <td dmx-text="preis"></td>
                  <td dmx-text="normalpreis"></td>
                  <td dmx-text="haendlerpreis"></td>
                  <td dmx-text="tagesangebot"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body></html>
