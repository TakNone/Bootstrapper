# payments.validateRequestedInfo

**Description** : *Submit requested order information for validation*

**Layer** : 222

```tl
payments.validateRequestedInfo#b6c8f12b flags:# save:flags.0?true invoice:InputInvoice info:PaymentRequestedInfo = payments.ValidatedRequestedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		msg_id : 70,
	),
	info : $client->paymentRequestedInfo(
		name : '6QkwjhVeDfYELzPB',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'RzK2lw0M6FcJZA1k',
			street_line2 : 'rJ4cApbVDUe170Ff',
			city : 'oGhjue0p2t6gJTQA',
			state : '1vCG4ThxtocafHdP',
			country_iso2 : 'bTuXLDBMlH9AvIjZ',
			post_code : 'jv2VDsM1ZBHPlbk7',
		),
	),
);
```