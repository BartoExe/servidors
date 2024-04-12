document.getElementById('uploadForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const fileInput = document.getElementById('fileInput');
    const files = fileInput.files;
    if (files.length === 0) {
        alert('Seleccione los archivos a subir.');
        return;
    }

    // Iterar sobre la lista de archivos seleccionados y enviarlos uno por uno
    for (let i = 0; i < files.length; i++) {
        const formData = new FormData();
        formData.append('file', files[i]);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'upload.php', true);

        xhr.upload.onprogress = function(e) {
            const progress = Math.round((e.loaded / e.total) * 100);
            document.getElementById('progress').innerHTML = `Progress: ${progress}%`;
        };

        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('SUBIDA EXITOSA.');
            } else {
                alert('Error uploading file.');
            }
        };

        xhr.send(formData);
    }
});