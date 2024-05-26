//<!--- privacyverklaring --->

document.addEventListener('DOMContentLoaded', () => {
    const agreeButton = document.getElementById('agree-button');

    agreeButton.addEventListener('click', () => {
        window.location.href = 'registreren.php';

    });
});

document.getElementById('back-button').addEventListener('click', function() {
    history.back();
});



//<!--- Contact --->

function openPopup() {
    var phoneNumber = "012-3456789"; // Vervang dit met het gewenste telefoonnummer
    var popupContent = "Bel ons op: " + phoneNumber;
    alert(popupContent);
}

//<!--- Mijn profiel update --->

function updateProfile() {
    var form = document.getElementById('profileForm');
    var formData = new FormData(form);

    fetch('update_profile.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('message').innerText = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

//<!--- Over ons --->
function showInfo(button) {
    var infoDiv = button.nextElementSibling;
    if (infoDiv.style.display === "none" || infoDiv.style.display === "") {
        infoDiv.style.display = "block";
        button.textContent = "Minder informatie";
    } else {
        infoDiv.style.display = "none";
        button.textContent = "Meer informatie";
    }
}



