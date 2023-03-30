<?php

namespace Miladabdi\PersianFaker\Generator;


use Illuminate\Support\Str;
use Miladabdi\PersianFaker\Provider\Text;

/**
 * @method Text text()
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
 * @method string productCategory()
 * @method string productTitle()
 */
class Generator
{
    protected static array $providers = ['Address', 'Company', 'Payment', 'Person', 'PhoneNumber', 'Text', 'Product'];

    public function __get(string $attribute)
    {
        return $this->getParams($attribute);
    }

    public function __call(string $attribute, array $arguments)
    {
        return $this->getParams($attribute);
    }

    public function getProviderPath(): string
    {
        $composerJsonPath = __DIR__ . '\\..\\..\\composer.json';
        $composerConfig   = json_decode(file_get_contents($composerJsonPath));
        $srcNamespace     = array_keys(((array)$composerConfig->autoload->{'psr-4'}))[0];

        return $srcNamespace . 'Provider\\';
    }

    private function getParams($attribute)
    {
        foreach (self::$providers as $provider) {

            if (method_exists(new ($this->getProviderPath() . $provider), $attribute)) {
                return (new ($this->getProviderPath() . $provider))->$attribute();
            }

            if (Str::lower($provider) == $attribute) {
                return (new ($this->getProviderPath() . $provider));
            }
        }

        return null;
    }
}
