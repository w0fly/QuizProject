<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src="vendor/assets/images/users/User_Circle.png" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php
                        foreach($adminInfo as $cek)
                        {
                            ?>
                            <?= $cek->name ?>
                            <?php
                        }
                        ?>

                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php"> Profilim</a></li>
                        <li><a href="logout.php"> Çıkış Yap</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Aktif</p>
            </div>
        </div>
<div id="sidebar-menu">
    <ul>
        <li>
            <a href="home.php" class="waves-effect"><i class="ti-home"></i><span> Genel Bakış </span></a>
        </li>

        <li>
            <a href="educators.php" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Eğitmenler <span class="badge badge-primary pull-right">
                        <?php
                        $admins = $con->prepare("SELECT COUNT(*) FROM educators");
                        $admins->execute();
                        $adminsay = $admins->fetchColumn();
                        echo $adminsay;
                        ?>
                    </span></span></a>
        </li>

        <li>
            <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Sınav Yönetimi </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
            <ul class="list-unstyled">
                <li><a href="quiz.php">Sorular</a></li>
                <li><a href="settings.php">Soru Yönetimi</a></li>
                <li><a href="categories.php">Kategoriler</a></li>
                <li><a href="sub.php">Müfredat Konuları</a></li>
            </ul>
        </li>
        <li>
            <a href="class.php" class="waves-effect"><i class="fa fa-pencil-square-o"></i> <span> Sınıf Yönetimi </span> <span class="pull-right"></span></a>

        </li>

        <li>
            <a href="corps.php" class="waves-effect"><i class="ti-plus"></i> <span> Kurumlar </span> <span class="pull-right"></span></a>
        </li>
        <li>
            <a href="profile.php" class="waves-effect"><i class="ti-wand"></i> <span> Kullanıcı Ayarları </span> <span class="pull-right"></span></a>
        </li>

        <!--li>
            <a href="settings.php" class="waves-effect"><i class="ti-write"></i><span> Site Yönetimi </span><span class="pull-right"></span></a>
        </li-->



    </ul>
</div>
