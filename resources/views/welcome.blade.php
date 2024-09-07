<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner Integration</title>
</head>
<body>
    <h1>Scanner Integration</h1>

    <button type="button" onclick="scanToJpg();">Scan</button>
    <div id="images"></div>

    <script type="text/javascript" src="//cdn.asprise.com/scannerjs/scanner.js"></script>

    <script>
        function scanToJpg() {
            scanner.scan(displayImagesOnPage, {
                "output_settings": [{
                    "type": "return-base64",
                    "format": "jpg"
                }]
            });
        }

        function displayImagesOnPage(successful, mesg, response) {
            if (!successful) { 
                console.error('Failed: ' + mesg);
                return;
            }

            if (successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { 
                console.info('User canceled');
                return;
            }

            var scannedImages = scanner.getScannedImages(response, true, false); 
            for (var i = 0; (scannedImages instanceof Array) && i < scannedImages.length; i++) {
                var scannedImage = scannedImages[i];
                processScannedImage(scannedImage);
            }
        }

        var imagesScanned = [];

        function processScannedImage(scannedImage) {
            imagesScanned.push(scannedImage);
            var elementImg = createDomElementFromModel({
                'name': 'img',
                'attributes': {
                    'class': 'scanned',
                    'src': scannedImage.src
                }
            });
            document.getElementById('images').appendChild(elementImg);
        }

        function createDomElementFromModel(model) {
            var element = document.createElement(model.name);
            if (model.attributes) {
                for (var attribute in model.attributes) {
                    if (model.attributes.hasOwnProperty(attribute)) {
                        element.setAttribute(attribute, model.attributes[attribute]);
                    }
                }
            }
            return element;
        }
    </script>
</body>
</html>
