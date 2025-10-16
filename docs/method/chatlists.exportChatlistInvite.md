# chatlists.exportChatlistInvite

**Description** : *Export a folder &raquo;, creating a chat folder deep link &raquo;*

**Layer** : 216

```tl
chatlists.exportChatlistInvite#8472478e chatlist:InputChatlist title:string peers:Vector<InputPeer> = chatlists.ExportedChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | The folder to export |
| <mark>title</mark> | [`string`](type/string) | An optional name for the link |
| <mark>peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | The list of channels, group and supergroups to share with the link. Basic groups will automatically be converted to supergroups when invoking the method |

---

## Result

[chatlists.ExportedChatlistInvite](type/chatlists.ExportedChatlistInvite)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHATLISTS_TOO_MUCH** | `400` | You have created too many folder links, hitting the chatlist_invites_limit_default/chatlist_invites_limit_premium limits » |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |
| **INVITES_TOO_MUCH** | `400` | The maximum number of per-folder invites specified by the chatlist_invites_limit_default/chatlist_invites_limit_premium client configuration parameters » was reached |
| **PEERS_LIST_EMPTY** | `400` | The specified list of peers is empty |

---

## Example

```php
$chatlistsExportedChatlistInvite = $client->chatlists->exportChatlistInvite(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 45,
	),
	title : '1SY4X8JKWZ5plVFv',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -2395922000893538722,
		),
		$client->inputPeerUser(
			user_id : -6354649475792976399,
			access_hash : -9067405289079676595,
		),
		$client->inputPeerChannel(
			channel_id : -6323397542933714454,
			access_hash : -7095879004123084837,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 90,
			user_id : -5902638389539019812,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 95,
			channel_id : -1363783954692972175,
		),
	),
);
```