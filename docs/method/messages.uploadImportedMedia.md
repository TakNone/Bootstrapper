# messages.uploadImportedMedia

**Description** : *Upload a media file associated with an imported chat, click here for more info &raquo;*

**Layer** : 216

```tl
messages.uploadImportedMedia#2a862092 peer:InputPeer import_id:long file_name:string media:InputMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The Telegram chat where the media will be imported |
| <mark>import_id</mark> | [`long`](type/long) | Identifier of a history import session, returned by messages.initHistoryImport |
| <mark>file_name</mark> | [`string`](type/string) | File name |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | Media metadata |

---

## Result

[MessageMedia](type/MessageMedia)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **IMPORT_ID_INVALID** | `400` | The specified import ID is invalid |
| **MEDIA_INVALID** | `400` | Media invalid |

---

## Example

```php
$messageMedia = $client->messages->uploadImportedMedia(
	peer : $client->inputPeerEmpty(),
	import_id : 6572351009846955351,
	file_name : 'uVfUGCHDP1a0O6WS',
	media : $client->inputMediaEmpty(),
);
```