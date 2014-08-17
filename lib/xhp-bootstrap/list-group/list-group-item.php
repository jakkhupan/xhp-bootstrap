<?hh

<<ExamplesInClass(':bootstrap:list-group')>>
final class :bootstrap:list-group-item extends :bootstrap:base {

  attribute
    :a,
    enum {
      'success',
      'info',
      'warning',
      'danger',
      'none'
    } use,
    bool active = false;

  protected function compose(): :xhp {
    $ret = <a>{$this->getChildren()}</a>;
    if ($this->getAttribute('active')) {
      $ret->addClass('active');
    }
    $ret->addClass('list-group-item');
    switch ($this->getAttribute('use')) {
      case 'success':
        $ret->addClass('list-group-item-success');
        break;
      case 'info':
        $ret->addClass('list-group-item-info');
        break;
      case 'warning':
        $ret->addClass('list-group-item-warning');
        break;
      case 'danger':
        $ret->addClass('list-group-item-danger');
        break;
    }
    return $ret;
  }
}