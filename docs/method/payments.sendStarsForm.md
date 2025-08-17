# payments.sendStarsForm

**Description** : *Make a payment using Telegram Stars, see here » for more info*

**Layer** : 211

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
| **BALANCE_TOO_LOW** | `400` | The transaction cannot be completed because the current Telegram Stars balance is too low |
| **BOT_INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **FORM_EXPIRED** | `400` | The form was generated more than 10 minutes ago and has expired, please re-generate it using payments.getPaymentForm and pass the new form_id |
| **FORM_ID_EMPTY** | `400` | The specified form ID is empty |
| **FORM_UNSUPPORTED** | `400` | Please update your client |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STARGIFT_USAGE_LIMITED** | `400` | The gift is sold out |

---

## Example

```php
$paymentsPaymentResult = $client->payments->sendStarsForm(
	form_id : -6318709787509742162,
	invoice : $client->inputInvoiceMessage(
		peer : $client->inputPeerEmpty(),
		msg_id : 54,
	),
);
```