<?php

namespace Miladabdi\PersianFaker\Generator;


/**
 * @method string word()
 * @method string state()
 * @method string country()
 * @method string address()
 * @method string job()
 * @method string bank()
 * @method string sheba()
 * @method string cardNumber()
 * @method string name()
 * @method string lastName()
 * @method string certificate()
 * @method string email($operator = null)
 * @method string phone($operator = null)
 * @method string sentence()
 * @method string paragraph()
 * @method string productCategory()
 * @method string productTitle()
 */
class Generator
{
    private $path = 'Miladabdi\PersianFaker\Provider\\';

    protected static array $providers = ['Address', 'Company', 'Payment', 'Person', 'PhoneNumber', 'Text', 'Product'];

    public function __get(string $attribute)
    {
      return $this->getParams($attribute);
    }

    public function __call(string $attribute, array $arguments)
    {
      return $this->getParams($attribute);
    }

    private function getParams($attribute)
    {
        foreach (self::$providers as $provider) {
            if (method_exists(new ($this->path . $provider), $attribute)) {
                return (new ($this->path.$provider))->$attribute();
            }
        }

        return null;
    }
}
