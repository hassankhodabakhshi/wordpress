document.addEventListener('DOMContentLoaded', function () {
    // ایجاد دکمه
    var button = document.createElement('button');
    button.innerHTML = 'Click me';  // متن دکمه
    button.id = 'myButton';         // شناسه دکمه
    button.style.backgroundColor = 'blue'; // رنگ پس‌زمینه دکمه
    button.style.color = 'white';         // رنگ متن دکمه
    button.style.padding = '10px 20px';   // فاصله داخلی دکمه
    button.style.border = 'none';          // حذف حاشیه دکمه
    button.style.borderRadius = '5px';     // گرد کردن گوشه‌های دکمه
    document.body.appendChild(button);     // افزودن دکمه به بدنه

    // افزودن رویداد کلیک
    button.addEventListener('click', function () {
        console.log('Button clicked!');     // نمایش پیام در کنسول
        alert('Button clicked!');           // نمایش پیام هشدار
        // تغییر رنگ پس‌زمینه صفحه
        document.body.style.backgroundColor = document.body.style.backgroundColor === 'lightblue' ? 'white' : 'lightblue';
    });
});
