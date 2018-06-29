<!DOCTYPE html>
<html>
<head>
	<title>Закажите сейчас</title>

</head>
<body>
	<form>
	      <label for="validationDefault01">Имя</label>
	      <input type="text" class="form-control" id="validationDefault01" placeholder="Имя" required>
	      <label for="validationDefault03">Телефон</label>
	      <input type="text" class="form-control" id="validationDefault03" placeholder="+7(xxx)xxx-xx-xx" required>
	      <button class="btn btn-primary mt-4 fl" id="SubmitForm" type="submit" @click="SubmitForm = true">Отправить заявку</button>
	</form>

</body>
</html>