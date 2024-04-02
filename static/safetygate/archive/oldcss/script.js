document.addEventListener('DOMContentLoaded', () => {
    // Function to get URL parameters
    function getURLParameter(name) {
        const params = new URLSearchParams(window.location.search);
        return params.get(name);
    }

    // Extract the 'prefix' parameter
    const prefix = getURLParameter('prefix'); // Assuming the URL parameter is 'prefix'

    // If the prefix is found, update image sources and HTML body
    if (prefix) {
        // Update the text in the HTML body
        document.getElementById('parameter-value').textContent = `Prefix: ${prefix}`;

        // Update the src attributes for images
        document.getElementById('image1').src = `${prefix}-image1.jpg`;
        document.getElementById('image2').src = `${prefix}-image2.jpg`;
    }
});

