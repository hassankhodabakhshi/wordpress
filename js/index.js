"use strict";
document.addEventListener('DOMContentLoaded', function () {
    console.log('DOM fully loaded and parsed'); // پیغام تست
    var button = document.createElement('button');
    button.innerText = 'Click me';
    button.addEventListener('click', function () {
        console.log('Button clicked!');
    });
    document.body.appendChild(button);
});
