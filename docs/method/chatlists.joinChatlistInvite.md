# chatlists.joinChatlistInvite

**Description** : *Import a chat folder deep link &raquo;, joining some or all the chats in the folder*

**Layer** : 211

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
	slug : 'x3LEzqIPDUOSK9Yj',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -4143281599239324787,
		),
		$client->inputPeerUser(
			user_id : -6175192504326495114,
			access_hash : -7785296571500059792,
		),
		$client->inputPeerChannel(
			channel_id : -633613299185018732,
			access_hash : 7985034476788637736,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 95,
			user_id : 3032692554909029787,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 99,
			channel_id : 6443165242049551759,
		),
	),
);
```