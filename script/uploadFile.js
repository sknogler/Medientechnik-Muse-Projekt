window.addEventListener('load', () => {
    const fileInput = document.getElementById('fileInput');
    const uploadFile = document.getElementById('uploadFile');

    uploadFile.addEventListener('click', () => {
        console.log(fileInput.value);

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {}
        xhttp.open('POST', '../php/uploadFile.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('path=' + fileInput.value);

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);

                document.body.innerHTML = this.responseText;
            }
        }
    });
});
