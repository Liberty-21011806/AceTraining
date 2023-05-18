<!--NPT NEEDED-->
<?php

/*
* @author LibertyL
*/

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));

$sql = "
CREATE TABLE studentTaking (
    courseId INT NOT NULL,
    id INT NOT NULL,
    dateRegistered DATE NOT NULL,
    authorised BOOLEAN,
    FOREIGN KEY (courseId) REFERENCES course(courseId)
    ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (id) REFERENCES users(id)
    ON UPDATE CASCADE ON DELETE RESTRICT
)
";

mysqli_query($conn, $sql);

?>