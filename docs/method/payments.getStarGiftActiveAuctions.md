# payments.getStarGiftActiveAuctions

**Layer** : 222

```tl
payments.getStarGiftActiveAuctions#a5d0514d hash:long = payments.StarGiftActiveAuctions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[payments.StarGiftActiveAuctions](type/payments.StarGiftActiveAuctions)

---

## Example

```php
$paymentsStarGiftActiveAuctions = $client->payments->getStarGiftActiveAuctions(
	hash : 0,
);
```