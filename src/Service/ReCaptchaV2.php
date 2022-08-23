<?php
/**
 * Laravel reCAPTCHA
 * Author: ZanySoft
 * Web: www.zanysoft.net
 */

namespace ZanySoft\ReCaptcha\Service;


class ReCaptchaV2 extends ReCaptcha
{
    /**
     * ReCaptchaV2 constructor.
     *
     * @param string $siteKey
     * @param string $secretKey
     * @param string $lang
     */
    public function __construct(string $siteKey, string $secretKey, string $lang)
    {
        parent::__construct($siteKey, $secretKey, $lang, 'v2');
    }

    /**
     * Write ReCAPTCHA HTML tag in your FORM
     * Insert before </form> tag
     * @return string
     */
    public function htmlFormSnippet(): string
    {
        return ($this->version == 'v2') ? '<div class="g-recaptcha" data-sitekey="' . $this->siteKey . '"></div>' : '';
    }
}
