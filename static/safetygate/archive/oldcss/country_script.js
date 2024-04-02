<script>
    // Path to the text file
    const filePath = './file.txt';

    fetch(filePath)
        .then(response => response.text())
        .then(data => {
            // Assuming the file contains a single line to be used as the header
            document.getElementById('header').innerText = data;
        })
        .catch(error => console.error('Error fetching file:', error));
</script>
