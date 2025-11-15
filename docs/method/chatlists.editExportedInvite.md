# chatlists.editExportedInvite

**Description** : *Edit a chat folder deep link &raquo;*

**Layer** : 218

```tl
chatlists.editExportedInvite#653db63d flags:# revoked:flags.0?true chatlist:InputChatlist slug:string title:flags.1?string peers:flags.2?Vector<InputPeer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.0?true`](type/true) | NOTHING |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | Folder ID |
| <mark>slug</mark> | [`string`](type/string) | slug obtained from the chat folder deep link » |
| **title** | [`flags.1?string`](type/string) | If set, sets a new name for the link |
| **peers** | [`flags.2?Vector<InputPeer>`](type/InputPeer) | If set, changes the list of peers shared with the link |

---

## Result

[ExportedChatlistInvite](type/ExportedChatlistInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |
| **INVITE_SLUG_EMPTY** | `400` | The specified invite slug is empty |
| **INVITE_SLUG_EXPIRED** | `400` | The specified chat folder link has expired |
| **PEERS_LIST_EMPTY** | `400` | The specified list of peers is empty |

---

## Example

```php
$exportedChatlistInvite = $client->chatlists->editExportedInvite(
	revoked : true,
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 86,
	),
	slug : 'QYpUj7T9a58c4d6w',
	title : 'FjwlP4rLYkpMHWvQ',
	peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```