# messages.getSavedDialogsByID

**Description** : *Obtain information about specific saved message dialogs &raquo; or monoforum topics &raquo;*

**Layer** : 216

```tl
messages.getSavedDialogsByID#6f6f9c96 flags:# parent_peer:flags.1?InputPeer ids:Vector<InputPeer> = messages.SavedDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **parent_peer** | [`flags.1?InputPeer`](type/InputPeer) | If set, fetches monoforum topics », otherwise fetches saved message dialogs » |
| <mark>ids</mark> | [`Vector<InputPeer>`](type/InputPeer) | IDs of dialogs (topics) to fetch |

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
			chat_id : 2308855405748871677,
		),
		$client->inputPeerUser(
			user_id : -6784099381691020250,
			access_hash : 8936811600059777008,
		),
		$client->inputPeerChannel(
			channel_id : 3615433798097967062,
			access_hash : 2663011622416132707,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 12,
			user_id : 5560098649197310022,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 80,
			channel_id : -2086807823912646523,
		),
	),
);
```