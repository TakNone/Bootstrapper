# updatePinnedForumTopic

**Layer** : 216

```tl
updatePinnedForumTopic#683b2c52 flags:# pinned:flags.0?int peer:Peer topic_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.0?int`](type/int) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>topic_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedForumTopic(
	pinned : 47,
	peer : $client->peerUser(
		user_id : 6380187280042170598,
	),
	topic_id : 32,
);
```