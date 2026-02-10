# updateDraftMessage

**Description** : *Notifies a change of a message draft*

**Layer** : 222

```tl
updateDraftMessage#edfc111e flags:# peer:Peer top_msg_id:flags.0?int saved_peer_id:flags.1?Peer draft:DraftMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer to which the draft is associated |
| **top_msg_id** | [`flags.0?int`](type/int) | ID of the forum topic to which the draft is associated |
| **saved_peer_id** | [`flags.1?Peer`](type/Peer) | If set, the draft is related to the specified monoforum topic ID » |
| <mark>draft</mark> | [`DraftMessage`](type/DraftMessage) | The draft |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDraftMessage(
	peer : $client->peerUser(
		user_id : 1517266922625615829,
	),
	top_msg_id : 64,
	saved_peer_id : $client->peerUser(
		user_id : 4458634482715120923,
	),
	draft : $client->draftMessageEmpty(
		date : 71,
	),
);
```