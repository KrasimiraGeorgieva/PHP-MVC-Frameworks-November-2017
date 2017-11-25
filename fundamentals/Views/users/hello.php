<?php /** @var \DTO\UserViewModel $model */ ?>
<h1>Hello Mr/Ms <?= $model->getFirstName(); ?> <?= $model->getLastName(); ?></h1>

<div class="well bs-components">
    <form action="/Fundamentals/users/edit/4" method="post">
        <div class="form-control">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-control">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-control">
            <label for="password">Confirm: </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="form-control">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-control">
            <label for="birthday">Birthday: </label>
            <input type="text" name="birthday" id="birthday">
        </div>
        <input type="submit" value="Edit"/>
    </form>
</div>