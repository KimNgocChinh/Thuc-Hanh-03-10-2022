<!DOCTYPE html>
<html>

<head>
    <title>Thêm bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</head>

<body>
    <form action="posts_add.php" enctype="multipart/form-data" method="post"
        class="form mt-5 justify-content-center d-lex align-items-center bg-dark p-5 rounded-4">
        <table border="1" width="600" class="table table-striped text-light">
            <tr class='pt-5'>
                <td width="230" class='text-light'>Tiêu đề</td>
                <td width="329"><input type="text" name="title" /></td>
            </tr>
            <tr>
                <td>URL </td>
                <td><input type="text" name="url" /></td>
            </tr>
            <tr>
                <td class='text-light'>Content </td>
                <td><textarea name="content" id="content" placeholder="Đây là nội dung..." class="noidung" rows="10"
                        cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Ảnh </td>
                <td><input type="hidden" name="size" value="1000000">
                    <input type="file" name="image" class="hinhanh"><br /><br />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit" name="btn_submit" class="btn btn-primary">Save
                        data</button></td>
            </tr>
        </table>
    </form>
    <br />

    <h2>Các bài post trong Database</h2>
    <?php require 'posts_xuly.php';?>
</body>

</html>