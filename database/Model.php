<?php namespace RtlWeb\Persian\Database;

use October\Rain\Database\Model as baseModel;
use RtlWeb\Persian\Classes\Carbon;
class Model extends baseModel{
    public function fromDateTime($value)
    {
        $format = $this->getDateFormat();

        $value = $this->asDateTime($value);

        return $value->format($format,true);
    }
}
