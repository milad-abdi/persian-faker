<?php

namespace GlassCode\PersianFaker\Generator;

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\Provider\Lively;
use GlassCode\PersianFaker\Provider\Location;
use GlassCode\PersianFaker\Provider\Payment;
use GlassCode\PersianFaker\Provider\Person;
use GlassCode\PersianFaker\Provider\Text;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;

/**
 * @method Text text()
 * @method Location location()
 * @method Payment payment()
 * @method Person person()
 * @method string productCategory()
 * @method string productTitle()
 * @method Lively lively(string $filename, string $livelyAbstract = null)
 */
class Generator
{
    public function __get(string $attribute)
    {
        return $this->getParams($attribute);
    }

    public function __call(string $attribute, array $arguments)
    {
        return $this->getParams($attribute,$arguments);
    }

    public function getProviderPath(): string
    {
        $composerJsonPath = __DIR__.'//..//..//composer.json';
        $composerConfig = json_decode(file_get_contents($composerJsonPath));
        $srcNamespace = array_keys(((array) $composerConfig->autoload->{'psr-4'}))[0];

        return $srcNamespace.'Provider\\';
    }

    public static function providers(): array
    {
        $providers = [];
        $finderFiles = Finder::create()->in(__DIR__.'//..//Provider//')->name('*.php')->files();

        foreach ($finderFiles as $file) {
            $providers[] = $file->getFilename();
        }

        return $providers;
    }

    /**
     * @throws FakerNotExistsException
     */
    private function getParams($attribute, ?array $arguments = null)
    {
        if ($attribute == 'lively'){

            if (count($arguments) == 1){

                return Lively::from($arguments[0]);
            }

            if (count($arguments) == 2){

                return Lively::from($arguments[0], $arguments[1]);
            }
        }

        foreach (self::providers() as $providerClass) {
            $providerName = explode('.php', $providerClass)[0];

            if (method_exists(new ($this->getProviderPath().$providerName), $attribute)) {
                return (new ($this->getProviderPath().$providerName))->$attribute();
            }

            if (Str::lower($providerName) == $attribute) {
                return new ($this->getProviderPath().$providerName);
            }
        }

        return null;
    }
}
