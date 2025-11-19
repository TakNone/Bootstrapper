# updatePinnedForumTopic

**Layer** : 218

```tl
updatePinnedForumTopic#683b2c52 flags:# pinned:flags.0?true peer:Peer topic_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>topic_id</mark> | [`int`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedForumTopic(
	pinned : true,
	peer : $client->peerUser(
		user_id : -5500096698616655299,
	),
	topic_id : 65,
);
```