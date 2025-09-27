# payments.saveStarGift

**Description** : *Display or remove a received gift &raquo; from our profile*

**Layer** : 214

```tl
payments.saveStarGift#2a2a697c flags:# unsave:flags.0?true stargift:InputSavedStarGift = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **unsave** | [`flags.0?true`](type/true) | If set, hides the gift from our profile |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->payments->saveStarGift(
	unsave : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 0,
	),
);
```