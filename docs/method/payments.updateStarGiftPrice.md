# payments.updateStarGiftPrice

**Layer** : 211

```tl
payments.updateStarGiftPrice#edbe6ccb stargift:InputSavedStarGift resell_amount:StarsAmount = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |
| <mark>resell_amount</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->payments->updateStarGiftPrice(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 74,
	),
	resell_amount : $client->starsAmount(
		amount : 7519007324035714774,
		nanos : 6,
	),
);
```