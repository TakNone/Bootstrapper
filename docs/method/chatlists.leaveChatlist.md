# chatlists.leaveChatlist

**Description** : *Delete a folder imported using a chat folder deep link &raquo;*

**Layer** : 216

```tl
chatlists.leaveChatlist#74fae13a chatlist:InputChatlist peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | Folder ID |
| <mark>peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Also leave the specified channels and groups |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |

---

## Example

```php
$updates = $client->chatlists->leaveChatlist(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 95,
	),
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 9172692759036477320,
		),
		$client->inputPeerUser(
			user_id : 7646539748325716135,
			access_hash : -8071662620929273891,
		),
		$client->inputPeerChannel(
			channel_id : -4026413003188621579,
			access_hash : -6350905247569313484,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 77,
			user_id : -806775566233353155,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 87,
			channel_id : -8658738741556361418,
		),
	),
);
```