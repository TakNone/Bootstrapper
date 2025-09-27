# payments.checkCanSendGift

**Layer** : 214

```tl
payments.checkCanSendGift#c0c4edc9 gift_id:long = payments.CheckCanSendGiftResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[payments.CheckCanSendGiftResult](type/payments.CheckCanSendGiftResult)

---

## Example

```php
$paymentsCheckCanSendGiftResult = $client->payments->checkCanSendGift(
	gift_id : -1664003565714790764,
);
```