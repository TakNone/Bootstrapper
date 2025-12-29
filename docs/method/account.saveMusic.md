# account.saveMusic

**Description** : *Adds or removes a song from the current user&#039;s profile see here &raquo; for more info on the music tab of the profile page*

**Layer** : 218

```tl
account.saveMusic#b26732a9 flags:# unsave:flags.0?true id:InputDocument after_id:flags.1?InputDocument = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **unsave** | [`flags.0?true`](type/true) | If set, removes the song |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | The song to add or remove; can be an already added song when reordering songs with after_id. Adding an already added song will never re-add it, only move it to the top of the song list (or after the song passed in after_id) |
| **after_id** | [`flags.1?InputDocument`](type/InputDocument) | If set, the song will be added after the passed song (must be already pinned on the profile) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |

---

## Example

```php
$bool = $client->account->saveMusic(
	unsave : true,
	id : $client->inputDocumentEmpty(),
	after_id : $client->inputDocumentEmpty(),
);
```