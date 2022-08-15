@component('mail::message')
# Welcome to Instagram

This is a clone application of the real instagram app for Desktop. 
You can use this app to share your images and follow other users.
This clone was developed as a personal project to learn about Laravel, 
dependency management, email APIs using mailtrap, and Vue.js.

You can contact me on LinkedIn with the button below.

@component('mail::button', ['url' => 'https://www.linkedin.com/in/ceejay188/'], 'target:_blank')
My LinkedIn Profile
@endcomponent

Thank you for checking it out.<br>
Calvin
@endcomponent
