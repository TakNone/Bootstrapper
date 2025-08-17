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
			chat_id : 6154665734745221789,
		),
		$client->inputPeerUser(
			user_id : -7743085139450146869,
			access_hash : -210090734530830014,
		),
		$client->inputPeerChannel(
			channel_id : -8464612771742644415,
			access_hash : 1882153428660313718,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 94,
			user_id : -5296143450676562050,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 26,
			channel_id : 3220560750651841428,
		),
	),
);
```