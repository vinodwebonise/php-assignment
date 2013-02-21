<div class="jumbotron">
    <h1>Welcome to our website!</h1>

    <p class="lead">The term "Webonise" is an extrapolation of word "Ozonise". Like, Ozonization is the process of
        converting Oxygen into Ozone, Webonise Lab aims to be a chosen destination for converting businesses to web.</p>
    <a class="btn btn-large btn-success" href="#">Sign up today</a>
</div>

<hr>

<?php
echo $this->form->create('bootswatchs', array('class' => 'form-signin')); ?>
<h2 class="form-signin-heading">Please sign in</h2>
<?php
echo $this->form->input('username', array('label' => false, 'type' => 'text', 'class' => 'input-block-level', 'placeholder' => 'Email address', 'style' => ''));
echo $this->form->input('password', array('label' => false, 'type' => 'password', 'class' => 'input-block-level', 'placeholder' => 'Password', 'style' => ''));
echo $this->form->input('Remember me', array('type' => 'checkbox', 'value' => 'Remember me'));
echo $this->form->input('Sign in', array('type' => 'button', 'class' => 'btn btn-large btn-primary', 'label' => false));
echo $this->form->end();
?>


