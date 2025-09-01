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
			chat_id : -8167376690426379756,
		),
		$client->inputPeerUser(
			user_id : -1407784622299393100,
			access_hash : 7094204032800568336,
		),
		$client->inputPeerChannel(
			channel_id : -8921541700546375525,
			access_hash : -2854499623396642043,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 70,
			user_id : -2498954116742588486,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 2,
			channel_id : 4306876840739709088,
		),
	),
);
```