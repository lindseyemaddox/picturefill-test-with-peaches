<!doctype html>

<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<!--[if lt IE 9 ]><html lang="en" class="ie8"><![endif]-->
<!--[if lt IE 8 ]><html lang="en" class="ie7"><![endif]-->
<!--[if (gt IE 7)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Picturefill Test</title>
  <link rel="stylesheet" href="/picturefill.css" media="screen">

  <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="/picturefill.js" async></script>

</head>

<body>

	<section>

    <picture>
      <source srcset="/images/azalea-ruth/azalea-ruth-large.jpg" media="(min-width: 1500px)">
      <source srcset="/images/azalea-ruth/azalea-ruth-medium.jpg" media="(min-width: 1000px)">
      <img srcset="/images/azalea-ruth/azalea-ruth-small.jpg" alt="Azalea Ruth">
    </picture>

	</section>

</body>
</html>