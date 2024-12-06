<!DOCTYPE html>
<head>
    <title>Resume Builder</title>
</head>
<body>
    <h2>Resume Builder</h2>
    <form>
        <fieldset>
            <legend>Personal Information</legend>
            
            <table>
                
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="John Doe"></td>
                </tr>

                <tr>
                    <td><font size="3"> Email Address:</font></td>
                    <td><input type="email" name="email" placeholder="email@example.com"></td>
                </tr>

                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" name="phone" placeholder="123-456-7890"></td>
                </tr>

                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="date of birth"></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>
                    <input type="radio" name="gender" value="Gender1"> Male
                    <input type="radio" name="gender" value="Gender2">Female
                    <input type="radio" name="gender" value="Gender3">other
                    </td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><textarea name="address" placeholder="1234 Main st, City, Country" rows="3" cols="20" ></textarea></td>
                </tr>
            </table>
        </fieldset>
    


    <fieldset>
            <legend>Education</legend>
            
            <table>
                
                <tr>
                    <td>Highest Degree:</td>
                    <td>
                        <select>
                            <option value="select degree">Select Degree</option>
                            <option value="psc">PSC</option>
                            <option value="jsc">JSC</option>
                            <option value="ssc">SSC</option>
                            <option value="hsc">HSC</option>
                            <option value="bsc">BSc</option>
                            <option value="ba">BA</option>
                            <option value="bcom">BCom</option>
                            <option value="cse">CSE</option>
                            <option value="eee">EEE</option>
                            <option value="civil">Civil</option>
                            <option value="bba">BBA</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Institution:</td>
                    <td><input type="text" name="institution" placeholder="University Name"></td>
                </tr>

                <tr>
                    <td>Year of Graduation:</td>
                    <td><input type="text" size="6"></td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend>Work Experience</legend>
            
            <table>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text" name="company name" placeholder="Company Name"></td>
                </tr>

                <tr>
                    <td>Job Title:</td>
                    <td><input type="job title" placeholder="Job Title"></td>
                </tr>

                <tr>
                    <td>Duration:</td>
                    <td>
                        <input type="month"> to
                        <input type="month">
                    </td>
                </tr>
            </table>
        </fieldset>


        <fieldset>
            <legend>Skills</legend>
            
            <table>
                
                <tr>
                    <td>Skills:
                            <input type="checkbox" name="html" value="html">HTML
                            <input type="checkbox" name="css" value="css">CSS
                            <input type="checkbox" name="javascript" value="javascript">JavaScript
                            <input type="checkbox" name="python" value="python">Python
                            <input type="checkbox" name="java" value="java">Java
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <table>
                
                <tr>
                    <td>
                        <input type ="submit" name="submit" value="Submit Resume">
                        <input type ="reset"  name="clear"  value="Clear Form"> 
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
