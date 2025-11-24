# users.getSavedMusicByID

**Description** : *Check if the passed songs are still pinned to the user&#039;s profile, or refresh the file references of songs pinned on a user&#039;s profile see here &raquo; for more info*

**Layer** : 218

```tl
users.getSavedMusicByID#7573a4e9 id:InputUser documents:Vector<InputDocument> = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | The ID of the user |
| <mark>documents</mark> | [`Vector<InputDocument>`](type/InputDocument) | The songs (here, file_reference can be empty to refresh file references) |

---

## Result

[users.SavedMusic](type/users.SavedMusic)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$usersSavedMusic = $client->users->getSavedMusicByID(
	id : $client->get_input_user(user : '@TakNone'),
	documents : array(
		$client->inputDocumentEmpty(),
		$client->inputDocument(
			id : 1985901177016090192,
			access_hash : 8266027534170550085,
			file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```