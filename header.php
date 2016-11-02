        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://tsuts.tskoli.is/2T/1810943469/GSOVERK5/">Start Bootstrap</a>
            </div>         
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://tsuts.tskoli.is/2T/1810943469/GSOVERK5/form.php">Form</a>
                    </li>
                    <li>
                        <a href="http://tsuts.tskoli.is/2T/1810943469/GSOVERK5/login.php">login</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li > <?php 
                        $countVisit = 0;
                        if(isset($_COOKIE['countVisit']))
                        {
                            $countVisit = $_COOKIE['countVisit'];
                            $countVisit ++;
                        }
                       setcookie('countVisit', $countVisit,  time()+3600);
                        if($countVisit == 0)
                        {
                            echo "<br>";
                            echo "Welcome";
                        } 
                        else 
                        {
                            echo "<br>";
                            echo "Þú aftur... visit number ".$countVisit;
                        }
                    ?> </li>
                </ul>
            </div>
                
        </div>
    </nav>