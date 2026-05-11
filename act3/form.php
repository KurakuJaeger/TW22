<?php
$fullname = "Clark Wayne D. Bagtas";
$date = date('Y-m-d');
$birthday = "2005-10-15";
$age = "20";
$nationality = "Filipino";
$gender = "Male";
$address = "008 Willa Rey Road 2, Pinagbuhatan";
$city = "Pasig City";
$province = "Metro Manila";
$email = "bagtasclarkwayne.pipoy@gmail.com";
$phone = "0927-0621-838";
$tin = "123-456-789";
$sss = "12-3456789-0";
$philhealth = "01-234567890";
$pagibig = "1234-5678-9012";
$date_available = date('Y-m-d');
$desired_pay = "25000";
$position = "UI/UX Designer";
$employment_desired = "full-time";
$work_eligibility = "yes";
$worked_before = "no";
$previous_dates = "";
$felony = "no";
$felony_explain = "";
$highschool = "Arellano University Andres Bonifacio Campus";
$hs_location = "Pasig City, Metro Manila";
$hs_from = "2021-06";
$hs_to = "2023-03";
$hs_graduate = "yes";
$college = "FEU University Institute of Technology";
$college_location = "Sampaloc, Manila";
$college_from = "2024-06";
$college_to = "2028-03";
$college_graduate = "yes";
$course = "BS Information Technology Specialized in Web and Mobile Application Development";
$other_education = "N/A";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippine Employment Application</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 1rem;
            background-color: #f4f7fb;
            color: #222;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 1rem;
            background-color: white;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .section-header {
            background-color: #bdd7ee;
            border: 1px solid #8ab4d6;
            padding: 0.75rem 1rem;
            margin: 0 -1rem 1rem;
            text-align: center;
            font-weight: bold;
            color: #1f4e79;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .col {
            flex: 1 1 240px;
            min-width: 0;
        }

        input, select, textarea {
            min-width: 0;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }

        label {
            font-size: 0.95rem;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 0.65rem 0.75rem;
            border: 1px solid #aac4d9;
            border-radius: 5px;
            background-color: #fafbfc;
            font-size: 1rem;
        }

        .inline-group {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .inline-group label {
            font-weight: normal;
        }

        .checkbox-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
        }

        .section-box {
            padding: 1rem;
            border: 1px solid #d0d7de;
            border-radius: 8px;
            margin-bottom: 1rem;
            background-color: #fbfcfd;
        }

        button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 1.4rem;
            background-color: #1f6feb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #165bcc;
        }

        @media (max-width: 640px) {
            .row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section-header">PERSONAL INFORMATION</div>

        <form>
            <div class="section-box">
                <div class="row">
                    <div class="col field">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" value="<?= $fullname ?>" placeholder="Last, First, Middle">
                    </div>
                    <div class="col field">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" value="<?= $date ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="birthday">Birthday</label>
                        <input type="date" id="birthday" name="birthday" value="<?= $birthday ?>">
                    </div>
                    <div class="col field">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" value="<?= $age ?>" min="0" step="1">
                    </div>
                    <div class="col field">
                        <label for="nationality">Nationality</label>
                        <input type="text" id="nationality" name="nationality" value="<?= $nationality ?>">
                    </div>
                    <div class="col field">
                        <label for="gender">Gender</label>
                        <input type="text" id="gender" name="gender" value="<?= $gender ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="<?= $address ?>" placeholder="House/Street, Barangay">
                    </div>
                    <div class="col field">
                        <label for="city">City / Municipality</label>
                        <input type="text" id="city" name="city" value="<?= $city ?>">
                    </div>
                    <div class="col field">
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province" value="<?= $province ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="col field">
                        <label for="phone">Phone / Mobile No.</label>
                        <input type="tel" id="phone" name="phone" value="<?= $phone ?>" placeholder="09XX-XXX-XXXX">
                    </div>
                    <div class="col field">
                        <label for="tin">TIN</label>
                        <input type="text" id="tin" name="tin" value="<?= $tin ?>" placeholder="e.g. 123-456-789">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="sss">SSS / GSIS No.</label>
                        <input type="text" id="sss" name="sss" value="<?= $sss ?>" placeholder="Social Security / Government Service Insurance">
                    </div>
                    <div class="col field">
                        <label for="philhealth">PhilHealth No.</label>
                        <input type="text" id="philhealth" name="philhealth" value="<?= $philhealth ?>">
                    </div>
                    <div class="col field">
                        <label for="pagibig">PAG-IBIG No.</label>
                        <input type="text" id="pagibig" name="pagibig" value="<?= $pagibig ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="date_available">Date Available</label>
                        <input type="date" id="date_available" name="date_available" value="<?= $date_available ?>">
                    </div>
                    <div class="col field">
                        <label for="desired_pay">Desired Salary</label>
                        <input type="number" id="desired_pay" name="desired_pay" value="<?= $desired_pay ?>" placeholder="0.00" step="0.01">
                    </div>
                    <div class="col field">
                        <label for="position">Position Applied For</label>
                        <input type="text" id="position" name="position" value="<?= $position ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label>Employment Desired</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="employment_desired" value="full-time" <?= $employment_desired === 'full-time' ? 'checked' : '' ?>> Full-time</label>
                            <label><input type="checkbox" name="employment_desired" value="part-time" <?= $employment_desired === 'part-time' ? 'checked' : '' ?>> Part-time</label>
                            <label><input type="checkbox" name="employment_desired" value="contractual" <?= $employment_desired === 'contractual' ? 'checked' : '' ?>> Contractual</label>
                            <label><input type="checkbox" name="employment_desired" value="seasonal" <?= $employment_desired === 'seasonal' ? 'checked' : '' ?>> Seasonal</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-header">EMPLOYMENT ELIGIBILITY</div>

            <div class="section-box">
                <div class="row">
                    <div class="col field">
                        <label>Are you legally eligible to work in the Philippines?</label>
                        <div class="checkbox-group">
                            <label><input type="radio" name="work_eligibility" value="yes" <?= $work_eligibility === 'yes' ? 'checked' : '' ?>> Yes</label>
                            <label><input type="radio" name="work_eligibility" value="no" <?= $work_eligibility === 'no' ? 'checked' : '' ?>> No</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label>Have you ever worked for this employer?</label>
                        <div class="checkbox-group">
                            <label><input type="radio" name="worked_before" value="yes" <?= $worked_before === 'yes' ? 'checked' : '' ?>> Yes</label>
                            <label><input type="radio" name="worked_before" value="no" <?= $worked_before === 'no' ? 'checked' : '' ?>> No</label>
                        </div>
                    </div>
                    <div class="col field">
                        <label for="previous_dates">If yes, write the start and end dates</label>
                        <input type="text" id="previous_dates" name="previous_dates" value="<?= $previous_dates ?>" placeholder="MM/YYYY - MM/YYYY">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label>Have you ever been convicted of a crime?</label>
                        <div class="checkbox-group">
                            <label><input type="radio" name="felony" value="yes" <?= $felony === 'yes' ? 'checked' : '' ?>> Yes</label>
                            <label><input type="radio" name="felony" value="no" <?= $felony === 'no' ? 'checked' : '' ?>> No</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="felony_explain">If yes, please explain</label>
                        <textarea id="felony_explain" name="felony_explain" rows="3" placeholder="Provide details if applicable"><?= $felony_explain ?></textarea>
                    </div>
                </div>
            </div>

            <div class="section-header">EDUCATION</div>

            <div class="section-box">
                <div class="row">
                    <div class="col field">
                        <label for="highschool">High School</label>
                        <input type="text" id="highschool" name="highschool" value="<?= $highschool ?>" placeholder="School Name">
                    </div>
                    <div class="col field">
                        <label for="hs_location">City / Province</label>
                        <input type="text" id="hs_location" name="hs_location" value="<?= $hs_location ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="hs_from">From</label>
                        <input type="month" id="hs_from" name="hs_from" value="<?= $hs_from ?>">
                    </div>
                    <div class="col field">
                        <label for="hs_to">To</label>
                        <input type="month" id="hs_to" name="hs_to" value="<?= $hs_to ?>">
                    </div>
                    <div class="col field">
                        <label>Graduate?</label>
                        <div class="checkbox-group">
                            <label><input type="radio" name="hs_graduate" value="yes" <?= $hs_graduate === 'yes' ? 'checked' : '' ?>> Yes</label>
                            <label><input type="radio" name="hs_graduate" value="no" <?= $hs_graduate === 'no' ? 'checked' : '' ?>> No</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="college">College / University</label>
                        <input type="text" id="college" name="college" value="<?= $college ?>" placeholder="School Name">
                    </div>
                    <div class="col field">
                        <label for="college_location">City / Province</label>
                        <input type="text" id="college_location" name="college_location" value="<?= $college_location ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="college_from">From</label>
                        <input type="month" id="college_from" name="college_from" value="<?= $college_from ?>">
                    </div>
                    <div class="col field">
                        <label for="college_to">To</label>
                        <input type="month" id="college_to" name="college_to" value="<?= $college_to ?>">
                    </div>
                    <div class="col field">
                        <label>Graduate?</label>
                        <div class="checkbox-group">
                            <label><input type="radio" name="college_graduate" value="yes" <?= $college_graduate === 'yes' ? 'checked' : '' ?>> Yes</label>
                            <label><input type="radio" name="college_graduate" value="no" <?= $college_graduate === 'no' ? 'checked' : '' ?>> No</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="course">Diploma / Degree</label>
                        <input type="text" id="course" name="course" value="<?= $course ?>" placeholder="e.g. BSBA, BSED">
                    </div>
                </div>

                <div class="row">
                    <div class="col field">
                        <label for="other_education">Other Education</label>
                        <input type="text" id="other_education" name="other_education" value="<?= $other_education ?>" placeholder="Short course, training, vocational school">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>