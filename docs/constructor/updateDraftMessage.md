# updateDraftMessage

**Description** : *Notifies a change of a message draft*

**Layer** : 216

```tl
updateDraftMessage#edfc111e flags:# peer:Peer top_msg_id:flags.0?int saved_peer_id:flags.1?Peer draft:DraftMessage = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : 2909766871770497362,
	),
	top_msg_id : 97,
	saved_peer_id : $client->peerUser(
		user_id : 1211727042889701724,
	),
	draft : $client->draftMessageEmpty(
		date : 5,
	),
);
```