# messages.initHistoryImport

**Description** : *Import chat history from a foreign chat app into a specific Telegram chat, click here for more info about imported chats &raquo;*

**Layer** : 211

```tl
messages.initHistoryImport#34090c3b peer:InputPeer file:InputFile media_count:int = messages.HistoryImport;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The Telegram chat where the history should be imported |
| <mark>file</mark> | [`InputFile`](type/InputFile) | File with messages to import |
| <mark>media_count</mark> | [`int`](type/int) | Number of media files associated with the chat that will be uploaded using messages.uploadImportedMedia |

---

## Result

[messages.HistoryImport](type/messages.HistoryImport)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **IMPORT_FILE_INVALID** | `400` | The specified chat export file is invalid |
| **IMPORT_FORMAT_DATE_INVALID** | `400` | The date specified in the import file is invalid |
| **IMPORT_FORMAT_UNRECOGNIZED** | `400` | The specified chat export file was exported from an unsupported chat app |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREVIOUS_CHAT_IMPORT_ACTIVE_WAIT_%dMIN** | `406` | Import for this chat is already in progress, wait %d minutes before starting a new one |

---

## Example

```php
$messagesHistoryImport = $client->messages->initHistoryImport(
	peer : $client->inputPeerEmpty(),
	file : $client->inputFile(
		id : -2678559639657483241,
		parts : 46,
		name : 'UHEXhYVRZOAscCjl',
		md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
	),
	media_count : 1,
);
```