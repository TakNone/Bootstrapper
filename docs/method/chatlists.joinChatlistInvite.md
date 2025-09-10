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
	slug : 'j3wmJPTY6WzbZFqX',
	peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -5118113570302978025,
		),
		$client->inputPeerUser(
			user_id : -5259657230155924079,
			access_hash : -187029706288435713,
		),
		$client->inputPeerChannel(
			channel_id : 6729972260082092164,
			access_hash : 9079707291009323284,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 8,
			user_id : 5614937994376860936,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 43,
			channel_id : -3234728860042659579,
		),
	),
);
```