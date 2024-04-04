<!doctype html>
<html lang="ru">
<head>
    <?php
        $website_title = "Список всех пользователей на сайте";
        require "blocks/head.php"; 
    ?>
</head>
<body>
    <?php require "blocks/header.php"; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-3">
                <h4>Список пользователей</h4>
                <?php
                require_once "lib/mysql.php";
                $query = $pdo->query('SELECT name, login, id FROM users');
                $users = $query->fetchAll(PDO::FETCH_OBJ);
                foreach ($users as $el) {
                    echo "<div id=user-$el->id>";
                    echo "<b>Имя: </b> $el->name, <b>логин: </b>$el->login ";
                    echo "<button onclick='return deleteUser($el->id);'>Удалить</button> </br>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </main>

    <?php require "blocks/aside.php"; ?>
    <?php require "blocks/footer.php"; ?>

    <script>
        function deleteUser(id){
            $.ajax({
            url: 'ajax/deleteUser.php',
            type: 'POST',
            data: { 'id': id },
            success: function(data) {
                if (data === "Done") {
                    $('#user-' + id).remove();
                } else {
                    alert("Ошибка при удалении пользователя.");
                }
                }
            });
        }
    </script>
</body>
</html>

