# payments.deleteStarGift

**Layer** : 233

```tl
payments.deleteStarGift#3cdaf8aa stargift:InputSavedStarGift = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->deleteStarGift(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 7,
	),
);
```