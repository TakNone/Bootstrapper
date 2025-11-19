# payments.getPaymentReceipt

**Description** : *Get payment receipt*

**Layer** : 218

```tl
payments.getPaymentReceipt#2478d1cc peer:InputPeer msg_id:int = payments.PaymentReceipt;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where the payment receipt was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID of receipt |

---

## Result

[payments.PaymentReceipt](type/payments.PaymentReceipt)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |

---

## Example

```php
$paymentsPaymentReceipt = $client->payments->getPaymentReceipt(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 26,
);
```