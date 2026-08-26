document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    const contactNumber = document.getElementById("contactNumber");

    // Allow numbers only for contact number
    contactNumber.addEventListener("input", function () {

        this.value = this.value.replace(/[^0-9]/g, "");

        // Maximum of 11 digits
        if (this.value.length > 11) {
            this.value = this.value.slice(0, 11);
        }

    });


    // Client-side form validation
    form.addEventListener("submit", function (event) {

        const age = document.getElementById("age").value;

        if (age < 1 || age > 120) {

            alert("Please enter a valid age between 1 and 120.");

            event.preventDefault();

            return;
        }


        if (
            contactNumber.value.length !== 11 ||
            !contactNumber.value.startsWith("09")
        ) {

            alert(
                "Please enter a valid Philippine contact number.\nExample: 09123456789"
            );

            event.preventDefault();

            return;
        }

    });

});