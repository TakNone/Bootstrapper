# messages.getSavedMusicByID

**Layer** : 214

```tl
messages.getSavedMusicByID#7573a4e9 id:InputUser documents:Vector<InputDocument> = SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>documents</mark> | [`Vector<InputDocument>`](type/InputDocument) | NOTHING |

---

## Result

[SavedMusic](type/SavedMusic)

---

## Example

```php
$savedMusic = $client->messages->getSavedMusicByID(
	id : $client->inputUserEmpty(),
	documents : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -7160670762973030054,
			access_hash : -5407346755580418042,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```