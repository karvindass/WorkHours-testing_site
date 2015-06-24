<?php
echo 'Hello World!';
<!-- Polyfill Web Components support for older browsers -->
<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
<link rel="import" href="components/google-map/google-map.html">

<!-- Use element -->
<google-map lat="37.790" long="-122.390"></google-map>

?>