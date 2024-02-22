let userData = null; // Store user data for attendance confirmation

function retrieveUserData() {
    
    const adminForm = document.forms['Admin-Data-Retrieval'];
    const formData = new FormData(adminForm);

    // Send a request to the server to retrieve user data
    fetch('https://script.google.com/macros/s/AKfycbx8jbINGzeEzD_zP9sXMwqt5m_vPwX5T1cQbSDS8q5vndXl2N2z5kTI1R0RxOvv1Qw/exec', { method: 'POST', body: formData })
        .then(response => response.json())
        .then(data => {
            userData = data.user;
            displayUserData(userData);
        })
        .catch(error => console.error('Error!', error.message));
}

function displayUserData(data) {
    const adminPopup = document.getElementById("adminPopup");
    const table = adminPopup.querySelector('table');
    table.innerHTML = "<tr><th>Field</th><th>Value</th></tr>";

    for (const key in data) {
        const row = table.insertRow();
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);
        cell1.innerHTML = key;
        cell2.innerHTML = data[key];
    }

    adminPopup.style.display = "block";
}

function confirmAttendance() {
    if (userData) {
        const adminForm = document.forms['Admin-Data-Retrieval'];
        const formData = new FormData(adminForm);

        // Send a request to the server to confirm attendance and add a timestamp
        fetch('https://script.google.com/macros/s/AKfycbx8jbINGzeEzD_zP9sXMwqt5m_vPwX5T1cQbSDS8q5vndXl2N2z5kTI1R0RxOvv1Qw/exec', { method: 'POST', body: formData })
            .then(response => response.json())
            .then(data => {
                // Handle the response if needed
            })
            .catch(error => console.error('Error!', error.message));
    }
}
