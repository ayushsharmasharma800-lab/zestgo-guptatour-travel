"use strict";

const form = document.querySelector('.form');
form.addEventListener('submit', function(e) {
    e.preventDefault();
    confirmBooking(form);
})

async function confirmBooking(form) {
    const formData = new FormData(form);
    if(formData){
        const url = 'sendmessage.php';
        const response = await fetch(url, {
            method: "POST",
            body: formData
        });
        if(response.ok){
            form.reset();
            alert("Booking confirmed! We will contact you shortly.");
        } else {
            alert("There was an error confirming your booking. Please try again.");
        }
    }
 }