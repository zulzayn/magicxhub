// if ('serviceWorker' in navigator) {
//     window.addEventListener('load', function() {
//         navigator.serviceWorker.register(OC.getRootPath() + '/core/js/serviceworker.js', {scope: OC.getRootPath() + '/'});
//     });
// }

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker
        .register('/serviceworker.js')
        .then(function () {
        console.log('Service worker registered!');
        })
        .catch(function(err) {
        console.log(err);
        });
    });
    }