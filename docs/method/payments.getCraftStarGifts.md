# payments.getCraftStarGifts

**Layer** : 222

```tl
payments.getCraftStarGifts#fd05dd00 gift_id:long offset:string limit:int = payments.SavedStarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |
| <mark>offset</mark> | [`string`](type/string) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |

---

## Result

[payments.SavedStarGifts](type/payments.SavedStarGifts)

---

## Example

```php
$paymentsSavedStarGifts = $client->payments->getCraftStarGifts(
	gift_id : -8885244667041078935,
	offset : 'JNBhRE6LUqSsCKfM',
	limit : 11,
);
```