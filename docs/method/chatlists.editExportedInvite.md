# chatlists.editExportedInvite

**Description** : *Edit a chat folder deep link &raquo;*

**Layer** : 216

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
		filter_id : 84,
	),
	slug : 'L6F7GTXsopOBxWlV',
	title : 'JQp9PmzhjMw6yAld',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 5215267018754258708,
		),
		$client->inputPeerUser(
			user_id : 7633154964275037165,
			access_hash : 1170129026328868276,
		),
		$client->inputPeerChannel(
			channel_id : -1620951428589809259,
			access_hash : 4314689925835202944,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 32,
			user_id : -2292278038542660829,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 52,
			channel_id : -662151594379722186,
		),
	),
);
```