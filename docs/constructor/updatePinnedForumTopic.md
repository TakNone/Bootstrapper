# updatePinnedForumTopic

**Layer** : 225

```tl
updatePinnedForumTopic#683b2c52 flags:# pinned:flags.0?true peer:Peer topic_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
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
		user_id : 1594509504994413509,
	),
	topic_id : 18,
);
```