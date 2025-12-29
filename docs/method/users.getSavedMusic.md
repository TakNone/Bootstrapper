# users.getSavedMusic

**Description** : *Get songs pinned to the user&#039;s profile, see here &raquo; for more info*

**Layer** : 218

```tl
users.getSavedMusic#788d7fe3 id:InputUser offset:int limit:int hash:long = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | The ID of the user |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |
| <mark>hash</mark> | [`long`](type/long) | Hash » of the IDs of previously added songs, to avoid returning any result if there was no change |

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
$usersSavedMusic = $client->users->getSavedMusic(
	id : $client->get_input_user(user : '@TakNone'),
	offset : 0,
	limit : 87,
	hash : 0,
);
```