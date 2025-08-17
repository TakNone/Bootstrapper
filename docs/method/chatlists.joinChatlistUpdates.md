# chatlists.joinChatlistUpdates

**Description** : *Join channels and supergroups recently added to a chat folder deep link »*

**Layer** : 211

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
		filter_id : 92,
	),
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -3969860068498871208,
		),
		$client->inputPeerUser(
			user_id : -3392158339923317834,
			access_hash : 6241160890472350318,
		),
		$client->inputPeerChannel(
			channel_id : -8787060808363489445,
			access_hash : 4967481351272227255,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 61,
			user_id : -5065346127788405539,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 7,
			channel_id : 1217087905827196624,
		),
	),
);
```