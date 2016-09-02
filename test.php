<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<title>PHP Bing</title>
</head>
<body>
<form action="&lt;?php echo $PHP_SELF;?&gt;" method="post">Type in a search:<input id="searchText" name="searchText" type="text" value="" /> <input id="searchButton" name="submit" type="submit" value="Search!" /> <!--?php
if (isset($_POST['submit'])) {
$request = 'http://api.search.live.net/json.aspx?Appid=<YourAppIDHere-->&amp;sources=image&amp;query=&#39; . urlencode( $_POST[&quot;searchText&quot;]); $response = file_get_contents($request); $jsonobj = json_decode($response); echo(&#39;
<ul id="resultList">
	<li>&#39;); foreach($jsonobj-&gt;SearchResponse-&gt;Image-&gt;Results as $value) { echo(&#39;</li>
	<li class="resultlistitem"><a href="' . $value-&gt;Url . '">&#39;); echo(&#39;<img alt="" src="' . $value-&gt;Thumbnail-&gt;Url. '" /></a></li>
	<li><a href="' . $value-&gt;Url . '">&#39;); } echo(&quot;</a></li>
</ul>
<a href="' . $value-&gt;Url . '">&quot;); } ?&gt; </a></form>
</body>
</html>
