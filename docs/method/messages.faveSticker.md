# messages.faveSticker

**Description** : *Mark or unmark a sticker as favorite*

**Layer** : 211

```tl
messages.faveSticker#b9ffc55b id:InputDocument unfave:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | Sticker in question |
| <mark>unfave</mark> | [`Bool`](type/Bool) | Whether to add or remove a sticker from favorites |

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
$bool = $client->messages->faveSticker(
	id : $client->inputDocumentEmpty(),
	unfave : $client->boolFalse(),
);
```