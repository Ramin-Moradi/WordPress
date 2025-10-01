/**
 * سفارشی‌سازی برچسب‌های وضعیت سفارشات ووکامرس.
 *
 * این اسنیپت برچسب‌های وضعیت سفارشات پیش‌فرض را به پیام‌هایی
 * واضح‌تر برای کاربران تغییر می‌دهد. بدون نیاز به نصب افزونه!
 *
 * @version 1.0.0
 * @author [ رامین مرادی | Ramin Moradi ]
 * @link [ Ramin-Moradi.IR ]
 * @GNU General Public License v3.0
 *
 */

function change_order_status_labels($order_statuses) {
    // سفارشی‌سازی برچسب‌ها
    $order_statuses['wc-pending']    = 'منتظریم تا پرداخت نهایی کنید';
    $order_statuses['wc-processing'] = 'در حال پردازش محصول';
    $order_statuses['wc-on-hold']    = 'منتظر تایید باشید';
    $order_statuses['wc-completed']  = 'سفارش تکمیل شد';
    $order_statuses['wc-cancelled']  = 'سفارش لغو شده';
    $order_statuses['wc-refunded']   = 'برگشت داده شده';
    $order_statuses['wc-failed']     = 'ناموفق';
    
    return $order_statuses;
}
add_filter('wc_order_statuses', 'change_order_status_labels');
