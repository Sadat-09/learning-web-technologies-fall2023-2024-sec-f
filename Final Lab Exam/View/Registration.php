<!DOCTYPE html>
<html lang="en">
<head>
   
    <title> Ragistration</title>
    <script src="../controller/RegistrationVal.js"></script>
</head>
<body>
    <form method="POST" action="../controller/RegistrationCheck.php">

        <table>
            <tr>
                <td colspan="2" align="center">
                    <h3>Employee Register Panel</h3>
                </td>
            </tr>
            <tr>
                <td>Employee Name</td>
                <td>
                    <input type="text" id="empName"  name="name"> 
            </tr>
            <tr>
                <td>Contact No</td>
                <td>
                    <input type="number"  id="contactNo" name="contactNo" >
                </td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" id="userName" name="username" >
                </td>
            </tr>
            <tr>
                <td>User Pass Word</td>
                <td>
                    <input type="password" id="password" name="password" >
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Add Employee" onclick="RegVal()">
                   
                    <button><a href="AdminHome.php">Back</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>