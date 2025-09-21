<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: linear-gradient(to right, #cce0ff, #e6f2ff); 
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fdfdfd;  
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #004080;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin: 6px 0 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
        }
        .btn {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Biodata Form</h2>
        <!-- enctype is important for file uploads -->
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <label>Full Name:</label>
            <input type="text" name="full_name" required>

            <label>Phone No:</label>
            <input type="text" name="phone_no" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Education:</label>
            <textarea name="education"></textarea>

            <label>Address:</label>
            <textarea name="address" required></textarea>

            <label>Place of Birth:</label>
            <input type="text" name="pob" required>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required>

            <label>Age:</label>
            <input type="number" name="age">

            <label>Gender:</label>
            <select name="gender" required>
                <option value="">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label>Marital Status:</label>
            <select name="marital_status" required>
                <option value="">--Select--</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select>

            <label>Nationality:</label>
            <input type="text" name="nationality" required>

            <label>Work Experience:</label>
            <textarea name="work_experience"></textarea>

            <label>Work Skills:</label>
            <textarea name="work_skill"></textarea>

            <label>Mother Tongue:</label>
            <input type="text" name="mother_tongue">

            <label>Mother's Name:</label>
            <input type="text" name="mother_name">

            <label>Father's Name:</label>
            <input type="text" name="father_name">

            <label>Weight:</label>
            <input type="number" name="weight">

            <label>Height:</label>
            <input type="number" name="height">

            <label>Hobbies:</label>
            <textarea name="hobbies"></textarea>

            <label>Mother Occupation:</label>
            <textarea name="mother_o"></textarea>

            <label>Father Occupation:</label>
            <textarea name="father_o"></textarea>

            <label>Upload Profile Picture:</label>
            <input type="file" name="myfile" accept="image/*" required>

            <button type="submit" name="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
