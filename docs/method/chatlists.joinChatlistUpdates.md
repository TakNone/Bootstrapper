# chatlists.joinChatlistUpdates

**Description** : *Join channels and supergroups recently added to a chat folder deep link &raquo;*

**Layer** : 214

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
		filter_id : 80,
	),
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -6592587955181705982,
		),
		$client->inputPeerUser(
			user_id : 4393612901095338113,
			access_hash : 1940295931658794694,
		),
		$client->inputPeerChannel(
			channel_id : -4505150264739117710,
			access_hash : -6663020868264524328,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 4,
			user_id : -6198883446920510847,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 5,
			channel_id : -5198217642693317056,
		),
	),
);
```