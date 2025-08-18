# payments.getPaymentForm

**Description** : *Get a payment form*

**Layer** : 211

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
| **BOOST_PEER_INVALID** | `400` | The specified boost_peer is invalid |
| **BOT_INVOICE_INVALID** | `400` | The specified invoice is invalid |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SLUG_INVALID** | `400` | The specified invoice slug is invalid |
| **STARGIFT_INVALID** | `400` | The passed inputInvoiceStarGift is invalid |
| **UNTIL_DATE_INVALID** | `400` | Invalid until date provided |

---

## Example

```php
$paymentsPaymentForm = $client->payments->getPaymentForm(
	invoice : $client->inputInvoiceMessage(
		peer : $client->inputPeerEmpty(),
		msg_id : 32,
	),
	theme_params : $client->dataJSON(
		data : 'L4Gs2Yv71r9IDu60',
	),
);
```