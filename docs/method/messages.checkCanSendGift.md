# messages.checkCanSendGift

**Layer** : 214

```tl
messages.checkCanSendGift#c0c4edc9 gift_id:long = CheckCanSendGiftResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | NOTHING |

---

## Result

[CheckCanSendGiftResult](type/CheckCanSendGiftResult)

---

## Example

```php
$checkCanSendGiftResult = $client->messages->checkCanSendGift(
	gift_id : -5138430443622031045,
);
```