# payments.saveStarGift

**Description** : *Display or remove a received or hosted gift &raquo; from our profile*

**Layer** : 233

```tl
payments.saveStarGift#2a2a697c flags:# unsave:flags.0?true stargift:InputSavedStarGift = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **unsave** | [`flags.0?true`](type/true) | If set, hides the gift from our profile |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | The gift to display or remove. A hosted collectible gift » may be used by its host or owner |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **SAVED_ID_EMPTY** | `400` | The passed inputSavedStarGiftChat.saved_id is empty |
| **STARGIFT_OBJECT_INVALID** | `400` | The specified star gift object is invalid |
| **STARGIFT_OWNER_INVALID** | `400` | You cannot transfer or sell a gift owned by another user |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->payments->saveStarGift(
	unsave : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 88,
	),
);
```