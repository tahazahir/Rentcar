<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>JQVMap - Tunisia Map</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

  <link href="../dist/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../dist/jquery.vmap.js"></script>
  <script type="text/javascript" src="../dist/maps/jquery.vmap.tunisia.js" charset="utf-8"></script>

  <script>
    jQuery(document).ready(function () {
      jQuery('#vmap').vectorMap({
        map: 'tunisia',
        onRegionClick: function (element, code, region) {
          var message = 'You clicked "'
            + region
            + '" which has the code: '
            + code.toUpperCase();

          alert(message);
        }
      });
    });
  </script>
</head>
<body>
<div id="vmap" style="width: 700px; height: 637px;"></div>
</body>
</html>
