(function() {
  console.log('app.js chargé');
  if (Zepto) console.log('Zepto dispo');

  const cbInjured = $('#cbInjured');
  const rows = $('td.injured').parent();
  cbInjured.on('click', () => rows.toggle());

})()
