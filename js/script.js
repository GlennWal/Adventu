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

//<!--- FAQ --->



