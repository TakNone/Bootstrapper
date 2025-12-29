# payments.sendPaymentForm

**Description** : *Send compiled payment form*

**Layer** : 218

```tl
payments.sendPaymentForm#2d03522f flags:# form_id:long invoice:InputInvoice requested_info_id:flags.0?string shipping_option_id:flags.1?string credentials:InputPaymentCredentials tip_amount:flags.2?long = payments.PaymentResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
| **FORM_UNSUPPORTED** | `400` | Please update your client |
| **INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PAYMENT_CREDENTIALS_INVALID** | `400` | The specified payment credentials are invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TMP_PASSWORD_INVALID** | `400` | The passed tmp_password is invalid |

---

## Example

```php
$paymentsPaymentResult = $client->payments->sendPaymentForm(
	form_id : -1300472207353476993,
	invoice : $client->inputInvoiceMessage(
		peer : $client->get_input_peer(peer : '@LiveProtoChat'),
		msg_id : 44,
	),
	requested_info_id : '0Sd7g9nhXeYLBKts',
	shipping_option_id : '3q6w8nS1Qt5AbDjv',
	credentials : $client->inputPaymentCredentialsSaved(
		id : 'Ngoq5E21OfkjHLST',
		tmp_password : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	tip_amount : -5603240831142445560,
);
```