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
		filter_id : 52,
	),
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 8867862421550031449,
		),
		$client->inputPeerUser(
			user_id : -5233977876247743544,
			access_hash : -1027980551808161808,
		),
		$client->inputPeerChannel(
			channel_id : -679416307568643871,
			access_hash : -2345382904654369337,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 66,
			user_id : -684308076481712365,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 84,
			channel_id : 7274151545329548790,
		),
	),
);
```