
//      var yourVariable = "Hello, this is a fixed input!";
//    var fixedInput = document.getElementById("mapLocation");
    fixedInput.value = yourVariable;
    document.getElementById("addCardBtn").addEventListener("click", function () {
    // Empty the form fields when the modal is shown
    document.getElementById("inputModal").addEventListener("show.bs.modal", function () {
    document.getElementById("spaceName").value = "";
    document.getElementById("spaceSize").value = "";
    });

    // Remove the modal backdrop after the modal is hidden
    document.getElementById("inputModal").addEventListener("hidden.bs.modal", function () {
    const modalBackdrop = document.querySelector(".modal-backdrop");
    if (modalBackdrop) {
        modalBackdrop.remove();
    }
    });
});

// Function to handle form submission
function onSubmitForm(form) {
    const name = form.querySelector("#spaceName").value;
    const size = form.querySelector("#spaceSize").value;
    const detailsSummary = document.getElementById("detailsSummary");
    const detailsCard = document.createElement("div");
    detailsCard.classList.add("card", "mt-2");
    detailsCard.innerHTML = `
    <div class="card-body">
        <h5 class="card-title">${name}</h5>
        <p class="card-text">${size}</p>
    </div>
    `;
    detailsSummary.appendChild(detailsCard);
    // Close the modal after form submission
    const inputModal = bootstrap.Modal.getInstance(document.getElementById("inputModal"));
    inputModal.hide();
    form.reset(); // Reset the form fields after submission
    return false; // Prevent form submission
}
    $(document).ready(function() {
        // Handle button clicks to show the corresponding content
        $('.btn').on('click', function() {
            var targetContent = $(this).data('target');
            $('.content').hide();
            $('#' + targetContent).show();
            $('.btn').removeClass('active');
            $(this).addClass('active');
        });
    });


    