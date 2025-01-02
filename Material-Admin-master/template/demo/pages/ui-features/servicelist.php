<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if there's a success message in the URL
        const urlParams = new URLSearchParams(window.location.search);
        const deleteSuccess = urlParams.get('delete_success');

        if (deleteSuccess === 'true') {
            alert('Gallery image is deleted successfully.');
        }
    });
</script>
