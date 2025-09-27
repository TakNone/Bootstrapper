# chatlists.joinChatlistInvite

**Description** : *Import a chat folder deep link &raquo;, joining some or all the chats in the folder*

**Layer** : 214

```tl
chatlists.joinChatlistInvite#a6b1e39a slug:string peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | slug obtained from a chat folder deep link » |
| <mark>peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | List of new chats to join, fetched using chatlists.checkChatlistInvite and filtered as specified in the documentation » |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_INCLUDE_EMPTY** | `400` | The include_peers vector of the filter is empty |
| **INVITE_SLUG_EMPTY** | `400` | The specified invite slug is empty |
| **INVITE_SLUG_EXPIRED** | `400` | The specified chat folder link has expired |

---

## Example

```php
$updates = $client->chatlists->joinChatlistInvite(
	slug : 'xFUfw6qH1hE3XjkW',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 4552157669241799816,
		),
		$client->inputPeerUser(
			user_id : 5692321541791420528,
			access_hash : -4284861860907436080,
		),
		$client->inputPeerChannel(
			channel_id : -6093968090696019739,
			access_hash : -5221214533108562105,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 51,
			user_id : -2871469574314852795,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 48,
			channel_id : 3140443765641266025,
		),
	),
);
```