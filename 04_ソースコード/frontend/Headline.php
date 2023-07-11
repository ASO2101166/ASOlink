<link rel="stylesheet" href="../static/css/Headine.css">
<header id="headline" class="sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">◀</a>
      <div class="input-group w-50">
        <button id="search_button" onclick="search_board()" hidden="true">
          <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-search"></i>
          </span>
        </button>
        <input type="text" id="search_form" class="form-control" placeholder="掲示板検索" aria-label="Input group example" aria-describedby="basic-addon1">
      </div>
      <?php
        if(!isset($_SESSION)){
            session_start();
        }
        require_once '../backend/SessionCheck.php';
        
        $ClsSessionCheck = new SessionCheck();
        if($ClsSessionCheck->usersessioncheck() == true){
      ?>
        <a href="../backend/Logout.php">
          <button class="btn btn-outline-success">ログアウト</button>
        </a>
      <?php
        }else{
      ?>
        <a href="Login.php">
          <button class="btn btn-outline-success">ログイン</button>
        </a>
      <?php
        }
      ?>
      
    </div>
  </nav>
</header>
<!-- 掲示板検索画面表示 -->
<div id="boardsearch_background" hidden="true"></div>
<div id="add_boardsearch_area" hidden="true">
  <?php include("BoardSearch.php")?>
</div>
<script src="../static/js/Headline.js"></script>