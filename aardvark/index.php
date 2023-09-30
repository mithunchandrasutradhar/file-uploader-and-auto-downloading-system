<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Now</title>
</head>
<body onload="javascript:downloadFile('https://soccershop.africa/aardvark/files/aardvark.pdf')">
  <script>
function downloadFile(url) {
  const link = document.createElement('a');
  link.href = url;
  link.download = '';
  link.click();
}
  </script>
</body>

</html>