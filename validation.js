
window.onload = function()
{
  userForm.addEventListener('submit', validate_form);
}

function validate_form (event)
{
  if(!userForm.email.value.match(/^[a-z0-9_.-]{3,}@[a-z]{3,}\.[a-z]{2,4}$/)) {
    alert('Email invalide');
    event.preventDefault();
  }
  if(!userForm.tel.value.match(/^\(\d{3}\)\d{6}$/)) {
    alert('Téléphone invalide');
    event.preventDefault();
  }
}
