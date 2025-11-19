# updatePinnedForumTopics

**Layer** : 218

```tl
updatePinnedForumTopics#def143d0 flags:# peer:Peer order:flags.0?Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| **order** | [`flags.0?Vector<int>`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedForumTopics(
	peer : $client->peerUser(
		user_id : 5526437773734681727,
	),
	order : array(63),
);
```