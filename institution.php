<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Institution Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/institution.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdoJxHA8ZFYPR2o3vmF_GBzCAU8LVPbVc&callback=initMap"
     type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="side-bar">
        <div class="side-bar-brand">
            <h2><span class="lab la-accusoft"></span>FIKA</h2>
        </div>
        <div class="menu">
            <button><a href="index.php">Home</a></button>
            <button><a href="">About</a></button>
        </div>
        <div class="side-bar-nav">
            <ul>
                <li>
                    <a href="#">
                        <span class="nav-link">Dashboard</span>
                        <span><i class="fa fa-home"></i></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="nav-link">Log Out</span>
                        <span><i class="fa fa-sign-out"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <div class="main-content">
        <header>
            <div class="head-inner">
                <div class="right-part">
                    <form>
                        <input type="text" placeholder="search...." required="">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="left-part">
                    <ul>
                        <li>
                            <div class="profile">
                                <div class="avatar-name">
                                    <h3>School bus tracker</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>

    <br><br><br><br>
    <div class="main-section">
        <div class="info-card">
            <div class="card">
                <div class="card-icon">
                    <span><i class="fas fa-book-open"></i></span>
                    <div class="card-details">
                        <h4>Total Students</h4>
                        <h2>425</h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <span><i class="fas fa-users-alt"></i></span>
                    <div class="card-details">
                        <h4>Total Drivers</h4>
                        <h2>5</h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-icon">
                    <span><i class="fas fa-shuttle-van"></i></span>
                    <div class="card-details">
                        <h4>Total Buses</h4>
                        <h2>5</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="institution-section">
        <div class="info-card">
            <div class="main-table">
                <div class="title">
                    <h3>STUDENT TRACK </h3>
                </div>
                <div class="user_table">
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>View location</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stephen Njeri</td>
                                <td><a href="#" class="btn map-trigger" >View</a></td>
                            </tr>
                            <tr>
                                <td>Janet Mwangi</td>
                                <td><a href="#" class="btn map-trigger" >View</a></td>
                            </tr>
                            <tr>
                                <td>Grace Wanjiru</td>
                                <td><a href="#" class="btn map-trigger" >View</a></td>
                            </tr>
                            <tr>
                                <td>Solomon Mwau</td>
                                <td><a href="#" class="btn map-trigger" >View</a></td>
                            </tr>
                            <tr>
                                <td>Stella Mweni</td>
                                <td><a href="#" class="btn map-trigger" >View</a></td>
                            </tr>
                            <tr>
                                <td>John Paul</td>
                                <td><a href="#" class="btn map-trigger" >View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="map-canvas"></div>
        <div id="call">
            <button>
                <table>
                    <tr onclick="window.open('tel:0703952002');">
                        <td>Call Drive</td>
                    </tr>
                </table>
            </button>
        </div>
    </div>

    <script src="js/institution.js"></script>
    
</body>
</html>