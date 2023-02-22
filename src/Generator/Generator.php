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
 * @method string email()
 */
class Generator
{
    private $path = 'Miladabdi\PersianFaker\Provider\\';

    protected static array $providers = ['Address', 'Company', 'Payment', 'Person', 'PhoneNumber', 'Text'];

    public function __get(string $attribute)
    {
      return $this->getParams($attribute);
    }

    public function __call(string $attribute, array $arguments)
    {
      return $this->getParams($attribute);
    }

    public function getParams($attribute)
    {
        foreach (self::$providers as $provider) {
            if (method_exists(new ($this->path . $provider), $attribute)) {
                return (new ($this->path.$provider))->$attribute();
            }
        }

        return null;
    }
}
