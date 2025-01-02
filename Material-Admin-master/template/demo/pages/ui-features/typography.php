<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHOTOGRAPGY</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../../assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="../../index.php" class="brand-logo">
          <img src="../../../assets/images/4.png" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../../index.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../../pages/forms/basic-forms.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Booking
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
               Gallery
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="../../pages/ui-features/buttons.php">
                      Insert Images
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="../../pages/ui-features/typography.php">
                      Manage Images
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../../pages/tables/basic-tables.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Price
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../../pages/charts/chartjs.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
                About
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                Manage Pages
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="../../pages/samples/blank-page.php">
                      Photographer
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="../../pages/samples/404.php">
                      404
                    </a>
                    </nav>
              </div>
            </div>
            <div class="">
              </a>
            </div>
          </nav>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="javascript:;">Logout</a>
        </div>
        <div class="">
          <div class="">
            <div class="">
              <i class=""></i>
            </div>
            <div>
            </div>
          </div>
					</a>
        </div>
      </div>
    </aside>
    <!-- partial -->

    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:../../partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">PHOTOGRAPH</span>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <i class="material-icons mdc-text-field__icon">search</i>
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                  <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../../../assets/images/faces/face1.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">SARANGAN</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Edit profile</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-settings"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-alert-circle-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Settings</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-progress-download text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Update</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-bell"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-email-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You received a new message</h6>
                      <small class="text-muted"> 6 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-account-outline"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">New user registered</h6>
                      <small class="text-muted"> 15 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-alert-circle-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">System Alert</h6>
                      <small class="text-muted"> 2 days ago </small>
                    </div>
                  </li> 
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-update"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You have a new update</h6>
                      <small class="text-muted"> 3 days ago </small>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-email"></i>
                <span class="count-indicator">
                  <span class="count">3</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="../../../assets/images/faces/face4.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                      <small class="text-muted"> 1 Minutes ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="../../../assets/images/faces/face2.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                      <small class="text-muted"> 15 Minutes ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="../../../assets/images/faces/face3.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                      <small class="text-muted"> 18 Minutes ago </small>
                    </div>
                  </li>                
                </ul>
              </div>
            </div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-arrow-down-bold-box"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Lock screen</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-logout-variant text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Gallery Managemt --><?php
// Database configuration
$servername = "localhost"; // Change this to your database server hostname
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "final"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set utf8 charset for the connection
mysqli_set_charset($conn, 'utf8');

// Fetch data from the database
$sql = "SELECT * FROM gallery"; 
$result = mysqli_query($conn, $sql);

// Fetch all rows as associative array
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- CSS Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .container {
            max-width: 500px; /* Changed from 500% to 500px */
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"] {
            width: calc(100% - 22px); /* Adjusting for padding and border */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Change to green */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Change to a darker shade of green */
        }

        /* Style for customer side image display */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 20px;
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<?php
include 'db.php';

mysqli_set_charset($conn, 'utf8');


$sql = "SELECT * FROM gallery"; 
$result = mysqli_query($conn, $sql);


$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!-- HTML code for displaying the table and search input -->
<div class="form-group">
    <label for="searchInput">Search:</label>
    <input type="text" class="form-control" id="searchInput" placeholder="Enter ID">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .popup-container {
            display: none; /* Hide the container by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100px;
            height: 100;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            z-index: 9999; /* Ensure it's above other elements */
        }

        .popup-content {
            background-color: #fff;
            width: 400px;
            margin: 100px auto; /* Center the popup vertically and horizontally */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Drop shadow effect */
            color: #333; /* Text color */
        }

        .popup-container.active {
            display: block; /* Show the container when active */
        }

        /* Style for input fields */
        .popup-content input[type="text"],
        .popup-content input[type="file"],
        .popup-content input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for submit button */
        .popup-content input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Hover effect for submit button */
        .popup-content input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Style for labels */
        .popup-content label {
            font-weight: bold;
        }

        .btn {
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <table id="example2" class="table table-bordered table-hover">
        <thead class="thead-dark" style="text-align: center;">
        <tr>
            <th>ID</th>
            <th>IMAGE TITLE</th>
            <th>CATEGORY</th>
            <th>IMAGE</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $row['image_id']; ?></td>
                <td><?php echo $row['image_title']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td>
                    <?php if (isset($row['image_path']) && file_exists($row['image_path'])) { ?>
                        <img src="<?php echo $row['image_path']; ?>" alt="Image" height="200" width="300">
                    <?php } else { ?>
                        Image not available
                    <?php } ?>
                </td>
                    <td>
                        <a class="btn btn-primary update-btn" data-image-id="<?php echo $row['image_id']; ?>"
                           data-image-title="<?php echo $row['image_title']; ?>"
                           data-image-path="<?php echo $row['image_path']; ?>">
                            Update
                        </a>
                        <a class="btn btn-danger delete-btn" data-image-id="<?php echo $row['image_id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="popup-container" id="updatePopup">
        <div class="popup-content">
            <div class="container">
                <h2>Update Image</h2>
                <form id="updateForm" action="update.php" method="post" enctype="multipart/form-data">
                    <label for="popup_image_id">Image ID:</label>
                    <input type="text" name="image_id" id="popup_image_id" readonly><br><br>
                    <label for="popup_image_title">Image Title:</label>
                    <input type="text" name="image_title" id="popup_image_title"><br><br>
                    <label for="popup_image">Upload Image:</label>
                    <input type="file" name="image" id="popup_image"><br><br>
                    <input type="submit" value="Update" name="update">
                </form>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to show alert message
        function showAlert(message) {
            alert(message);
        }

        // Update functionality
        document.querySelectorAll('.update-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('popup_image_id').value = this.getAttribute('data-image-id');
                document.getElementById('popup_image_title').value = this.getAttribute('data-image-title');
                document.getElementById('updatePopup').classList.add('active');
            });
        });

        // Hide popup
        function hidePopup() {
            document.getElementById('updatePopup').classList.remove('active');
        }

        // Close popup when clicking outside of it
        document.getElementById('updatePopup').addEventListener('click', function(event) {
            if (event.target === this) {
                hidePopup();
            }
        });

        // Delete functionality
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const imageId = this.getAttribute('data-image-id');
                if (confirm('Photographer is deleted successfully ')) {
                    window.location.href = `delete.php?image_id=${imageId}`;
                }
            });
        });

        // Alert for image update success
        const updateForm = document.getElementById('updateForm');
        if (updateForm) {
            updateForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form submission
                // Simulate image update success (replace with actual form submission handling)
                // Example: Replace this with your actual form submission code
                showAlert('Gallery image is updated successfully.');
                hidePopup(); // Optionally hide the popup after update
            });
        }
    });
</script>

    </tbody>
    <tfoot></tfoot>
</table>

<!-- JavaScript code for filtering table rows based on search input -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#example2 tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</form>
<style>
        .popup-container {
            display: none; /* Hide the container by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            z-index: 9999; /* Ensure it's above other elements */
        }

        .popup-content {
            background-color: #fff;
            width: 400px;
            margin: 100px auto; /* Center the popup vertically and horizontally */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Drop shadow effect */
            color: #333; /* Text color */
        }

        .popup-container.active {
            display: block; /* Show the container when active */
        }

        /* Style for input fields */
        .popup-content input[type="text"],
        .popup-content input[type="file"],
        .popup-content input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for submit button */
        .popup-content input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Hover effect for submit button */
        .popup-content input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Style for labels */
        .popup-content label {
            font-weight: bold;
        }
    </style>
      </head>
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <form method="post" id="updateForm">
                      <div class="modal-header">
                          <h5 class="modal-title" id="updateModalLabel">Update Image Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="image_id">IMAGE ID</label>
                              <input type="text" class="form-control" id="image_id" name="image_id" placeholder="Image Id" readonly>
                          </div>
                          <div class="form-group">
                              <label for="image_title">IMAGE TITLE</label>
                              <input type="text" class="form-control" id="image_title" name="image_title" placeholder="Image Title">
                          </div>
                          <div class="form-group">
            <label for="exampleInputPassword1">Image Input</label>
            <input type="file" class="form-control" name="image" accept="image/*" onchange="previewImage(event)">
          </div>
          <div class="form-group">
            <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 400px; max-height: 400px; display: none;">
          </div>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="updateButton">Update</button>

                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </form>
        </div>
    </div>
</div>
    <!-- JavaScript to toggle popup -->
    <script>

      $(document).ready(function () {
        $('#updateButton').on('click', function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Get form data
            var formData = new FormData($('#updateForm')[0]);

            // Make AJAX request
            $.ajax({
                type: 'POST',
                url: 'insert.php', // Replace with the actual file handling the update
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    // Handle the success response
                    alert('Update successful');
                    $('#updateModal').modal('hide'); // Close the modal or perform any other action
                    // You may also update the table or reload the page if needed
                },
                error: function (error) {
                    // Handle the error
                    console.log(error);
                    alert('Update failed. Please try again.');
                }
            });
        });
    });
    </script>
        <script>

        function confirmDelete(imageId) {
            if (confirm("Are you sure you want to delete this image?")) {
              
                deleteImage(imageId);
            }
        }

        function deleteImage(imageId) {
            
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "delete.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                    
                        const response = xhr.responseText.trim();
                        if (response === "success") {
                            
                            alert("Image data with ID " + imageId + " has been deleted.");
                          
                            window.location.href = "servicelist.php";
                        } else {
                          
                            alert("Error occurred while deleting the image: " + response);
                        }
                    } else {
                      
                        alert("Error occurred while deleting the image.");
                    }
                }
            };
            xhr.send("id=" + imageId);
        }
        </script>
          <script>
          function previewImage(event) {
          const input = event.target;
          if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
              const imagePreview = document.getElementById('imagePreview');
              imagePreview.src = e.target.result;
              imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
          }
          }
          </script>


          <script>
          $(document).ready(function () {
            
              function openUpdateForm(imageId, imageTitle, description) {
                  
                  $("#image_id").val(imageId);
                  $("#image_title").val(imageTitle);

                
                  $("#updateModal").modal("show");
              }

              
              $(".btn.btn-primary").on("click", function () {
                  
                  var row = $(this).closest("tr");
                  var imageId = row.find("td:eq(0)").text();
                  var imageTitle = row.find("td:eq(1)").text();

                  
                  openUpdateForm(imageId, imageTitle);
              });
          });
          </script>


      

        <!-- partial:../../partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="" target="_blank">PHOTOGRAPGY </a>2024</span>
              </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../assets/js/material.js"></script>
  <script src="../../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>