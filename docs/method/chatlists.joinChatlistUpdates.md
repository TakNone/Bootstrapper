# chatlists.joinChatlistUpdates

**Description** : *Join channels and supergroups recently added to a chat folder deep link &raquo;*

**Layer** : 216

```tl
chatlists.joinChatlistUpdates#e089f8f5 chatlist:InputChatlist peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | The folder |
| <mark>peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | List of new chats to join, fetched using chatlists.getChatlistUpdates and filtered as specified in the documentation » |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_INCLUDE_EMPTY** | `400` | The include_peers vector of the filter is empty |

---

## Example

```php
$updates = $client->chatlists->joinChatlistUpdates(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 87,
	),
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -5085370999204614050,
		),
		$client->inputPeerUser(
			user_id : 3788125509044245602,
			access_hash : 6250065282177061269,
		),
		$client->inputPeerChannel(
			channel_id : 3103622465983139694,
			access_hash : 5071726712103761773,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 50,
			user_id : -7315151624374687410,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 74,
			channel_id : -7912472648617973441,
		),
	),
);
```