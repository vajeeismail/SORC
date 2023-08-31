<?php
include_once 'connection.php';
?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<title>RESULTS (Sliate - Sammanthurai)</title>

<?php
$selectedDepartment = $_GET['department'];
$stuID = $_GET['stuID'];

$sql_student = "SELECT FirstName, LastName FROM student WHERE StudentID = '$stuID'";
$result_student = $conn->query($sql_student);
$row_student = $result_student->fetch_assoc();
$firstName = $row_student['FirstName'];
$lastName = $row_student['LastName'];

echo '
<div id="contentToPrint">
    <div class="container">
        <div class="container p-3 my-3 border" style="size: 20px;">
            <div class="jumbotron" style="background-color:lightsmoke; margin-bottom: 0; padding: 0;">
                <div class="jumbotron" style="background-color:white; margin-bottom: 0; padding: 0;">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group" align="right">
                                <img src="Images/Sliate logo.jpg" alt="Sliate Logo" style="height: 90px;">
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <div class="form-group" align="Left">
                                <h1>SLIATE-SAMMANTHURAI</h1>
                                <p style="font-size: 20px;"><b>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" align="center">
                        <label for="department">
                            '.$selectedDepartment.'
                        </label>
                        <p>Report Sheet</p>
                    </div> 
                    <hr>

                    <div class="jumbotron" style="background-color:white; padding: 0;">
                        <div class="form-group">
                            <table class="table table-borderless" style="width:50%;">
                                <tbody>
                                    <tr>
                                        <td>REGISTRATION NO:</td>
                                        <td><label for="stuID">'.$stuID.'</label></td>
                                    </tr>
                                    <tr>
                                        <td>NAME WITH INITIALS:</td>
                                        <td><label for="stuName">'.$firstName.' '.$lastName.'</label></td>                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
     
                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Academic Year</th>
                                        <thAcademic Semester</th>
                                        <th>SGPA</th>
                                    </tr>
                                </thead>';

                                echo '<tbody>';

                                    $sql = "SELECT AccYear, AccSemester, GPA FROM stugpa WHERE StudentID = '$stuID' AND Department = '$selectedDepartment'";
                                    $result = $conn->query($sql);
                                    $totalGPA = 0;
                                    $rowCount = 0;

                                    while ($row = $result->fetch_assoc()) {
                                        $year = $row['AccYear'];
                                        $semi = $row['AccSemester'];
                                        $GPA = $row['GPA'];

                                        echo "<tr>";
                                        echo "<td>$year</td>";
                                        echo "<td>$semi</td>";
                                        echo "<td>". number_format($GPA, 2) ."</td>";
                                        echo "</tr>";

                                        $totalGPA += $GPA;
                                        $rowCount++;
                                    }

                                    $averageGPA = 0;

                                    if ($rowCount > 0) {
                                        $averageGPA = $totalGPA / $rowCount;
                                    }

                                    echo "<tr>";
                                    echo "<th colspan='2'>Average SGPA</th>";
                                    echo "<th>" . number_format($averageGPA, 2) . "</th>";
                                    echo "</tr>";
                                echo '</tbody>';
                            echo'</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <a href="reportEnterStudent.php">
                <button type="button" class="btn btn-outline-light text-dark"><i class="fa fa-angle-left"></i> Back</button>
                </a>
            </div>
         </div>

        <div class="col-sm-6">
            <div class="form-group" align="right" class="download">
                <button type="button" class="btn btn-outline-dark" onClick="printReport()"><i class="fa fa-download"></i> Download</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js" integrity="sha512-sQCKT2y16yvNdFQqg0sqiD+gcZS/qv0J8VNluoem2y6s0Izq6sBp14YnNvbpzk1hkyoiv/2uDFv8j5ceQUPjOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function printReport() {
    var buttons = document.getElementsByClassName("download");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].style.display = "none";
    }

    var element = document.getElementById("contentToPrint");
    var opt = {
        margin: 0,
        filename: "report.pdf",
        image: { type: "jpeg", quality: 1 },
        html2canvas: { scale: 2, height: element.offsetHeight + 200 },
        jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
    };

    html2pdf().set(opt).from(element).save();

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].style.display = "block";
    }
}
</script>
';
?>