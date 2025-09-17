<?php
class WC_Currency_Switcher {
    private $currencies = ['USD' => 1, 'EUR' => 0.9, 'INR' => 83.2];

    public function __construct() {
        add_filter('woocommerce_product_get_price', [$this, 'convert_price'], 10, 2);
        add_action('wp_footer', [$this, 'currency_dropdown']);
    }

    public function convert_price($price, $product) {
        if(isset($_COOKIE['currency']) && array_key_exists($_COOKIE['currency'], $this->currencies)) {
            return round($price * $this->currencies[$_COOKIE['currency']], 2);
        }
        return $price;
    }

    public function currency_dropdown() {
        echo '<form method="post" id="currency-switcher">';
        foreach ($this->currencies as $currency => $rate) {
            echo "<button name='currency' value='{$currency}'>{$currency}</button>";
        }
        echo '</form>';
    }
}
