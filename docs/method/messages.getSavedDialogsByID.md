# messages.getSavedDialogsByID

**Layer** : 211

```tl
messages.getSavedDialogsByID#6f6f9c96 flags:# parent_peer:flags.1?InputPeer ids:Vector<InputPeer> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | NOTHING |
| <mark>ids</mark> | [`Vector<InputPeer>`](type/InputPeer) | NOTHING |

---

## Result

[messages.SavedDialogs](type/messages.SavedDialogs)

---

## Example

```php
$messagesSavedDialogs = $client->messages->getSavedDialogsByID(
	parent_peer : $client->inputPeerEmpty(),
	ids : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -8075767149716665739,
		),
		$client->inputPeerUser(
			user_id : -1458481147326357070,
			access_hash : 8068462540357159642,
		),
		$client->inputPeerChannel(
			channel_id : 7554094527795804624,
			access_hash : -7022118404041291605,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 2,
			user_id : 2264942080909233913,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 92,
			channel_id : -4978767306487507703,
		),
	),
);
```