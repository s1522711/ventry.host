<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: https://mhills.de');
      }
      if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: https://mhills.de");
      }
      $username = $_SESSION['username'];
      $db = mysqli_connect('localhost', 'root', 'Julian2016--!123', 'file-host');
      $sql = "SELECT *FROM `users` WHERE `username`='$username'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
      $discord_avatar = $row["discord_avatar"];
      $uuid = $row["uuid"];

      //Invite Count
      $query21 = "SELECT * FROM `invites` WHERE `inviteAuthor`=" . '"' . $username . '";';
      $results21 = mysqli_query($db, $query21);
      $rows21 = mysqli_num_rows($results21);

      //Invite Count
      $query22 = "SELECT * FROM `users` WHERE `inviter`=" . '"' . $username . '";';
      $results22 = mysqli_query($db, $query22);
      $rows22 = mysqli_num_rows($results22);
      function GetDirectorySize($path){
        $bytestotal = 0;
        $path = realpath($path);
        if($path!==false && $path!='' && file_exists($path)){
            foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
                $bytestotal += $object->getSize();
            }
        }
        return $bytestotal;
      }
      function human_filesize($bytes, $decimals)
{
    $size = array(
        'B',
        'KB',
        'MB',
        'GB',
        'TB',
        'PB',
        'EB',
        'ZB',
        'YB'
    );
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f ", $bytes / pow(1024, $factor)) . @$size[$factor];
}
if($row["banned"] == "false"){
    $totalfillessize = human_filesize(GetDirectorySize("../uploads/$uuid/$username"), 2);
  }
  else{
    $totalfillessize = "Files locked";
  }
/**
* Class and Function List:
* Function list:
* Classes list:
*/

if (!isset($_SESSION['username']))
{
    $_SESSION['msg'] = "You must log in first";
    header('location: https://mhills.de');
}
if (isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header("location: https://mhills.de");
}
$db = mysqli_connect('localhost', 'root', 'Julian2016--!123', 'file-host');
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $uuid = "" . $row["uuid"]. "";

  }
} else {
  echo "0 results";
}

if (isset($_GET['update']))
{
    if (isset($_POST['use_customdomain']))
    {
        $sql3 = "UPDATE users SET use_customdomain='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['use_embeds']))
    {
        $sql3 = "UPDATE users SET use_embed='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }

    if (!isset($_POST['use_customdomain']))
    {
        $sql3 = "UPDATE users SET use_customdomain='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['use_embeds']))
    {
        $sql3 = "UPDATE users SET use_embed='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }

    if (isset($_POST['filename_type']))
    {
        $sql3 = "UPDATE users SET filename_type='long' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['filename_type']))
    {
        $sql3 = "UPDATE users SET filename_type='long' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['filename_type']))
    {
        $sql3 = "UPDATE users SET filename_type='short' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['filename_type']))
    {
        $sql3 = "UPDATE users SET filename_type='short' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }

    if (isset($_POST['use_invisible_url']))
    {
        $sql3 = "UPDATE users SET use_invisible_url='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['use_invisible_url']))
    {
        $sql3 = "UPDATE users SET use_invisible_url='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['use_invisible_url']))
    {
        $sql3 = "UPDATE users SET use_invisible_url='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['use_invisible_url']))
    {
        $sql3 = "UPDATE users SET use_invisible_url='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }


    if (isset($_POST['self_destruct_upload']))
    {
        $sql3 = "UPDATE users SET self_destruct_upload='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['self_destruct_upload']))
    {
        $sql3 = "UPDATE users SET self_destruct_upload='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['self_destruct_upload']))
    {
        $sql3 = "UPDATE users SET self_destruct_upload='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['self_destruct_upload']))
    {
        $sql3 = "UPDATE users SET self_destruct_upload='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }


    if (isset($_POST['url_type']))
    {
        $sql3 = "UPDATE users SET url_type='long' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['url_type']))
    {
        $sql3 = "UPDATE users SET url_type='long' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['url_type']))
    {
        $sql3 = "UPDATE users SET url_type='short' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['url_type']))
    {
        $sql3 = "UPDATE users SET url_type='short' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }

    if (isset($_POST['upload_background_toggle']))
    {
        $sql3 = "UPDATE users SET upload_background_toggle='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['upload_background_toggle']))
    {
        $sql3 = "UPDATE users SET upload_background_toggle='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['upload_background_toggle']))
    {
        $sql3 = "UPDATE users SET upload_background_toggle='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['upload_background_toggle']))
    {
        $sql3 = "UPDATE users SET upload_background_toggle='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }

    if (isset($_POST['use_emoji_url']))
    {
        $sql3 = "UPDATE users SET use_emoji_url='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (isset($_POST['use_emoji_url']))
    {
        $sql3 = "UPDATE users SET use_emoji_url='true' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['use_emoji_url']))
    {
        $sql3 = "UPDATE users SET use_emoji_url='false' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }
    if (!isset($_POST['use_emoji_url']))
    {
        $sql3 = "UPDATE users SET use_emoji_url='short' WHERE username='" . $username . "';";
        $result3 = mysqli_query($db, $sql3);
    }

    header("location: https://mhills.de/dashboard/upload-preferences");
}

$sql = "SELECT * FROM users WHERE username='$username';";
$result = mysqli_query($db, $sql);
$embed = mysqli_fetch_assoc($result);
if ($embed["use_customdomain"] == "true")
{

    $usecustomdomain = "checked";
}
else
{

    $usecustomdomain = "false";
}
if ($embed["use_invisible_url"] == "true")
{

    $invisible_url = "checked";
}
else
{

    $invisible_url = "false";
}
$sql321 = "SELECT * FROM uploads WHERE `username` = '$username' ORDER BY id DESC LIMIT 1;";
$result321 = mysqli_query($db, $sql321);
$embed321 = mysqli_fetch_assoc($result321);
$lastUploadUrl = "https://mhills.de/uploads/$uuid/$username/" . $embed321["filename"];
if ($lastUploadUrl == "https://mhills.de/uploads/")
{
    $lastUploadUrl = "https://mhills.de/images/example.png";
}

if ($embed["use_embed"] == "true")
{

    $useembed = "checked";
}
else
{

    $useembed = "false";
}

if ($embed["filename_type"] == "long")
{

    $uselongfilename = "checked";
}
else
{

    $uselongfilename = "false";
}

if ($embed["url_type"] == "long")
{

    $uselongurl = "checked";
}
else
{

    $uselongurl = "false";
}
if ($embed["self_destruct_upload"] == "true")
{

    $self_destruct_upload = "checked";
}
else
{

    $self_destruct_upload = "false";
}
if ($embed["upload_background_toggle"] == "true")
{

    $useupload_background = "checked";
}
else
{

    $useupload_background = "false";
}
if ($embed["use_emoji_url"] == "true")
{

    $emoji_url = "checked";
}
else
{

    $emoji_url = "false";
}
if(isset($_GET["upload-background"])){
    $username = $_SESSION['username'];
    $background = $_GET["upload-background"];
    $sql = "UPDATE `users` SET `upload_background`='https://mhills.de/upload-backgrounds/" . $background . "' WHERE `username`='$username'";
    $result = mysqli_query($db, $sql);
    header("location: https://mhills.de/dashboard/upload-preferences");
}
if(isset($_GET["reset"])){
    $sql = "UPDATE `users` SET `upload_background`='' WHERE `username`='$username'";
    $result = mysqli_query($db, $sql);
    header("location: https://mhills.de/dashboard/upload-preferences");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='theme-color' content='ffa550' />
  <meta name='og:site_name' content='https://mhills.de/'>
  <meta property="og:title" content="M. Hills File Uploader" />
  <meta property="og:url" content="https://mhills.de/" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="A Free File Uploader for all of your Files." />
  <meta property="og:locale" content="en_GB" />
  <link rel="icon" type="image/png" href="https://mhills.de/images/icons/favicon.ico" />
  <script src='https://unpkg.com/@popperjs/core@2'></script>
            <script src='https://unpkg.com/tippy.js@6'></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script src="https://mhills.de/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://mhills.de/css/toastr.css">
    <script async src="https://arc.io/widget.min.js#3uop4387"></script>
    <link rel="stylesheet" type="text/css" href="https://mhills.de/css/toastr.min.css">
    <!-- Include the Dark theme -->
    <link rel="stylesheet" href="https://mhills.de/node_modules/@sweetalert2/theme-dark/dark.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/styles/default.min.css">
    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/highlight.min.js"></script>
    <script src="https://mhills.de/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <script src="https://mhills.de/js/main.js"></script>
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a style="color: #ffffff;"><img style="height: 75px;" src="https://mhills.de/images/mhills.de.png" alt="Logo" srcset=""> mhills.de</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="https://mhills.de/dashboard/" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a href="user" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#person-fill"></use>
                                            </svg>
                                <span>User</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="invites" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#person-plus-fill"></use>
                                            </svg>
                                <span>Invites</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a href="search" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#search"></use>
                                            </svg>
                                <span>User Search</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub active">
                            <a href="#" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#gear-wide-connected"></use>
                                            </svg>
                                <span>Settings</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item">
                                    <a href="embed-settings">Embed Settings</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="domain-settings">Domain Settings</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="upload-preferences">Upload Preferences</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="rules" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#file-earmark-ruled-fill"></use>
                                            </svg>
                                <span>Rules</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="scoreboard" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#clipboard"></use>
                                            </svg>
                                <span>Scoreboard</span>
                            </a>
                        </li>
                        <li class='sidebar-item  '>
                                <a href='https://mhills.de/dashboard/paste/' class='sidebar-link'>
                                <svg class='bi' width='1em' height='1em' fill='currentColor'>
                                        <use xlink:href='https://mhills.de/dashboard/assets/vendors/bootstrap-icons/bootstrap-icons.svg#card-text'></use>
                                    </svg>
                                    <span>Paste</span>
                                </a>
                            </li>
                        <li class="sidebar-item  ">
                            <a href="https://mhills.de/dashboard/gallery/" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#image-fill"></use>
                                            </svg>
                                <span>Gallery</span>
                            </a>
                        </li>


                        <li class="sidebar-item  ">
                            <a href="upload-file" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#cloud-upload-fill"></use>
                                            </svg>
                                <span>Upload</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://mhills.de/dashboard/index.php?logout=%271%27" class='sidebar-link'>
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                                <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#x-circle-fill"></use>
                                            </svg>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3 style="text-align: center;">Welcome, <?php echo $username ?></h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="row">
   <div class="col-6 col-lg-3 col-md-6" style="width: auto">
       <form action="?update" method="post" name="form" enctype="multipart/form-data">
         <div class="card" style="    width: fit-content;">
            <div class="card-header">
               <h4 class="card-title">Upload Preferences</h4>
            </div>
            <div class="card-body px-3 py-4-5">
            <div class="form-group">
               <div class="flex" style="max-width: 250px">
                  <p class="flex-child-small"><strong style="color: white;">Fake <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='fake-domain'><br>Domain:</strong><br><br>
                     <label class="switch">
                     <input name="use_customdomain" type="checkbox" <?php echo $usecustomdomain ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
                  <p class="flex-child-small"><strong style="color: white;">Invisible <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='invisible-domain'><br>URL:</strong><br><br>
                     <label class="switch">
                     <input name="use_invisible_url" type="checkbox" <?php echo $invisible_url ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
                  <p class="flex-child-small"><strong style="color: white;">Emoji <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='emoji-domain'><br>URL:</strong><br><br>
                     <label class="switch">
                     <input name="use_emoji_url" type="checkbox" <?php echo $emoji_url ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
                  <p class="flex-child-small"><strong style="color: white;">Use <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='use-embeds'><br>Embeds:</strong><br><br>
                     <label class="switch">
                     <input name="use_embeds" type="checkbox" <?php echo $useembed ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
                  <p class="flex-child-small"><strong style="color: white;">Long <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='long-filenames'><br>Filename:</strong><br><br>
                     <label class="switch">
                     <input name="filename_type" type="checkbox" <?php echo $uselongfilename ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
                  <p class="flex-child-small"><strong style="color: white;">Raw <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='raw-url'><br>URL:</strong><br><br>
                     <label class="switch">
                     <input name="url_type" type="checkbox" <?php echo $uselongurl ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
                  <p class="flex-child-small"><strong style="color: white;">Exploding <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='exploading-upload'><br>Upload:</strong><br><br>
                     <label class="switch">
                     <input name="self_destruct_upload" type="checkbox" <?php echo $self_destruct_upload ?>>
                     <span class="slider round"></span>
                     </label>
                  <p class="flex-child-small"><strong style="color: white;">Custom <img style='height:15px;' src='https://upload.wikimedia.org/wikipedia/commons/1/11/Blue_question_mark_icon.svg' id='custom-background'><br>Background:</strong><br><br>
                     <label class="switch">
                     <input name="upload_background_toggle" type="checkbox" <?php echo $useupload_background ?>>
                     <span class="slider round"></span>
                     </label>
                  </p>
               </div>
            </div>
            <div class="input-group">
               <input type="submit" class="btn btn-lg btn-dark" name="button1" onclick="abfrage(this.form)" value="Save" />
            </div>
      </form>
      </div>
      </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6" style="width: auto">
       <form action="?update" method="post" name="form" enctype="multipart/form-data">
         <div class="card" style="    width: fit-content;">
            <div class="card-header">
               <h4 class="card-title">Upload Background</h4>
            </div>
            <div class="card-body px-3 py-4-5">
                <img style="    margin-bottom: 20px;
    border-radius: .7rem;
    width: auto;
    height: 30vh;" src="<?php echo $embed["upload_background"]?>">
                <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
    <br>
    <div id="drag_upload_file">
    <h4 class="card-title">Drag and Drop a File Here</h4>
    <h4 class="card-title">Or</h4>
    <input type="button" class="btn btn-lg btn-dark" value="Select" onclick="file_explorer()" id="imageselect" style="
    color: #fff;
    margin: 5px;
    background-color: #131313;
    border-radius: 7px;
    border-color: #272727;
    color: #fff;
    padding: 10px 30px 10px 30px;
">
        <input type="file" id="selectfile">
    </div>
</div><br>
<input type="button" class="btn btn-lg btn-dark" onclick="window.location='https://mhills.de/dashboard/upload-preferences?reset'" value="Reset"style="
    color: #fff;
    margin: 5px;
    background-color: #131313;
    border-radius: 7px;
    border-color: #272727;
    color: #fff;
    padding: 10px 30px 10px 30px;
">
            </div>
      </div>
   </div>
</div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; mhills.de</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    <script>
                            tippy('#fake-domain', {
  content: "Wether or not you want to use The Fake Domain.<br><br>Without <strong>Fake Domain</strong>: mhills.de/file.png<br>With <strong>Fake Domain</strong>: your.domain/file.png",
  allowHTML: true,
});
tippy('#invisible-domain', {
  content: "Wether or not you want to use The Invisible Domain.<br><br>Without <strong>Invisible Domain</strong>: mhills.de/file.png<br>With <strong>Invisible Domain</strong>: mhills.de/",
  allowHTML: true,
});
tippy('#emoji-domain', {
  content: "Wether or not you want to use The Emoji Domain.<br><br>Without <strong>Emoji Domain</strong>: mhills.de/file.png<br>With <strong>Emoji Domain</strong>: mhills.de/😜😝😜😂😁‌‍😞😝",
  allowHTML: true,
});
tippy('#use-embeds', {
  content: "Wether or not you want to use Embeds.",
  allowHTML: true,
});
tippy('#long-filenames', {
  content: "Wether or not you want to use Long Filenames.<br><br>Without <strong>Long Filenames</strong>: mhills.de/KgfaFhiG.png<br>With <strong>Long Filenames</strong>: mhills.de/SWciifFQQjcamcku",
  allowHTML: true,
});
tippy('#raw-url', {
  content: "Wether or not you want to use The Raw URL.<br><br>Without <strong>The Raw URL</strong>:<br>mhills.de/file.png<br>With <strong>The Raw URL</strong>: mhills.de/your_uuid/your_username/file.png",
  allowHTML: true,
});
tippy('#exploading-upload', {
  content: "Wether or not you want to use Exploading Uploads.<br><br>Without <strong>Exploading Uploads</strong>: Your Uploads won't delete when it has been seen once.<br>With <strong>Exploading Uploads</strong>: Your Uploads will delete when it has been seen once.",
  allowHTML: true,
});
tippy('#custom-background', {
  content: "Wether or not you want to use a Custom Background.<br><br>Without <strong>a Custom Background</strong>: There won't be a background on your Uploads.<br>With <strong>a Custom Background</strong>: There will be a background on your Uploads.",
  allowHTML: true,
});
                            </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var fileobj;
function upload_file(e) {
    e.preventDefault();
    fileobj = e.dataTransfer.files[0];
    ajax_file_upload(fileobj);
}
 
function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
        ajax_file_upload(fileobj);
    };
}
function ajax_file_upload(file_obj) {
    if(file_obj != undefined) {
        var form_data = new FormData();                  
        form_data.append('file', file_obj);
        form_data.append('upload-background', "true");
        $.ajax({
            type: 'POST',
            url: 'https://mhills.de/dashboard/upload.php',
            contentType: false,
            processData: false,
            data: form_data,
            success:function(response) {
                window.open('https://mhills.de/dashboard/upload-preferences?upload-background=' + response, '_self')
            }
        });
    }
}
</script>
<style>
.flex {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-content: center;
    flex-wrap: wrap;
}
#drop_file_zone {
    background-color: #1b1b1b;
    border: #292929 5px dashed;
    width: auto;
    height: 200px;
    padding: 8px;
    font-size: 18px;
    text-align: center;
}
#drag_upload_file {
    margin: 0 auto;
    display: grid;
    place-items: center;
}
#drag_upload_file p {
  text-align: center;
}
#drag_upload_file #selectfile {
  display: none;
}
.flex-child-small {
    -webkit-box-flex: 1 1 auto;
    -moz-box-flex: 1 1 auto;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    margin: 10px;
    font-size: 20px;
    border-radius: 15px;
    width: 100px;
    height: auto;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    text-align: center;
}

    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #333333;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
    .btn.btn-dark {
    color: #fff;
    margin: 5px;
    background-color: #131313;
    border-radius: 7px;
    border-color: #272727;
    color: #fff;
    width: -webkit-fill-available;
}
.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-clip: padding-box;
    background-color: #131313;
    border: 1px solid #000;
    border-radius: 7px;
    color: white;
    display: block;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    padding: .375rem .75rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    width: 100%;
    max-width: 500px;
}
    .btn.btn-dark {
    color: #fff;
    margin: 5px;
}
.table-dark {
    --bs-table-bg: #1b1b1b;
    --bs-table-striped-bg: #131313;
    --bs-table-striped-color: #fff;
    --bs-table-active-bg: #373b3e;
    --bs-table-active-color: #fff;
    --bs-table-hover-bg: #323539;
    --bs-table-hover-color: #fff;
    border-color: #373b3e;
    color: #fff;
}
        .sidebar-wrapper {
    background-color: #1b1b1b;
    bottom: 0;
    height: 100vh;
    overflow-y: auto;
    position: fixed;
    top: 0;
    transition: left .5s ease-out;
    width: 300px;
    z-index: 10;
}
.text-muted {
    color: #ccc;
}
body {
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    background-color: #131313;
    color: #607080;
    font-family: Nunito;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0;
}
.sidebar-wrapper .menu .sidebar-link {
    align-items: center;
    border-radius: .5rem;
    color: #ccc;
    display: block;
    display: flex;
    font-size: 1rem;
    background: #1b1b1b;
    padding: .7rem 1rem;
    text-decoration: none;
    transition: all .5s;
}
.sidebar-wrapper::after .menu::after .sidebar-link::after {
    align-items: center;
    border-radius: .5rem;
    color: #ccc;
    display: block;
    display: flex;
    font-size: 1rem;
    background: #1b1b1b;
    padding: .7rem 1rem;
    text-decoration: none;
    transition: all .5s;
}
.sidebar-wrapper .menu .sidebar-link:hover{background-color:#151515}
.sidebar-wrapper .menu .submenu .submenu-item a {
    color: #ccc;
    background: #171717;
    display: block;
    font-size: .85rem;
    border-radius: 10px;
    margin: 4px;
    font-weight: 600;
    letter-spacing: .5px;
    padding: .7rem 2rem;
    text-decoration: none;
    transition: all .3s;
}
.card {
    word-wrap: break-word;
    background-clip: border-box;
    background-color: #1b1b1b;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .7rem;
    display: flex;
    flex-direction: column;
    min-width: 0;
    position: relative;
}
.sidebar-wrapper .menu .sidebar-title {
    color: #ffffff;
    font-size: 1rem;
    font-weight: 600;
    list-style: none;
    margin: 1.5rem 0 1rem;
    padding: 0 1rem;
}
.card-header {
    background-color: #101010;
    border-bottom: 1px solid rgba(0,0,0,.125);
    margin-bottom: 0;
    padding: 1.5rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #ffffff;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: .5rem;
    margin-top: 0;
}
.text-muted {
    color: #ccc;
}
.sidebar-wrapper .menu .sidebar-link i, .sidebar-wrapper .menu .sidebar-link svg {
    color: #5a5a5a;
}
.sidebar-wrapper .menu .sidebar-item.active .sidebar-link {
    background-color: #131313;
}
a {
    color: #ffffff;
    text-decoration: underline;
}
</style>
<script>
              function download(filename, text) {
            var element = document.createElement('a');
            element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
            element.setAttribute('download', filename);

            element.style.display = 'none';
            document.body.appendChild(element);

            element.click();

            document.body.removeChild(element);
          }

          // Start file download.
          function generateConfig(){
            var text = `{
  "Version": "13.2.1",
  "Name": "Marc Hills Host - <?php echo $_SESSION['username']; ?>",
  "DestinationType": "ImageUploader, FileUploader",
  "RequestMethod": "POST",
  "RequestURL": "https://mhills.de/upload",
  "Parameters": {
    "secret": "<?php echo $row["secret"] ?>",
    "use_sharex": "true"
  },
  "Body": "MultipartFormData",
  "FileFormName": "file"
}`;

            var filename = "mhills.de.sxcu";
            setTimeout(() => {
              download(filename, text);
            }, 1000)
          }
          </script>
          <script>
          function setTitleEmbed() {
            var embedtitle = document.getElementById("embedtitle").value;
            document.getElementById("titleembed").innerHTML = `<a data-v-408d6252="" href="https://mhills.de" target="_blank" class="title-content">${embedtitle.toString()}</a>`;
          }

          function setDescriptionEmbed() {
            var embeddescription = document.getElementById("embeddescription").value;
            document.getElementById("descriptionembed").innerHTML = `${embeddescription}`;
          }

          function setAuthorEmbed() {
            var embeddescription = document.getElementById("embedauthor").value;
            document.getElementById("authorembed").innerHTML = `${embeddescription.toString()}`;
          }

          $('.colorpicker').on('change', function() {
            newbgcolor = this.value;
            //document.getElementById("hexcode").innerHTML = newbgcolor;
            //document.getElementById("hexcode").style.display = "none";
            //var var_js1 = ``;
            //var var_js = "0";
            console.log(newbgcolor);
            $('.embed[data-v-408d6252]').css('border-left', '4px solid ' + newbgcolor);
          });
        </script>
        <style>
            .embed[data-v-408d6252] {
              place-self: start;
              text-align: left;
              max-width: 520px;
              display: grid;
              background: #19191C none repeat scroll 0 0;
              border-radius: 4px;
              border-left: 4px solid <?php echo $embed['embedcolor']; ?>;
              line-height: 1;
              color: #dcddde;
              font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
              font-size: 13px;
              text-rendering: optimizelegibility;
              min-height: 2.75rem;
            }

            .embed-body[data-v-408d6252] {
              padding: .5rem 1rem 1rem .75rem;
              display: inline-grid;
              grid-template-columns: auto;
              grid-template-rows: auto;
            }

            .embed .embed-body .author[data-v-408d6252] {
              min-width: 0;
              display: flex;
              align-items: center;
              grid-column: 1/2;
              margin: 8px 0 0;
            }

            .embed .embed-body .title[data-v-408d6252] {
              min-width: 0;
              display: inline-block;
              margin: 8px 0 0;
              grid-column: 1/2;
            }

            .embed .embed-body .description[data-v-408d6252] {
              min-width: 0;
              margin: 8px 0 0;
              grid-column: 1/2;
            }

            .embed .embed-body .fields[data-v-408d6252] {
              min-width: 0;
              margin: 8px 0 0;
              display: grid;
              grid-column: 1/2;
              gap: 8px;
            }

            .embed .embed-body .title .title-content[data-v-408d6252] {
              font-size: 1rem;
              font-weight: 600;
              white-space: pre-wrap;
              overflow-wrap: break-word;
              line-height: 1.375;
            }

            .embed .embed-body .title a[data-v-408d6252] {
              color: #00b0f4;
            }

            .embed .embed-body .image[data-v-408d6252] {
    min-width: 0;
    margin: 16px 0 0;
    border-radius: 4px;
    cursor: pointer;
    grid-column: 1/3;
    width: 15vw;
    height: auto;
}

            input[type="checkbox"] {
              position: absolute;
              left: -15px;
            }

            input[type="checkbox"]+label {
              position: relative;
              display: inline-flex;
              cursor: pointer;
              font-family: sans-serif;
              font-size: 24px;
              line-height: 1.3;
            }

            input[type="checkbox"]+label:before {
              width: 60px;
              height: 30px;
              border-radius: 30px;
              background-color: #1b1b1b;
              content: "";
              margin-right: 15px;
              transition: background-color 0.5s linear;
            }

            input[type="checkbox"]+label:after {
              width: 30px;
              height: 30px;
              border-radius: 30px;
              background-color: #fff;
              content: "";
              transition: margin 0.1s linear;
              position: absolute;
              left: 2px;
              top: 2px;
            }

            input[type="checkbox"]:checked+label:before {
              background-color: #2b8718;
            }

            input[type="checkbox"]:checked+label:after {
              margin: 0 0 0 30px;
            }

          </style>

          <script>
            function abfrage(form) {
              if (form.confirm.checked) {

              } else {

              }
            }
          </script>
</html>