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
<title>Results Sheet</title>

<?php
$selectedDepartment = $_GET['department'];
$selectedExYear = $_GET['exYear'];
$selectedSemester = $_GET['semester'];
$batch = $_GET['batch'];
$stuID = $_GET['stuID'];

// Retrieve the student's first name and last name from the database
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
                        <label for="examination">
                            '.$selectedExYear.'  '.$selectedSemester.'
                        </label>
                        <br>
                        <label for="department">
                            '.$selectedDepartment.'
                        </label>
                        <p>Results Sheet</p>
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
                                        <th>Subject Code</th>
                                        <th>Subject Name</th>
                                        <th>Marks</th>
                                    </tr>
                                </thead>';

                                echo '<tbody>';

                                // Retrieve the results for the selected student and display them in the table
                                $sql_results = "SELECT r.SubjectCode, r.Marks, s.SubName FROM results r
                                    INNER JOIN subjects s ON r.SubjectCode = s.SubCode 
                                    WHERE r.StudentID = '$stuID' 
                                    AND r.StuBatch = '$batch' 
                                    AND r.Department = '$selectedDepartment' 
                                    AND r.AccYear = '$selectedExYear' 
                                    AND r.AccSemester = '$selectedSemester'";

                                $result_results = $conn->query($sql_results);

                                while ($row_results = $result_results->fetch_assoc()) {
                                    $subjectCode = $row_results['SubjectCode'];
                                    $marks = $row_results['Marks'];
                                    $subjectName = $row_results['SubName'];

                                    // Display the subject details and marks in the table
                                    echo "<tr>";
                                    echo "<td>$subjectCode</td>";
                                    echo "<td>$subjectName</td>";
                                    echo "<td>$marks</td>";
                                    echo "</tr>";
                                }

                                $sql_GPA = "SELECT GPA FROM stugpa
                                    WHERE StudentID = '$stuID' 
                                    AND StudentBatch = '$batch' 
                                    AND Department = '$selectedDepartment' 
                                    AND AccYear = '$selectedExYear' 
                                    AND AccSemester = '$selectedSemester'";

                                $result_GPA = $conn->query($sql_GPA);
                                $row_GPA = $result_GPA->fetch_assoc();
                                $GPA = $row_GPA['GPA'];

                                // Display the GPA value in the table
                                echo "<tr>";
                                echo "<th colspan='2'>SGPA</th>";
                                echo "<th>". number_format($GPA, 2) ."</th>";
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
                <a href="resultsEnterStudent.php">
                <button type="button" class="btn btn-outline-light text-dark"><i class="fa fa-angle-left"></i> Back</button>
                </a>
            </div>
         </div>

        <div class="col-sm-6">
            <div class="form-group" align="right" class="download">
                <button type="button" class="btn btn-outline-dark" onclick="printResults()"><i class="fa fa-download"></i> Download</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js" integrity="sha512-sQCKT2y16yvNdFQqg0sqiD+gcZS/qv0J8VNluoem2y6s0Izq6sBp14YnNvbpzk1hkyoiv/2uDFv8j5ceQUPjOw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function printResults() {
    var buttons = document.getElementsByClassName("download");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].style.display = "none";
    }

    var element = document.getElementById("contentToPrint");
    var opt = {
        margin: 0,
        filename: "results.pdf",
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