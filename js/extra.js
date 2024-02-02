// FOR INPUT ANIMATION --------------------------------------------------

document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.form__input');

    inputs.forEach(input => {
        input.addEventListener('input', function () {
            const maxLength = this.getAttribute('maxlength'); // Define the maximum length

            if (this.value === "") {
                // Add/remove classes based on input length reaching maximum
                this.classList.remove('too-short');
                this.classList.remove('form__input_short');
                this.classList.add('reached-max-length');
                this.classList.add('form__input_max_length');
            } else if (this.value.length === maxLength) {
                // Add/remove classes based on input length reaching maximum
                this.classList.remove('too-short');
                this.classList.remove('form__input_short');
                this.classList.add('reached-max-length');
                this.classList.add('form__input_max_length');
            } else if (this.value.length < maxLength) {
                // Add/remove classes based on input length
                this.classList.remove('reached-max-length');
                this.classList.remove('form__input_max_length');
                this.classList.add('too-short');
                this.classList.add('form__input_short');
            } else {
                // Clear classes if input length doesn't meet criteria
                this.classList.remove('too-short');
                this.classList.remove('form__input_short');
                this.classList.add('reached-max-length');
                this.classList.add('form__input_max_length');
            }
        });
    });
});



// FOR REOPEN MORE CONTAINER --------------------------------------------------

document.addEventListener('DOMContentLoaded', function () {
    const moreRechargeTab = document.getElementById('More-recharge-tab');
    const moreServiceContent = document.getElementById('More');

    moreRechargeTab.addEventListener('click', function (event) {
        event.preventDefault();

        // Get the currently active tab (if any)
        const activeTab = document.querySelector('.tab-pane.fade.show.active');

        // Remove the 'active' class from the currently active tab content
        if (activeTab) {
            activeTab.classList.remove('active', 'show');
        }

        // Show the 'More Service' content
        moreServiceContent.classList.add('active', 'show');
    });
});

// FOR REMOVE ALL ACTIVE CLASS --------------------------------------------------

// Get all elements with class "nav-link"
const navLinks = document.querySelectorAll('.nav-link');

// Iterate through each nav-link and add a click event listener
navLinks.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default link behavior

        // Remove the "active" class from all nav-links
        navLinks.forEach(item => {
            item.classList.remove('active');
            item.classList.remove('show');
        });

        // Add the "active" class to the clicked nav-link
        this.classList.add('active');
        this.classList.add('show');
    });
});

// FOR RESRT ALL FORM --------------------------------------------------

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior

            const forms = document.querySelectorAll('.myForm');
            forms.forEach(form => {
                form.reset(); // Reset each form
            });
        });
    });
});


// FOR DTH Customer Info --------------------------------------------------
$(document).ready(function () {
    $('#DTHCustomerInfoContainerShow').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#DTH_customer_info').show();
    });

    $('#DTHCustomerInfoContainerHide').on('click', function () {
        $('#DTH_customer_info').hide();
    });
});

// FOR Electricity Customer Info --------------------------------------------------
$(document).ready(function () {
    $('#ElectricityCustomerInfoContainerShow').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#Electricity_customer_info').show();
    });

    $('#ElectricityCustomerInfoContainerHide').on('click', function () {
        $('#Electricity_customer_info').hide();
    });
});

// FOR GasCylinder Customer Info --------------------------------------------------
$(document).ready(function () {
    $('#GasCylinderCustomerInfoContainerShow').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#GasCylinder_customer_info').show();
    });

    $('#GasCylinderCustomerInfoContainerHide').on('click', function () {
        $('#GasCylinder_customer_info').hide();
    });
});

// FOR --------------------------------------------------
// FOR --------------------------------------------------
// FOR --------------------------------------------------
// FOR --------------------------------------------------
// FOR --------------------------------------------------