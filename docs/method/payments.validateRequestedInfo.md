# payments.validateRequestedInfo

**Description** : *Submit requested order information for validation*

**Layer** : 225

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
		msg_id : 71,
	),
	info : $client->paymentRequestedInfo(
		name : 'txZhnd2VzDQ9ki74',
		phone : '+1234567890',
		email : 'reply@liveproto.dev',
		shipping_address : $client->postAddress(
			street_line1 : 'AcrxCmlBIV4HE0U6',
			street_line2 : 'nX5ihBcRvM3kHEbq',
			city : '7kTfWBdoJ3yepAjV',
			state : 'MF4ylHK2mi7JuwCs',
			country_iso2 : 'KTdpkNq9ZS1ce2jO',
			post_code : 'bXPBLecAY9vkz8Tq',
		),
	),
);
```