# chatlists.joinChatlistInvite

**Description** : *Import a chat folder deep link &raquo;, joining some or all the chats in the folder*

**Layer** : 216

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
| **CHANNELS_TOO_MUCH** | `400` | You have joined too many channels/supergroups |
| **CHATLISTS_TOO_MUCH** | `400` | You have created too many folder links, hitting the chatlist_invites_limit_default/chatlist_invites_limit_premium limits » |
| **FILTER_INCLUDE_EMPTY** | `400` | The include_peers vector of the filter is empty |
| **INVITE_SLUG_EMPTY** | `400` | The specified invite slug is empty |
| **INVITE_SLUG_EXPIRED** | `400` | The specified chat folder link has expired |

---

## Example

```php
$updates = $client->chatlists->joinChatlistInvite(
	slug : '2NTLuhSgbesxZWwI',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : 811254988781784129,
		),
		$client->inputPeerUser(
			user_id : -5682933750494465548,
			access_hash : 524310062633870815,
		),
		$client->inputPeerChannel(
			channel_id : 908379334627553028,
			access_hash : 8707977810340040571,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 59,
			user_id : -2275938943026966933,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 34,
			channel_id : -5116408195747297207,
		),
	),
);
```