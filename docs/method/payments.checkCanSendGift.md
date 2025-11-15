# payments.checkCanSendGift

**Description** : *Check if the specified gift &raquo; can be sent*

**Layer** : 218

```tl
payments.checkCanSendGift#c0c4edc9 gift_id:long = payments.CheckCanSendGiftResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | Gift ID |

---

## Result

[payments.CheckCanSendGiftResult](type/payments.CheckCanSendGiftResult)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STARGIFT_INVALID** | `400` | The passed gift is invalid |

---

## Example

```php
$paymentsCheckCanSendGiftResult = $client->payments->checkCanSendGift(
	gift_id : -7733409917136463888,
);
```