// INIT Foundation js
$(document).foundation()


// Get and delete based on row id
$(document).ready(function() {
  $('.delete-row').click(function() {
    $.post('delete.php?mode=delete', {
      row_id: $(this).data('row_id')
    }).done(function(data) {
      // Reload your table/data display
    });
  });
});


// Redirect to new page with added parameters
function navigate(link, data) {
  var RowId = data;
  var url = link;
  /*alert(RowId);*/
  /*alert(url);*/
  window.location = url + '.php?RowId=' + RowId;
}
