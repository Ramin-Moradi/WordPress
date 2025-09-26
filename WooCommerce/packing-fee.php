/**
 * افزودن هزینه بسته‌بندی ثابت به سبد خرید ووکامرس.
 *
 * @version 1.0.0
 * @author رامین مرادی | Ramin Moradi
 * @link https://ramin-moradi.ir
 * @GNU General Public License v3.0
*
 */

add_action('woocommerce_cart_calculate_fees', 'add_custom_fixed_fee');

function add_custom_fixed_fee(WC_Cart $cart) {
    // جلوگیری از اجرای کد در محیط مدیریت (Admin) به جز در AJAX
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    // --- تنظیمات ---
    
    // مبلغ ثابت هزینه بسته‌بندی (به واحد پولی ووکامرس)
    $fixed_fee = 20000;
    
    // عنوان هزینه که در سبد خرید نمایش داده می‌شود
    $fee_label = __('هزینه بسته‌بندی', 'your-textdomain');
    
    // --- افزودن هزینه ---

    // پارامتر سوم (true) تعیین می‌کند که آیا این هزینه مشمول مالیات است یا خیر.
    $cart->add_fee($fee_label, $fixed_fee, true);
}
