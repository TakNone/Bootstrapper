# payments.sendPaymentForm

**Description** : *Send compiled payment form*

**Layer** : 211

```tl
payments.sendPaymentForm#2d03522f flags:# form_id:long invoice:InputInvoice requested_info_id:flags.0?string shipping_option_id:flags.1?string credentials:InputPaymentCredentials tip_amount:flags.2?long = payments.PaymentResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>form_id</mark> | [`long`](type/long) | Form ID |
| <mark>invoice</mark> | [`InputInvoice`](type/InputInvoice) | Invoice |
| **requested_info_id** | [`flags.0?string`](type/string) | ID of saved and validated order info |
| **shipping_option_id** | [`flags.1?string`](type/string) | Chosen shipping option ID |
| <mark>credentials</mark> | [`InputPaymentCredentials`](type/InputPaymentCredentials) | Payment credentials |
| **tip_amount** | [`flags.2?long`](type/long) | Tip, in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |

---

## Result

[payments.PaymentResult](type/payments.PaymentResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TMP_PASSWORD_INVALID** | `400` | The passed tmp_password is invalid |

---

## Example

```php
$paymentsPaymentResult = $client->payments->sendPaymentForm(
	form_id : -8815521026591982134,
	invoice : $client->inputInvoiceMessage(
		peer : $client->inputPeerEmpty(),
		msg_id : 75,
	),
	requested_info_id : 'ZOvsU7EdVfyXK3oc',
	shipping_option_id : 'slvDnaBm027gYz9p',
	credentials : $client->inputPaymentCredentialsSaved(
		id : 'LCDXpPyls2kFgTa3',
		tmp_password : '???8?LiveProtoH-;?',
	),
	tip_amount : -8044310788057061861,
);
```