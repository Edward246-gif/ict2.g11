//2. JavaScript File: main.js

// js/main.js

// Confirm before deleting an item
function confirmDelete() {
    return confirm("Are you sure you want to delete this item?");
}

// Preview image before upload
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(input.files[0]);
    }
}


// Global form validation
document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", function (e) {
            let isValid = true;
            const inputs = form.querySelectorAll("input[required], textarea[required], select[required]");

            inputs.forEach(input => {
                const errorId = input.id + "Error";
                let errorEl = document.getElementById(errorId);

                if (!errorEl) {
                    errorEl = document.createElement("small");
                    errorEl.id = errorId;
                    errorEl.style.color = "red";
                    input.insertAdjacentElement("afterend", errorEl);
                }

                if (!input.value.trim()) {
                    errorEl.textContent = "This field is required.";
                    isValid = false;
                } else if (input.type === "email" && !input.value.includes("@")) {
                    errorEl.textContent = "Enter a valid email address.";
                    isValid = false;
                } else if (input.name === "phone" && !/^\d{10,}$/.test(input.value)) {
                    errorEl.textContent = "Enter a valid phone number.";
                    isValid = false;
                } else {
                    errorEl.textContent = "";
                }
            });

            if (!isValid) e.preventDefault();
        });
    });
});

