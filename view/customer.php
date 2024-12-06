<!DOCTYPE html>
<html>
<head>
    <title>Elder Person Registration</title>
</head>
<body>

    <h1>Elder Person Registration Form</h1>

    <form>

        <!-- Personal Information Section -->
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="confirm_password" required></td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" required></td>
                </tr>
                <tr>
                    <td>Select Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> Other
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" required></td>
                </tr>
            </table>
        </fieldset>

        <!-- Contact Information Section -->
        <fieldset>
            <legend>Contact Information</legend>
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="tel" name="phone" pattern="[0-9]{11}" placeholder="11-digit number" required></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" rows="3" required></textarea></td>
                </tr>
                <tr>
                    <td>Zip Code:</td>
                    <td><input type="text" name="zip" pattern="[0-9]{4}" required></td>
                </tr>
            </table>
        </fieldset>

        <!-- Medical Information Section -->
        <fieldset>
            <legend>Medical Information</legend>
            <table>
                <tr>
                    <td>Blood Group:</td>
                    <td>
                        <select name="blood_group" required>
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Known Allergies:</td>
                    <td><input type="text" name="allergies" placeholder="List any known allergies"></td>
                </tr>
                <tr>
                    <td>Medical Conditions:</td>
                    <td><textarea name="medical_conditions" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>Current Medications:</td>
                    <td><textarea name="medications" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>Chronic Illnesses:</td>
                    <td>
                        <input type="checkbox" name="chronic_illness" value="diabetes"> Diabetes
                        <input type="checkbox" name="chronic_illness" value="hypertension"> Hypertension
                        <input type="checkbox" name="chronic_illness" value="arthritis"> Arthritis
                        <input type="checkbox" name="chronic_illness" value="heart_disease"> Heart Disease
                        <input type="checkbox" name="chronic_illness" value="other"> Other
                    </td>
                </tr>
                <tr>
                    <td>Mobility Limitations:</td>
                    <td>
                        <input type="radio" name="mobility" value="no_limitations"> No Limitations
                        <input type="radio" name="mobility" value="limited_mobility"> Limited Mobility
                        <input type="radio" name="mobility" value="requires_assistance"> Requires Assistance
                    </td>
                </tr>
                <tr>
                    <td>Dietary Restrictions:</td>
                    <td><textarea name="dietary_restrictions" rows="2" placeholder="List dietary restrictions"></textarea></td>
                </tr>
                <tr>
                    <td>Recent Surgeries:</td>
                    <td><textarea name="surgeries" rows="2"></textarea></td>
                </tr>
                <tr>
                    <td>Recent Hospitalizations:</td>
                    <td><textarea name="hospitalizations" rows="2"></textarea></td>
                </tr>
                <tr>
                    <td>Primary Care Physician:</td>
                    <td><input type="text" name="physician" required></td>
                </tr>
                <tr>
                    <td>Physician's Contact:</td>
                    <td><input type="tel" name="physician_contact" required></td>
                </tr>
                <tr>
                    <td>Height (cm):</td>
                    <td><input type="number" name="height" min="0" required></td>
                </tr>
                <tr>
                    <td>Weight (kg):</td>
                    <td><input type="number" name="weight" min="0" required></td>
                </tr>
                <tr>
                    <td>Blood Pressure:</td>
                    <td><input type="text" name="blood_pressure" placeholder="e.g., 120/80 mmHg"></td>
                </tr>
                <tr>
                    <td>Vaccination Status:</td>
                    <td>
                        <input type="checkbox" name="vaccinations" value="covid"> COVID-19
                        <input type="checkbox" name="vaccinations" value="flu"> Flu
                        <input type="checkbox" name="vaccinations" value="pneumonia"> Pneumonia
                        <input type="checkbox" name="vaccinations" value="other"> Other
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Health Insurance Information Section -->
        <fieldset>
            <legend>Health Insurance Information</legend>
            <table>
                <tr>
                    <td>Health Insurance Provider:</td>
                    <td><input type="text" name="insurance_provider" required></td>
                </tr>
                <tr>
                    <td>Policy Number:</td>
                    <td><input type="text" name="policy_number" required></td>
                </tr>
            </table>
        </fieldset>

        <!-- Emergency Contact Information Section -->
        <fieldset>
            <legend>Emergency Contact Information</legend>
            <table>
                <tr>
                    <td>Emergency Contact Name:</td>
                    <td><input type="text" name="emergency_contact_name" required></td>
                </tr>
                <tr>
                    <td>Relationship:</td>
                    <td><input type="text" name="emergency_contact_relationship" required></td>
                </tr>
                <tr>
                    <td>Emergency Contact Phone:</td>
                    <td><input type="tel" name="emergency_contact_phone" pattern="[0-9]{11}" required></td>
                </tr>
            </table>
        </fieldset>

        <!-- Terms and Conditions Section -->
        <fieldset>
            <legend>Terms and Conditions</legend>
            <table>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="terms" required> I agree to the terms and conditions
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Submit and Reset Buttons -->
        <fieldset>
            <table>
                <tr>
                    <td><input type="reset" value="Reset"></td>
                    <td><input type="submit" value="Register"></td>
                </tr>
            </table>
        </fieldset>

    </form>

</body>
</html>
