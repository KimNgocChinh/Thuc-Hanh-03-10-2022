<head>
    <title>Sửa dữ liệu trong Database</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <style>
    .edit-post {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        padding: 40px;
        background-color: #000;
        color: #fff;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <?php
// Kết nối Database
require_once 'sql.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `posts` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
    <div class='edit-post'>
        <form method="POST" class="form">
            <h2>Sửa thành viên</h2>
            <label>Tiêu đề:<br />
                <input type="text" value="<?php echo $row['title']; ?>" name="title" id="title" /></label><br />
            <label>URL:<br />
                <input type="text" value="<?php echo $row['url']; ?>" name="url" id="url" /></label><br />
            <label>Nội dung:<br />
                <textarea value="" name="content" id="content" rows="10"
                    cols="80"><?php echo $row['content']; ?></textarea></label><br />
            <label>Hình ảnh: <br />
                <input type="text" value="<?php echo $row['image']; ?>" name="image" /></label><br />
            <button type="submit" name="update_posts" class='btn btn-primary'>Update</button>
            <?php require_once 'sql.php';?>
        </form>
    </div>
</body>

</html>