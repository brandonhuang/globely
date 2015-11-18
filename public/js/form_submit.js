$(function() {
  $('form').on('submit', function(e) {
    e.preventDefault();

    var value = $('#dd span').text();

    $('#prop').val(value);
    
    this.submit();
  });
});
