# updatePinnedForumTopics

**Layer** : 222

```tl
updatePinnedForumTopics#def143d0 flags:# peer:Peer order:flags.0?Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
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
		user_id : -4294188544236635581,
	),
	order : array(71),
);
```