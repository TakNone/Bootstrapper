# messages.getSavedDialogsByID

**Layer** : 214

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
			chat_id : 8684804468741548432,
		),
		$client->inputPeerUser(
			user_id : -5653803307967694904,
			access_hash : 5890436042208647974,
		),
		$client->inputPeerChannel(
			channel_id : -5169527488453365786,
			access_hash : 6543694137587995607,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 54,
			user_id : -4125957499607308516,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 17,
			channel_id : 3823950908961291580,
		),
	),
);
```