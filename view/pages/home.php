<?php
    //Access Control
    if(isset($_SESSION['username'])){
        header('Location: member');
        exit();
    }
?>
<style>
    .ui.header{
        padding-top:1em;
    }
</style>

<div class="ui inverted vertical masthead center aligned segment hero">
    <div class="ui text container">
    <h1 class="ui inverted header">
        Ukraine International Airlines
    </h1>
    <h2>Starting your Flying As you want</h2>
        <a href="/signup" class="ui huge primary button">Starting</a>
    </div>
</div>

