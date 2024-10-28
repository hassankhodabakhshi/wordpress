const button = document.createElement('button');
button.innerHTML = 'Click me';
button.id = 'myButton';
document.body.appendChild(button);

button.addEventListener('click', () => {
    console.log('Button clicked!');
    alert('Button clicked!');
});
