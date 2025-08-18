# chatlists.editExportedInvite

**Description** : *Edit a chat folder deep link &raquo;*

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
		filter_id : 66,
	),
	slug : 'ViR3xmjro6TGlFBh',
	title : 'oTEVUJpZBQgHCYtw',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -1015353540947646582,
		),
		$client->inputPeerUser(
			user_id : -7728119497927199186,
			access_hash : 6291714544021741100,
		),
		$client->inputPeerChannel(
			channel_id : -1694549093289174214,
			access_hash : -8680897201321621594,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 44,
			user_id : -7979556126724856114,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 21,
			channel_id : 7069889855895280686,
		),
	),
);
```