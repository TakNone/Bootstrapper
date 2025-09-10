# users.getSavedMusicByID

**Layer** : 214

```tl
users.getSavedMusicByID#7573a4e9 id:InputUser documents:Vector<InputDocument> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>documents</mark> | [`Vector<InputDocument>`](type/InputDocument) | NOTHING |

---

## Result

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->getSavedMusicByID(
	id : $client->inputUserEmpty(),
	documents : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : -5389853032789287023,
			access_hash : -1786092299660203485,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```