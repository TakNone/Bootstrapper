# payments.validateRequestedInfo

**Description** : *Submit requested order information for validation*

**Layer** : 218

```tl
payments.validateRequestedInfo#b6c8f12b flags:# save:flags.0?true invoice:InputInvoice info:PaymentRequestedInfo = payments.ValidatedRequestedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **save** | [`flags.0?true`](type/true) | Save order information to re-use it for future orders |
| <mark>invoice</mark> | [`InputInvoice`](type/InputInvoice) | Invoice |
| <mark>info</mark> | [`PaymentRequestedInfo`](type/PaymentRequestedInfo) | Requested order information |

---

## Result

[payments.ValidatedRequestedInfo](type/payments.ValidatedRequestedInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsValidatedRequestedInfo = $client->payments->validateRequestedInfo(
	save : true,
	invoice : $client->inputInvoiceMessage(
		peer : $client->get_input_peer(peer : '@LiveProtoChat'),
		msg_id : 5,
	),
	info : $client->paymentRequestedInfo(
		name : 'hXTc5OKfRJaYkA8N',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : '1MfTAFQIKZC5GryN',
			street_line2 : '0uQV5SKmCPNYB2bk',
			city : '7WtSc9rLACshTHpj',
			state : 'lwprAoW94Q3IqZHT',
			country_iso2 : 'wbHBRcI0anlkMuQK',
			post_code : 'HEZw1pv26IStTM5u',
		),
	),
);
```