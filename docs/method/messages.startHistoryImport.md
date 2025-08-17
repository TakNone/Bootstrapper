# messages.startHistoryImport

**Description** : *Complete the history import process, importing all messages into the chat.
To be called only after initializing the import with messages.initHistoryImport and uploading all files using messages.uploadImportedMedia*

**Layer** : 211

```tl
messages.startHistoryImport#b43df344 peer:InputPeer import_id:long = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The Telegram chat where the messages should be imported, click here for more info » |
| <mark>import_id</mark> | [`long`](type/long) | Identifier of a history import session, returned by messages.initHistoryImport |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **IMPORT_ID_INVALID** | `400` | The specified import ID is invalid |

---

## Example

```php
$bool = $client->messages->startHistoryImport(
	peer : $client->inputPeerEmpty(),
	import_id : 7527460465811376235,
);
```