# chatlists.editExportedInvite

**Description** : *Edit a chat folder deep link »*

**Layer** : 211

```tl
chatlists.editExportedInvite#653db63d flags:# chatlist:InputChatlist slug:string title:flags.1?string peers:flags.2?Vector<InputPeer> = ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 38,
	),
	slug : 'lQ9zuXctCns75dB8',
	title : 'LJIerChXHdTZWYBw',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -5257429479589859005,
		),
		$client->inputPeerUser(
			user_id : -8001124236649676710,
			access_hash : 856664884151751446,
		),
		$client->inputPeerChannel(
			channel_id : 8874150965951110742,
			access_hash : -322164026626843669,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 88,
			user_id : -4324781186655779793,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 89,
			channel_id : 4937764078983093615,
		),
	),
);
```