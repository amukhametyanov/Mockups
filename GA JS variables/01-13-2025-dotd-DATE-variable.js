function() {
  // Return empty if click element is not available
  if (!{{Click Element}}) return '';
  
  // Find the closest parent .dofd-section
  var dofdSection = {{Click Element}}.closest('.dofd-section');
  if (!dofdSection) return '';
  
  // Get current date
  var date = new Date();
  
  // Array of month names
  var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  
  // Format the date
  var formattedDate = months[date.getMonth()] + ' ' + 
                      date.getDate() + ', ' + 
                      date.getFullYear();
  
  return formattedDate;
}