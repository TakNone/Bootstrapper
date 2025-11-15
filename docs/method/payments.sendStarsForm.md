# payments.sendStarsForm

**Description** : *Make a payment using Telegram Stars, see here &raquo; for more info*

**Layer** : 218

```tl
payments.sendStarsForm#7998c914 form_id:long invoice:InputInvoice = payments.PaymentResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>form_id</mark> | [`long`](type/long) | Payment form ID |
| <mark>invoice</mark> | [`InputInvoice`](type/InputInvoice) | Invoice |

---

## Result

[payments.PaymentResult](type/payments.PaymentResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **API_GIFT_RESTRICTED_UPDATE_APP** | `406` | Please update the app to access the gift API |
| **BALANCE_TOO_LOW** | `400` | The transaction cannot be completed because the current Telegram Stars balance is too low |
| **BOT_ACCESS_FORBIDDEN** | `403` | The specified method can be used over a business connection for some operations, but the specified query attempted an operation that is not allowed over a business connection |
| **BOT_INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **FORM_EXPIRED** | `400` | The form was generated more than 10 minutes ago and has expired, please re-generate it using payments.getPaymentForm and pass the new form_id |
| **FORM_ID_EMPTY** | `400` | The specified form ID is empty |
| **FORM_SUBMIT_DUPLICATE** | `400` | The same payment form was already submitted.   |
| **FORM_UNSUPPORTED** | `400` | Please update your client |
| **GIFT_STARS_INVALID** | `400` | The specified amount of stars is invalid |
| **MEDIA_ALREADY_PAID** | `400` | You already paid for the specified media |
| **MONTH_INVALID** | `400` | The number of months specified in inputInvoicePremiumGiftStars.months is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PRECHECKOUT_FAILED** | `406` | Precheckout failed, a detailed and localized description for the error will be emitted via an updateServiceNotification as specified here » |
| **PURPOSE_INVALID** | `400` | The specified payment purpose is invalid |
| **STARGIFT_ALREADY_UPGRADED** | `400` | The specified gift was already upgraded to a collectible gift |
| **STARGIFT_NOT_FOUND** | `400` | The specified gift was not found |
| **STARGIFT_OWNER_INVALID** | `400` | You cannot transfer or sell a gift owned by another user |
| **STARGIFT_SLUG_INVALID** | `400` | The specified gift slug is invalid |
| **STARGIFT_USAGE_LIMITED** | `400` | The gift is sold out |
| **STARGIFT_USER_USAGE_LIMITED** | `400` | You've reached the starGift.limited_per_user limit, you can't buy any more gifts of this type |
| **STARS_FORM_AMOUNT_MISMATCH** | `406` | The form amount has changed, please fetch the new form using payments.getPaymentForm and restart the process |
| **TO_ID_INVALID** | `400` | The specified to_id of the passed inputInvoiceStarGiftResale or inputInvoiceStarGiftTransfer is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$paymentsPaymentResult = $client->payments->sendStarsForm(
	form_id : -7524927225409363517,
	invoice : $client->inputInvoiceMessage(
		peer : $client->get_input_peer(peer : '@LiveProtoChat'),
		msg_id : 78,
	),
);
```