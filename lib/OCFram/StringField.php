<?php
namespace OCFram;
 
class StringField extends Field
{
  protected $maxLength;
 
  public function buildWidget()
  {
    $widget = '';
 
    if (!empty($this->errorMessage))
    {
      $widget .= $this->errorMessage.'<br />';
    }
 	//echo $this->label;
    $widget .= '<label>'.$this->label.' : </label><br><input type="text" name="'.$this->name.'"' ;
 
    if (!empty($this->value))
    {
      $widget .= ' value="'.htmlspecialchars($this->value).'"';
    }
 
    if (!empty($this->maxLength))
    {
      $widget .= ' maxlength="'.$this->maxLength.'"';
    }
    
    $widget .= ' />';
    
    //echo $widget;
    
    return $widget;
  }
 
  public function setMaxLength($maxLength)
  {
    $maxLength = (int) $maxLength;
 
    if ($maxLength > 0)
    {
      $this->maxLength = $maxLength;
    }
    else
    {
      throw new \RuntimeException('La longueur maximale doit être un nombre supérieur à 0');
    }
  }
}
