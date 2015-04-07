var Form = (function(){
  var form = {};

  form.createButton = function(buttonType) {
    switch(buttonType) {
      case 'dimension':
        var button = "<div class='inputGroup'><input class='dime' type='number' name='width[]'>&nbsp; X  &nbsp; <input class='dime' type='number' name='height[]'><select name='Measurements'><option value='px'>Pixels(px)</option><option value='mm'>Millimeters(mm)</option></select></label>";
        var $button = $(button);
        var remove = Form.createButton('remove');
        remove.appendTo($button);
        return $button;
      break;
      case 'colour':
        var button = "<div class='inputGroup'><input class='colour' type='color' name='favcolor' value='#ff0000'></div>";
        var $button = $(button);
        var remove = Form.createButton('remove');
        remove.appendTo($button);
        return $button;
      break;
      case 'platform':
        var button = "<div class='inputGroup'><select name='Platform'><option value='300dpi'>Print</option><option value='100dpi'>Digital</option></select><input type='text'></div>";
        var $button = $(button);
        var remove = Form.createButton('remove');
        remove.appendTo($button);
        return $button;
      break;
      case 'file':
        var button = "<div class='inputGroup'><input type='file' name='pic' accept=image/*'></div>";
        var $button = $(button);
        var remove = Form.createButton('remove');
        remove.appendTo($button);
        return $button;
      break;
      case 'style':
        var button = "<div class='inputGroup'><input type='text' class='text' name='URL' placeholder='Enter URL...''></div>";
        var $button = $(button);
        var remove = Form.createButton('remove');
        remove.appendTo($button);
        return $button;
      break;
      case 'remove':
        var button = "<input class='remove' type='button' value='X'></div>";
        var $button = $(button);
        $button.on('click', function(){
          Form.remove($(this));
        })
        return $button;
      break;
    }
  }

  //Both the button and destination paramaters must be wrapped in jquery.
  form.append = function(button, dest) {
    button.appendTo(dest);
  }

  //It actually removes the parent container that the button is in, along with any siblings that button has.
  form.remove = function(button) {
    button.parent().remove();
  }


  return form;
})();
