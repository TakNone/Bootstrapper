# chatlists.leaveChatlist

**Description** : *Delete a folder imported using a chat folder deep link &raquo;*

**Layer** : 214

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
		filter_id : 85,
	),
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 8680687138475180112,
		),
		$client->inputPeerUser(
			user_id : 8863750462419082448,
			access_hash : 6719765864675300818,
		),
		$client->inputPeerChannel(
			channel_id : 2203125694793494380,
			access_hash : -6799541810058067180,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 8,
			user_id : -7481885806250453113,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 26,
			channel_id : -6602004475589208229,
		),
	),
);
```