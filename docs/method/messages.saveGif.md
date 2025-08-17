# messages.saveGif

**Description** : *Add GIF to saved gifs list*

**Layer** : 211

```tl
messages.saveGif#327a30cb id:InputDocument unsave:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | GIF to save |
| <mark>unsave</mark> | [`Bool`](type/Bool) | Whether to remove GIF from saved gifs list |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GIF_ID_INVALID** | `400` | The provided GIF ID is invalid |

---

## Example

```php
$bool = $client->messages->saveGif(
	id : $client->inputDocumentEmpty(),
	unsave : $client->boolFalse(),
);
```