<?php

namespace lukeyouell\countryselect\fields;

use Craft;
use craft\base\ElementInterface;

use lukeyouell\countryselect\fields\CountrySelectBaseOptions;

class CountrySelectCheckboxes extends CountrySelectBaseOptions
{
    // Static Methods
    // =========================================================================

    public static function displayName(): string
    {
        return Craft::t('country-select', 'Country Checkboxes');
    }

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();

        $this->multi = true;
    }

    public function getInputHtml($value, ElementInterface $element = null): string
    {
        return Craft::$app->getView()->renderTemplate('_includes/forms/checkboxGroup', [
            'name' => $this->handle,
            'value' => $value,
            'options' => $this->translatedOptions(),
        ]);
    }

    // Protected Methods
    // =========================================================================

    protected function optionsSettingLabel(): string
    {
        return Craft::t('country-select', 'Country Checkbox Options');
    }
}
