# messages.saveRecentSticker

**Description** : *Add/remove sticker from recent stickers list*

**Layer** : 211

```tl
messages.saveRecentSticker#392718f8 flags:# attached:flags.0?true id:InputDocument unsave:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **attached** | [`flags.0?true`](type/true) | Whether to add/remove stickers recently attached to photo or video files |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | Sticker |
| <mark>unsave</mark> | [`Bool`](type/Bool) | Whether to save or unsave the sticker |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **STICKER_ID_INVALID** | `400` | The provided sticker ID is invalid |

---

## Example

```php
$bool = $client->messages->saveRecentSticker(
	attached : true,
	id : $client->inputDocumentEmpty(),
	unsave : $client->boolFalse(),
);
```