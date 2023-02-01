<head>
    <!--    <script src="https://kit.fontawesome.com/35c4f0c859.js" crossorigin="anonymous"></script>-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&family=Sofia+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        display: flex;
        justify-content: center;
        /*align-items: center;*/
        width: 100%;
        height: 600px;
        font-family: 'Roboto', sans-serif;

    }
    body{
        height: 100vh;
        background-repeat: no-repeat;
        background-image: linear-gradient(to right top, #f48add, #d882cf, #bd7ac0, #a472b0, #8d699e, #7c5e8b, #6c5479, #5c4967, #4b3c52, #3b2f3e, #2a232b, #1a181a);
    }
    h2 {
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5rem;
        font-weight: 300;
        /*color: rgb(55, 65, 81);*/
        color: #fff;
    }


    form {
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 48px;
        margin-top: 2rem;
        width: 370px;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 4px 4px 7px #716e6e;
    }

    label {
        display: flex;
        text-transform: capitalize;
        margin-top: 1.2rem;
        margin-bottom: 1.1rem;
        font-size: 15px;
        /*font-size: 0.9rem;*/
        letter-spacing: 0.5px;
        font-weight:400;
        color: rgb(55, 65, 81);
    }
    input {
        width: 100%;
        line-height: 3rem;
        background-color: rgb(229, 231, 235);
        border: none;
        border-radius: 4px;
    }

    button {
        margin-top: 1.7rem;
        width: 100%;
        height: 3rem;
        text-transform: capitalize;
        font-size: 0.9rem;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: rgb(220, 229, 247);
        background-color: rgb(37, 99, 235);
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }

    div {
        width: 100%;
        margin-top: 1.4rem;
    }

    a {
        margin: 0 10px;
        font-size: 0.8rem;
        font-weight: 300;
        letter-spacing: 0.5px;
        text-decoration: none;
        color: rgb(37, 99, 235);
        text-transform: capitalize;
    }

    span {
        font-size: 0.7rem;
        color: rgb(37, 99, 235);
    }
    .top-nav-links , .top-nav-title , .css_link{
        display: none;
    }
    .signup_btn{
        background-color: rgb(235, 37, 106);
        margin: 5px 0px;
        border: none;
        border-radius: 0.4rem;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: .1rem;
        line-height: 3.2rem;
        padding: 0 4rem;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        white-space: nowrap;
        width: 100%;
        height: 3rem;
        font-family: 'Roboto', sans-serif;
    }
    .message {
        padding: 1rem;
        margin-top: 20px;
        margin-bottom: 10px;
        background: #eff8ff;
        color: #2779bd;

        border-color: #6cb2eb;
        border-width: 1px;
        border-style: solid;
        border-radius: 4px;
        /*margin-bottom: 2rem;*/
    }
    .message.hidden {
        display: none;
    }
    .message.success {
        background: #e3fcec;
        color: #1f9d55;
        border-color: #51d88a;
    }
    .message.warning {
        background: #fffabc;
        color: #8d7b00;
        border-color: #d3b800;
    }
    .message.error {
        background: #fcebea;
        color: #cc1f1a;
        border-color: #ef5753;
    }
    .forget-link{
        display: block;
        margin: 5px 0 !important;
    }
    .pass_link{
        display: flex;
    }


</style>

<body>

<section class="logging">

    <h2 class="title">Log-in / Sign up Page</h2>
    <?= $this->Form->Create() ?>
    <?= $this->Form->Control('email')?>
    <?= $this->Form->Control('password')?>
    <?= $this->Form->button('save')?>
    <a href="registration" class="signup_btn">Signup</a>
    <div class="pass_link">
<!--        --><?php //echo $this->Html->link('Forget Password?',["action" => 'forgetpass'],['class' => 'forget-link']) ?>
    </div>
    <?= $this->Form->end(); ?>


</section>


</body>

