function emailSubmit() {
    let email = document.getElementById("newsletter-email").value;

    // send the email to the server
    let response = fetch(`/newsletter.php`, {
        method: "POST",
        headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: JSON.stringify({email:email})
    }).then(response => {
        console.log(response);
        if (response.ok) {

            // show green success message
            ; // TODO
        } else {

            // show red error message
            ; // TODO
        }
    })


    // clear the input field
    document.getElementById("newsletter-email").value = "";

    
}