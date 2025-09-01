# payments.upgradeStarGift

**Layer** : 214

```tl
payments.upgradeStarGift#aed6e4f5 flags:# keep_original_details:flags.0?true stargift:InputSavedStarGift = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **keep_original_details** | [`flags.0?true`](type/true) | NOTHING |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->payments->upgradeStarGift(
	keep_original_details : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 45,
	),
);
```