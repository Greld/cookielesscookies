<!DOCTYPE html>
<html>
	<head>
		<title>Lucb1e.com :: Cookieless Cookies</title>
		<style>
			body {
				font-family: Arial;
			}
		</style>
	</head>
	<body>
		<div style="width: 632px; font-size: 1em; margin: 0 auto 0 auto; margin-top: 40px;">
			<script>
				async function getEtag() {
					const response = await fetch('etag.txt', {cache: "force-cache"});
					console.log("response.headers ETag", response.headers.get('ETag'));
  					return response.text();
				}
				getEtag().then(etag => {
					console.log("etag z obsahu", etag);
					document.getElementById("etag").innerText = etag;
				});
			</script>
			<h2>ETag:</h2>
			<div id="etag"></div>
		</div>
	</body>
</html>
