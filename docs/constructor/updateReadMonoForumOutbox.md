# updateReadMonoForumOutbox

**Description** : *Outgoing messages in a monoforum were read*

**Layer** : 216

```tl
updateReadMonoForumOutbox#a4a79376 channel_id:long saved_peer_id:Peer read_max_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | ID of the monoforum |
| <mark>saved_peer_id</mark> | [`Peer`](type/Peer) | Topic ID |
| <mark>read_max_id</mark> | [`int`](type/int) | Position up to which all outgoing messages are read |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadMonoForumOutbox(
	channel_id : 6522160103650965850,
	saved_peer_id : $client->peerUser(
		user_id : 5203151088697554769,
	),
	read_max_id : 70,
);
```