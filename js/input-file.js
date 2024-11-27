document.getElementById("input-file").addEventListener("change", async function () {
    const form = document.getElementById("uploadForm");
    const formData = new FormData(form);
    const fileInput = document.getElementById("input-file");

    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];

        // Validar tamaño del archivo (máximo 100 MB)
        const maxSize = 100 * 1024 * 1024; // 100 MB
        if (file.size > maxSize) {
            alert("El archivo es demasiado grande. El tamaño máximo permitido es de 100 MB.");
            return;
        }

        // Realizar la petición al backend
        try {
            const response = await fetch("send_mail.php", {
                method: "POST",
                body: formData,
            });

            const result = await response.text();
            if (response.ok) {
                alert("Archivo enviado exitosamente.");
                // Redirigir automáticamente a index.php
                window.location.href = "index.php";
            } else {
                alert("Error al enviar el archivo: " + result);
            }
        } catch (error) {
            alert("Hubo un error al enviar el archivo: " + error.message);
        }
    }
});

