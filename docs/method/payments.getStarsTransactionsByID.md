# payments.getStarsTransactionsByID

**Description** : *Obtain info about Telegram Star transactions &raquo; using specific transaction IDs*

**Layer** : 211

```tl
payments.getStarsTransactionsByID#2dca16b8 flags:# ton:flags.0?true peer:InputPeer id:Vector<InputStarsTransaction> = payments.StarsStatus;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **ton** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel or bot |
| <mark>id</mark> | [`Vector<InputStarsTransaction>`](type/InputStarsTransaction) | Transaction IDs |

---

## Result

[payments.StarsStatus](type/payments.StarsStatus)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TRANSACTION_ID_INVALID** | `400` | The specified transaction ID is invalid |

---

## Example

```php
$paymentsStarsStatus = $client->payments->getStarsTransactionsByID(
	ton : true,
	peer : $client->inputPeerEmpty(),
	id : array(
		$client->inputStarsTransaction(
			refund : true,
			id : 'PIl4m8shROzq2E0i',
		),
	),
);
```