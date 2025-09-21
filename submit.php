<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Sanitize inputs
    $full_name       = htmlspecialchars($_POST['full_name']);
    $phone_no        = htmlspecialchars($_POST['phone_no']);
    $email           = htmlspecialchars($_POST['email']); 
    $education       = htmlspecialchars($_POST['education']);
    $address         = htmlspecialchars($_POST['address']);
    $pob             = htmlspecialchars($_POST['pob']);
    $dob             = htmlspecialchars($_POST['dob']);
    $gender          = htmlspecialchars($_POST['gender']);
    $marital_status  = htmlspecialchars($_POST['marital_status']);
    $nationality     = htmlspecialchars($_POST['nationality']);
    $work_experience = htmlspecialchars($_POST['work_experience']);
    $work_skill      = htmlspecialchars($_POST['work_skill']);
    $mother_tongue   = htmlspecialchars($_POST['mother_tongue']);
    $mother_name     = htmlspecialchars($_POST['mother_name']);
    $father_name     = htmlspecialchars($_POST['father_name']);
    $weight          = htmlspecialchars($_POST['weight']);
    $height          = htmlspecialchars($_POST['height']);
    $hobbies         = htmlspecialchars($_POST['hobbies']);
    $mother_o        = htmlspecialchars($_POST['mother_o']);
    $father_o        = htmlspecialchars($_POST['father_o']);
    $age             = htmlspecialchars($_POST['age']);

    // File upload
    $target_file = ""; 
    if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);

        $file_name   = basename($_FILES["myfile"]["name"]);
        $fileType    = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $newFileName = uniqid("file_", true) . "." . $fileType;
        $target_file = $target_dir . $newFileName;
        move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Biodata</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: #f4f6f9;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 900px;
                margin: auto;
                background: #lightgreen;  
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            }
            .header {
                display: flex;
                align-items: center;
                gap: 20px;
                margin-bottom: 20px;
            }
            .header h1 {
                font-size: 28px;
                color: #2c3e50;
                letter-spacing: 1px;
                margin: 0;
            }
            .profile-pic {
                margin-left: 0;   
                margin-right: 20px; 
                border-radius: 10%;
                width: 150px;
                height: 150px;
                object-fit: cover;
                border: 2px solid #3498db;
            }
            .section-title {
                background: #3498db;
                color: #fff;
                padding: 8px 12px;
                border-radius: 5px;
                margin-top: 25px;
                font-size: 16px;
                font-weight: bold;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 15px 0;
            }
            td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
                vertical-align: top;
            }
            td:first-child {
                font-weight: bold;
                color: #2c3e50;
                width: 25%;
            }
            td[colspan="3"] {
                color: #34495e;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <?php if (!empty($target_file)): ?>
                    <img src="<?= $target_file ?>" class="profile-pic">
                <?php endif; ?>
                <h1>BIO-DATA</h1>
            </div>

            <!-- PERSONAL DATA -->
            <div class="section-title">PERSONAL DATA</div>
            <table>
                <tr><td>Full Name</td><td><?= $full_name ?></td><td>Date of Birth</td><td><?= $dob ?></td></tr>
                <tr><td>Gender</td><td><?= $gender ?></td><td>Age</td><td><?= $age ?></td></tr>
                <tr><td>Phone No</td><td><?= $phone_no ?></td><td>Email</td><td><?= $email ?></td></tr>
                <tr><td>Address</td><td colspan="3"><?= $address ?></td></tr>
                <tr><td>Place of Birth</td><td><?= $pob ?></td><td>Nationality</td><td><?= $nationality ?></td></tr>
                <tr><td>Civil Status</td><td><?= $marital_status ?></td><td>Weight</td><td><?= $weight ?></td></tr>
                <tr><td>Height</td><td><?= $height ?></td><td>Mother Tongue</td><td><?= $mother_tongue ?></td></tr>
                <tr><td>Father's Name</td><td><?= $father_name ?></td><td>Occupation</td><td><?= $father_o ?></td></tr>
                <tr><td>Mother's Name</td><td><?= $mother_name ?></td><td>Occupation</td><td><?= $mother_o ?></td></tr>
                <tr><td>Hobbies</td><td colspan="3"><?= $hobbies ?></td></tr>
            </table>

            <!-- EDUCATIONAL BACKGROUND -->
            <div class="section-title">EDUCATIONAL BACKGROUND</div>
            <table>
                <tr><td>Education</td><td colspan="3"><?= $education ?></td></tr>
                <tr><td>Work Skills</td><td colspan="3"><?= $work_skill ?></td></tr>
            </table>

            <!-- EMPLOYMENT RECORD -->
            <div class="section-title">EMPLOYMENT RECORD</div>
            <table>
                <tr><td>Work Experience</td><td colspan="3"><?= $work_experience ?></td></tr>
            </table>
        </div>
    </body>
    </html>

<?php
} // end of POST check
?>
