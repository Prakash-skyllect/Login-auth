<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<style>
    body{
        /*color: black;*/
        height: 100vh;
        color: white;
        padding: 10px;
        background-image: linear-gradient(to right top, #d1ad6b, #ca946f, #b88074, #9c7175, #7d656e, #685961, #554c52, #434043, #353135, #272327, #1a151a, #0a010b);
        border-radius: 8px;
        /*background-position: center;*/
        background-repeat: no-repeat;
        background-position: center;
    }
    h1{
        color: white;
        margin-top: 5px;
        text-align: center;
    }
    .register_btn{
        border: none;
        display: inline-block;
        position: relative;
        border-radius: 50px;
        /*background: #00c9b7;*/
        background: #d369b6;
        width: 180px;
        height: 50px;
        color: #fff;
        font-size: 0.97em;
        letter-spacing: 0.094em;
        cursor: pointer;
        text-align: center;
        margin: 0 auto;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        text-transform: uppercase;

    }

    label{
        font-weight: 300;
    }
    input{
        /*border: 1px solid black !important;*/
        color: #fff;
    }
    .container{
        /*width: 50%;*/
    }
    a{
        color: white!important;
        font-weight: 300!important;
    }
    span{
        color: hotpink!important;
    }
    .home{
        padding-bottom: 2px;
        border-bottom: 2px solid #d369b6;
    }

</style>
<body>
<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?php echo$this->Url->build('/') ?>"><span>Prakash</span>Kudale</a>
    </div>
    <div class="top-nav-links">
        <a class="home" target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Home</a>
        <a target="_blank" rel="noopener" href="https://api.cakephp.org/">About</a>
        <a target="_blank" rel="noopener" href="https://api.cakephp.org/">Service</a>
    </div>
</nav>
<h1>Registration</h1>

<?= $this->Form->Create() ?>
<?= $this->Form->Control('name') ?>
<?= $this->Form->Control('email') ?>
<?= $this->Form->Control('password') ?>
<?= $this->Form->button('register',['class'=>'register_btn','id'=>'btn_register']) ?>

<?= $this->Form->end() ?>


<script>
    $(document).ready(function (){
        $("#btn_register").click(function (e){
            e.preventDefault();
            var username = $("#name").val();
            var email = $("#email").val();
            var pass = $("#password").val();


            console.log('clicked')
           $.ajax({
               method : "POST",
               url : "<?= $this->Url->build(['controller'=>'Users','action'=>'add']);?>",
               data:{
                   name : username,
                   email : email,
                   password : pass
               }
           })
        })
    })
</script>
</body>
</html>
