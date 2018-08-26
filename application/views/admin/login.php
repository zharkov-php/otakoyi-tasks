
<div class="container">
<form action="/admin/login" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Введіть Вашу пошту</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Пошта" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" required>
    </div>

    <button type="submit" class="btn btn-primary">Увійти</button>
</form>
    <br>
    <a href="/"> <button type="submit" class="btn btn-primary">Повернутися назад</button></a>
</div>
