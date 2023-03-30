<?php

namespace Miladabdi\PersianFaker\Generator;


use Illuminate\Support\Str;
use Miladabdi\PersianFaker\Provider\Text;
use Symfony\Component\Finder\Finder;

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

    public static function providers(): array
    {
        $providers   = [];
        $finderFiles = Finder::create()->in(__DIR__ . '\\..\\Provider\\')->name('*.php')->files();

        foreach ($finderFiles as $file) {
            $providers[] = $file->getFilename();
        }

        return $providers;
    }

    private function getParams($attribute)
    {
        foreach (self::providers() as $providerClass) {

            $providerName = explode('.php',$providerClass)[0];

            if (method_exists(new ($this->getProviderPath() . $providerName), $attribute)) {
                return (new ($this->getProviderPath() . $providerName))->$attribute();
            }

            if (Str::lower($providerName) == $attribute) {
                return (new ($this->getProviderPath() . $providerName));
            }
        }

        return null;
    }
}
