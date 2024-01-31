<?php

namespace App\Library;

class PayTech
{
    /**
     * @var string
     */
    const URL                   = "https://paytech.sn";
    const PAYMENT_REQUEST_PATH  = '/api/payment/request-payment';
    const PAYMENT_REDIRECT_PATH = '/payment/checkout/';//todo
    const MOBILE_CANCEL_URL     = "https://paytech.sn/mobile/cancel";
    const MOBILE_SUCCESS_URL    = "https://paytech.sn/mobile/success";
    /**
     * @var string
     */
    private $apiKey;
    /**
     * @var string
     */
    private $apiSecret;
    /**
     * @var array
     */
    private $query = [];

    private $testMode = false;

    private $isMobile = false;

    private $currency = 'XOF';

    private $refCommand = '';

    private $notificationUrl = [];


    public function __construct($apiKey, $apiSecret)
    {
        $this->setApiKey($apiKey);
        $this->setApiSecret($apiSecret);

        if ( ! empty($_POST['is_mobile']) && $_POST['is_mobile'] === 'yes') {
            $this->isMobile = true;
        }
    }

    /**
     * @param  string  $apiKey
     */
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param  string  $apiSecret
     */
    public function setApiSecret(string $apiSecret): void
    {
        $this->apiSecret = $apiSecret;
    }

    /**
     * @return array
     */
    public function send(): array
    {

        $params = [
                'item_name'    => PayTech::arrayGet($this->query, 'item_name'),
                'item_price'   => PayTech::arrayGet($this->query, 'item_price'),
                'command_name' => PayTech::arrayGet($this->query, 'command_name'),
                'ref_command'  => $this->refCommand,
                'env'          => ($this->testMode) ? 'test' : 'prod',
                'currency'     => $this->currency,
                'ipn_url'      => PayTech::arrayGet($this->notificationUrl, 'ipn_url'),
                'success_url'  => $this->isMobile ? $this::MOBILE_SUCCESS_URL : PayTech::arrayGet($this->notificationUrl, 'success_url'),
                'cancel_url'   => $this->isMobile ? $this::MOBILE_CANCEL_URL : PayTech::arrayGet($this->notificationUrl, 'cancel_url'),
                'custom_field' => json_encode($this->customeField),
        ];

        $rawResponse = PayTech::post($this::URL.$this::PAYMENT_REQUEST_PATH, $params, [
                "API_KEY: {$this->apiKey}",
                "API_SECRET: {$this->apiSecret}",
        ]);


        /**
         * @var array $jsonResponse
         */
        $jsonResponse = json_decode($rawResponse, true);

        if (array_key_exists('token', $jsonResponse)) {
            $query = '';

            return [
                    'success'      => 1,
                    'token'        => $jsonResponse['token'],
                    'redirect_url' => $this::URL.$this::PAYMENT_REDIRECT_PATH.$jsonResponse['token'].$query,
            ];
        } elseif (array_key_exists('error', $jsonResponse)) {
            return [
                    'success' => -1,
                    'errors'  => $jsonResponse['error'],
            ];
        } else {
            return [
                    'success' => -1,
                    'errors'  => [
                            'Internal Error',
                    ],
            ];
        }

    }

    private static function arrayGet($array, $name)
    {
        return empty($array[$name]) ? '' : $array[$name];
    }

    private static function post($url, $data = [], $header = []): bool|string
    {
        $strPostField = http_build_query($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $strPostField);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge($header, [
                'Content-Type: application/x-www-form-urlencoded;charset=utf-8',
                'Content-Length: '.mb_strlen($strPostField),
        ]));

        return curl_exec($ch);
    }

    /**
     * @param  array  $query
     *
     * @return $this
     */
    public function setQuery(array $query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param  array  $customField
     *
     * @return $this
     */
    public function setCustomField(array $customField): static
    {
        $this->customeField = $customField;

        return $this;
    }

    /**
     * @param  bool  $liveMode
     *
     * @return $this
     */
    public function setLiveMode(bool $liveMode): static
    {
        $this->liveMode = $liveMode;
        $this->testMode = ! $liveMode;

        return $this;
    }

    /**
     * @param  bool  $testMode
     *
     * @return $this
     */
    public function setTestMode(bool $testMode): static
    {
        $this->testMode = $testMode;
        $this->liveMode = ! $testMode;

        return $this;
    }

    /**
     * @param  string  $currency
     *
     * @return $this
     */
    public function setCurrency(string $currency): static
    {
        $this->currency = strtolower($currency);

        return $this;
    }

    /**
     * @param  string  $refCommand
     *
     * @return $this
     */
    public function setRefCommand(string $refCommand): static
    {
        $this->refCommand = $refCommand;

        return $this;
    }

    /**
     * @param  array  $notificationUrl
     *
     * @return $this
     */
    public function setNotificationUrl(array $notificationUrl): static
    {
        $this->notificationUrl = $notificationUrl;

        return $this;
    }

    /**
     * @param  bool  $isMobile
     *
     * @return $this
     */
    public function setMobile(bool $isMobile): static
    {
        $this->isMobile = $isMobile;

        return $this;
    }
}