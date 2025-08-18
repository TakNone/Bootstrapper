# updateReadMonoForumOutbox

**Layer** : 211

```tl
updateReadMonoForumOutbox#a4a79376 channel_id:long saved_peer_id:Peer read_max_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel_id</mark> | [`long`](type/long) | NOTHING |
| <mark>saved_peer_id</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>read_max_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadMonoForumOutbox(
	channel_id : -7201040410715755975,
	saved_peer_id : $client->peerUser(
		user_id : 2353051192145518485,
	),
	read_max_id : 50,
);
```