jQuery(document).ready(function ($) {
  function Validate() {
    //validate email
    var email = $('input[name="email"]').val(),
      emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
    if (!emailReg.test(email) || email == "") {
      alert("Пожалуйста введите ваш email");
      return false;
    }
    //validate name
    var name = $('input[name="name"]').val();
    if (name.length < 3) {
      alert("Пожалуйста введите корректное имя, состоящее минимум из 3 букв");
      return false;
    }
    //validate password...
  }
});
