<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
    /* Step 2: Universal Box-Sizing */
    * {
        box-sizing: border-box;
    }

    /* Step 3: Body Layout and Background */
    body {
        width: 90%;
        max-width: 700px;
        margin: 30px auto;
        background-color: #f5f7fa;
        font-family: Arial, sans-serif;
    }

    /* Step 4: Heading Spacing */
    h1 {
        margin-bottom: 8px;
    }

    /* Step 5: Styled Horizontal Rule */
    hr {
        margin: 16px 0;
        border: 0;
        border-top: 5px dotted #d5dde6;
    }

    /* Step 6: Reset Table Display */
    form table {
        display: block;
        width: 100%;
        border: 0px;
    }

    /* Step 7: Stack Table Rows and Cells */
    form table tbody,
    form table tr,
    form table td {
        display: block;
        width: 100%;
    }

    /* Step 8: Row Spacing */
    form table tr {
        margin-bottom: 16px;
    }

    /* Step 9: Cell Padding and Border Removal */
    form table td {
        padding: 3px 0;
        border: 0;
    }

    /* Step 10: Style the Label Cell */
    form table td:first-child {
        color: #18309e;
        font-weight: bold;
    }

    /* Step 11: Style All Input Fields */
    form table input:not([type="radio"]),
    form table textarea,
    form table select {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #c5cfda;
        border-radius: 5px;
        background-color: #fff;
        color: #263548;
        font: inherit;
    }

    /* Step 12: Textarea Specific Styling */
    form table textarea {
        min-height: 110px;
        resize: vertical;
    }

    /* Step 13: Radio Button Spacing */
    form table input[type="radio"] {
        margin: 0 5px 0 0;
    }

    form table input[type="radio"] + label {
        margin-right: 18px;
    }

    /* Step 14: Color & Range Specific Inputs */
    form table input[type="color"] {
        height: 44px;
        padding: 4px;
    }

    form table input[type="range"] {
        padding: 0;
    }

    /* Step 15: Form Buttons & Hover Effects */
    form button,
    form input[type="reset"] {
        display: block;
        width: 100%;
        margin: 10px 0;
        padding: 11px;
        border: 0;
        border-radius: 4px;
        color: #fff;
        background-color: #24669d;
        font: inherit;
        cursor: pointer;
    }

    form input[type="reset"] {
        background-color: #6c757d;  /* Muted neutral gray for reset */
    }

    form button:hover {
        background-color: #1a4970;  /* Darker shade of blue on submit hover */
    }

    form input[type="reset"]:hover {
        background-color: #5a6268;  /* Darker shade of gray on reset hover */
    }
    </style>
</head>
<body>
<h1>Biodata Form</h1>
<hr>
<form action="http://lrgs.ftsm.ukm.my/users/a123456/lab-2/validate_biodata.php" method="post" enctype="multipart/form-data">
    <table border="1" cellpadding="10">
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="Insert your name" pattern="[A-Z][a-z]*( [A-Z][a-z]*)*" title="Enter your name in Title Case" autofocus required></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age" min="0" max="100" step="1" required></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" id="genderMale" name="gender" value="male" checked required><label for="genderMale">Male</label><input type="radio" id="genderFemale" name="gender" value="female" required><label for="genderFemale">Female</label></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="address" cols="50" rows="5" placeholder="Insert your address" required></textarea></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" pattern=".+@.*[Uu][Kk][Mm].*" title="Email address must contain ukm" placeholder="Insert your email" required></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="dob" required></td>
        </tr>
        <tr>
            <td>Height:</td>
            <td><input type="range" name="height" id="heightId" min="100" max="200" value="150" oninput="outputId.value = heightId.value"><output id="outputId">150</output>cm</td>
        </tr>
        <tr>
            <td>Tel:</td>
            <td><input type="tel" name="phone" pattern="(\+60|0060)[0-9]{2}-[0-9]{7}" title="Phone number must begin with +60 or 0060" placeholder="+60##-####### or 0060##-#######" required></td>
        </tr>
        <tr>
            <td>My Favorite Color:</td>
            <td><input type="color" name="color" value="#008000"></td>
        </tr>
        <tr>
            <td>Fb/TW/IG:</td>
            <td><input type="url" name="fbtwig" placeholder="Insert the URL" required></td>
        </tr>
        <tr>
            <td>My Face Photo:</td>
            <td><input type="file" name="photo" accept="image/*" required></td>
        </tr>
        <tr>
            <td>My University:</td>
            <td>
                <select name="university" required>
                    <option value="">Select</option>
                    <option value="UKM" selected>Universiti Kebangsaan Malaysia</option>
                    <option value="UM">Universiti Malaya</option>
                    <option value="UPM">Universiti Putra Malaysia</option>
                    <option value="USM">Universiti Sains Malaysia</option>
                    <option value="UTM">Universiti Teknologi Malaysia</option>
                </select>
            </td>
        </tr>
    </table>
<hr>
<input type="hidden" name="matricnum" value="a123456">
<button type="submit" name="biodata_form" value="Submit My Biodata">Submit My Biodata</button>
<input type="reset">
</form>

</body>
</html>