# updateReadMonoForumInbox

**Layer** : 211

```tl
updateReadMonoForumInbox#77b0e372 channel_id:long saved_peer_id:Peer read_max_id:int = Update;
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
$update = $client->updateReadMonoForumInbox(
	channel_id : -5215164592692807853,
	saved_peer_id : $client->peerUser(
		user_id : 6872153030000328817,
	),
	read_max_id : 69,
);
```