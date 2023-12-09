<?php 
$con = mysqli_connect("localhost", "soojin", "1234", "test");
$c1_d = $_POST["c1"];
$sql = "SELECT distinct Users.Name, Foods.Foodname
        FROM Foods, Users, AllergyTypes, Allergy_Food, User_Allergy
        WHERE Users.UserID = User_Allergy.UserID
        AND User_Allergy.AllergyTypeID = AllergyTypes.AllergyTypeID
        AND User_Allergy.UserAllergyID = Allergy_Food.UserAllergyID
        AND Allergy_Food.FoodID = Foods.FoodID
        AND Users.Name LIKE '%$c1_d'";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>검색 결과</title>
</head>
<body>
    <h2>검색 결과</h2>
    <table>
        <tr>
            <th>이름</th>
            <th>음식</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Foodname']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>