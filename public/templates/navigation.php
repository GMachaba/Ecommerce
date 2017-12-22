    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <a class="navbar-brand" href="index.php">EshopTz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <form action="?page=search" method="POST" class="col-md-5">
            <div class="form-group">
              <input type="text" class="form-control"  name="engine" placeholder="Search">
            </div>
        </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if (Db_connect::pages() =='home') {
                    echo 'active';
                }?>">
                    <a class="nav-link" href="?page=home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if (Db_connect::pages() =='Mobiles') {
                   echo 'active';
                }?>">
                    <a class="nav-link" href="?page=Mobiles">Mobiles</a>
                </li>
                <li class="nav-item <?php if (Db_connect::pages() =='Laptops') {
                    echo 'active';
                }?>">
                    <a class="nav-link" href="?page=Laptops">Laptops</a>
                </li>

                <li class="nav-item <?php if (Db_connect::pages() =='Games') {
                    echo 'active';
                }?>">
                    <a class="nav-link" href="?page=Games">Games consoles &Accesories</a>
                </li>
                <li class="nav-item <?php if (Db_connect::pages() =='cart') {
                    echo 'active';
                }?>">
                    <a class="nav-link" href="?page=cart">cart</a>
                </li>
                    <?php
                    if($session->is_logged()) {
                        ?>
                        <li class="nav-item <?php if(Db_connect::pages() == 'profile') {echo 'active'; } ?>">
                            <a class="nav-link" href="?page=profile">profile</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=logout">Logout</a>
                            </li>
                    <?php
                        }else{?>
                                <li class="nav-item <?php if (Db_connect::pages() =='login') {
                                echo 'active';
                            } ?>">
                            <a class="nav-link" href="?page=login">Login</a>
                            </li>
                        <?php
                    }
                        ?>
            </ul>
        </div>
    </nav>
