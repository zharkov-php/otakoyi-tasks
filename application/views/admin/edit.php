
<form action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
    <div class="form-group">
        <label for="exampleInputEmail1">Введіть Ваше ім'я</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Введіть Вашу пошту</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Введіть Ваш сайт</label>
        <input type="text" name="site" class="form-control" value="<?php echo htmlspecialchars($data['site'], ENT_QUOTES); ?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Введіть Відгук</label>
        <input type="text" name="task" value="<?php echo htmlspecialchars($data['task'], ENT_QUOTES); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Відгук" required>
    </div>
    <div class="g-recaptcha" data-sitekey="6LcegmwUAAAAAPeciLsPiupXq80PoBkQWofHB_D2"></div>

    <button type="submit" class="btn btn-primary">Виправити</button>
</form>


<br>
<a href="/admin/tasks"> <button type="button" class="btn btn-lg btn-secondary"  >Назад</button></a>
