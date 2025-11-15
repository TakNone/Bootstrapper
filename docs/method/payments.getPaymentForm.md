# payments.getPaymentForm

**Description** : *Get a payment form*

**Layer** : 216

```tl
payments.getPaymentForm#37148dbb flags:# invoice:InputInvoice theme_params:flags.0?DataJSON = payments.PaymentForm;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>invoice</mark> | [`InputInvoice`](type/InputInvoice) | Invoice |
| **theme_params** | [`flags.0?DataJSON`](type/DataJSON) | Theme parameters » |

---

## Result

[payments.PaymentForm](type/payments.PaymentForm)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **API_GIFT_RESTRICTED_UPDATE_APP** | `406` | Please update the app to access the gift API |
| **BOOST_PEER_INVALID** | `400` | The specified boost_peer is invalid |
| **BOT_ACCESS_FORBIDDEN** | `403` | The specified method can be used over a business connection for some operations, but the specified query attempted an operation that is not allowed over a business connection |
| **BOT_INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **GIFT_MONTHS_INVALID** | `400` | The value passed in invoice.inputInvoicePremiumGiftStars.months is invalid |
| **INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **MONTH_INVALID** | `400` | The number of months specified in inputInvoicePremiumGiftStars.months is invalid |
| **NO_PAYMENT_NEEDED** | `400` | The upgrade/transfer of the specified gift was already paid for or is free |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SLUG_INVALID** | `400` | The specified invoice slug is invalid |
| **STARGIFT_ALREADY_CONVERTED** | `400` | The specified star gift was already converted to Stars |
| **STARGIFT_ALREADY_REFUNDED** | `400` | The specified star gift was already refunded |
| **STARGIFT_ALREADY_UPGRADED** | `400` | The specified gift was already upgraded to a collectible gift |
| **STARGIFT_EXPORT_IN_PROGRESS** | `406` | A gift export is in progress, a detailed and localized description for the error will be emitted via an updateServiceNotification as specified here » |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |
| **STARGIFT_NOT_FOUND** | `400` | The specified gift was not found |
| **STARGIFT_OWNER_INVALID** | `400` | You cannot transfer or sell a gift owned by another user |
| **STARGIFT_PEER_INVALID** | `400` | The specified inputSavedStarGiftChat.peer is invalid |
| **STARGIFT_RESELL_CURRENCY_NOT_ALLOWED** | `400` | You can't buy the gift using the specified currency (i.e. trying to pay in Stars for TON gifts) |
| **STARGIFT_SLUG_INVALID** | `400` | The specified gift slug is invalid |
| **STARGIFT_TRANSFER_TOO_EARLY_%d** | `400` | You cannot transfer this gift yet, wait %d seconds |
| **STARGIFT_UPGRADE_UNAVAILABLE** | `400` | A received gift can only be upgraded to a collectible gift if the messageActionStarGift/savedStarGift.can_upgrade flag is set |
| **STARS_FORM_AMOUNT_MISMATCH** | `406` | The form amount has changed, please fetch the new form using payments.getPaymentForm and restart the process |
| **TO_ID_INVALID** | `400` | The specified to_id of the passed inputInvoiceStarGiftResale or inputInvoiceStarGiftTransfer is invalid |
| **UNTIL_DATE_INVALID** | `400` | Invalid until date provided |

---

## Example

```php
$paymentsPaymentForm = $client->payments->getPaymentForm(
	invoice : $client->inputInvoiceMessage(
		peer : $client->inputPeerEmpty(),
		msg_id : 15,
	),
	theme_params : $client->dataJSON(
		data : 'bMBJgsIURztjcvO6',
	),
);
```