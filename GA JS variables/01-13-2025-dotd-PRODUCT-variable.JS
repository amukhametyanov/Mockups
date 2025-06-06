function() {
    // Return empty if click element is not available
    if (!{{Click Element}}) return '';
    
    // Find the closest parent .dofd-section
    var dofdSection = {{Click Element}}.closest('.dofd-section');
    if (!dofdSection) return '';
    
    // Extract brand and product description
    var brand = dofdSection.querySelector('.brand');
    var desc = dofdSection.querySelector('.desc');
    var brandText = brand ? brand.getAttribute('data-original-text') : '';
    var descText = desc ? desc.getAttribute('data-original-text') : '';
    var fullProduct = brandText + ' ' + descText;
    
    return fullProduct;
  }