<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Nota Pembayaran - Contoh</title>
</head>

<body class="bg-slate-100">

    <h1 class="m-4 text-5xl font-bold text-teal-500">HTML Canvas to Image</h1>
    <button id="btnDisplay"
        class="mx-4 px-6 py-2 rounded-full shadow-lg bg-gradient-to-bl from-indigo-500 via-purple-600 to-sky-700 text-white">Display</button>
    <button id="btnDownload"
        class=" px-6 py-2 rounded-full shadow-lg bg-gradient-to-bl from-indigo-500 via-emerald-600 to-sky-700 text-white">Download</button>
    <hr class="mt-2">
    <canvas id="myCanvas" width="400" height="250" style="border: 2px solid #000; float: left; margin: 10px; ">
    </canvas>
    <img src="" alt="" id="imgConverted" style="float: left; border: 2px solid #00f; margin: 10px;">

    <script>
        const btnDisplay = document.querySelector("#btnDisplay");
        const btnDownload = document.querySelector("#btnDownload");
        const imgConverted = document.querySelector("#imgConverted");
        const myCanvas = document.querySelector("#myCanvas");
        const ctx = myCanvas.getContext("2d");

        ctx.font = "50px Roboto";
        ctx.fillStyle = "red";
        ctx.fillText("dcode", 100, 100);
        ctx.fillRect(200, 50, 150, 75);


        btnDisplay.addEventListener("click", function() {
            const dataURI = myCanvas.toDataURL("image/png");

            imgConverted.src = dataURI;
        })

        btnDownload.addEventListener('click', function() {
            // Convert the canvas to a Blob
            myCanvas.toBlob(function(blob) {
                if (window.navigator.msSaveBlob) {
                    // For IE/Edge support (PNG Only)
                    window.navigator.msSaveBlob(blob, 'canvas-image.png');
                } else {

                    const link = document.createElement('a');

                    // For other browsers, create a download link
                    document.body.appendChild(link);

                    // link.href = window.URL.createObjectURL(blob);
                    link.href = myCanvas.toDataURL("image/png", 0.95);
                    link.download = 'canvas-image.png';
                    link.click();

                    // For other browsers, create a download link
                    document.body.removeChild(link);
                }
            }, 'image/png');
        });
    </script>

</html>
