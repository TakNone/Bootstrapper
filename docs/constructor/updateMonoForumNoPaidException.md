# updateMonoForumNoPaidException

**Layer** : 214

```tl
updateMonoForumNoPaidException#9f812b08 flags:# exception:flags.0?true channel_id:long saved_peer_id:Peer = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **exception** | [`flags.0?true`](type/true) | NOTHING |
| <mark>channel_id</mark> | [`long`](type/long) | NOTHING |
| <mark>saved_peer_id</mark> | [`Peer`](type/Peer) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMonoForumNoPaidException(
	exception : true,
	channel_id : -426675684958170687,
	saved_peer_id : $client->peerUser(
		user_id : -732395449381143695,
	),
);
```