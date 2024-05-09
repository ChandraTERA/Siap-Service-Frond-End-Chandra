import 'flowbite';
// import './bootstrap';

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// ..
AOS.init();
AOS.refresh();
// document.addEventListener("DOMContentLoaded", function () {
// AOS.init();
// });

import './html2canvas';

function getCurrentDateTime() {
    const currentDate = new Date();

    const day = String(currentDate.getDate()).padStart(2, '0');
    const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Ingat bahwa bulan dimulai dari 0 (Januari) hingga 11 (Desember).
    const year = currentDate.getFullYear();
    const hours = String(currentDate.getHours()).padStart(2, '0');
    const minutes = String(currentDate.getMinutes()).padStart(2, '0');

    const formattedDateTime = `tanggal ${day}-${month}-${year}, pukul ${hours}.${minutes}`;
    return formattedDateTime;
}

document.getElementById("btnNota").onclick = function () {
    const screenshotTarget = document.getElementById("nota");
    // Mengatur opsi scale untuk meningkatkan kualitas gambar
    const options = {
        scale: 2, // Ganti dengan nilai yang sesuai
    };
    html2canvas(screenshotTarget, options).then((canvas) => {

        const currentDate = getCurrentDateTime();
        const fileName = `Nota Pembayaran Siap Service (${currentDate}).png`;

        const base64image = canvas.toDataURL("image/png");
        var anchor = document.createElement('a');
        anchor.setAttribute("href", base64image);
        anchor.setAttribute("download", fileName);
        anchor.click();
        anchor.remove();
    });
}




















/* ES6 */
// import * as htmlToImage from 'html-to-image';
// import { toPng } from 'html-to-image';

// const imageNota = document.getElementById('nota');
// function downloadthumbnail() {
//     toPng(imageNota, {
//         quality: 0.95
//     })
//         .then((dataUrl) => {
//             const link = document.createElement('a');
//             link.download = 'nota-pembayaran(21/10.2023).png';
//             link.href = dataUrl;
//             link.click();
//             link.remove();
//         });
//     }
//     document.querySelector('#btnNota').addEventListener('click', downloadthumbnail);




