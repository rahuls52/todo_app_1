
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php
        $db = mysqli_connect('localhost', 'root', '', 'todo_app');

        if(isset($_POST['submit'])){
            $task =$_POST['task'];

            mysqli_query($db, "INSERT INTO task (task) VALUES ('$task')");
            header('location: index.php');
        }
        //Delete task

        if(isset($_GET['del_task'])){
            $id = $_GET['del_task'];
            mysqli_query($db, "DELETE FROM task WHERE id=$id");
            header('loction: index.php');
        }
        $tasks = mysqli_query($db, "SELECT * FROM task");
?>

<html>
<head>
<title>
    To do List Appliction </title>
    <link rel= "stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class = "heading">
    <h2>To do List Appliction </h2>
    
    </div>
    <form method="Post" action="index.php">
    <input type="text" name="task" class= "task_input">
    <button type= "submit" class = "add_btn"  name ="submit">Add</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>N</th>
                <th>task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($tasks)) { ?>
                <tr>
                <td><?php echo $row['id'];?> </td>
                <td class ="task"><?php echo $row['task']; ?></td>
                <td class ="delete">
                    <a href= "index.php?del_task=<?php echo $row['id'];?>">Delete</a> 
                </td>
            </tr>
           <?php }?>

        </tbody>
    </table>
</body>
</html>

