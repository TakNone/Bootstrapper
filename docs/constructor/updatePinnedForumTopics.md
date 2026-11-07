# updatePinnedForumTopics

**Description** : *The pinned topics of a forum have changed*

**Layer** : 233

```tl
updatePinnedForumTopics#def143d0 flags:# peer:Peer order:flags.0?Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| **order** | [`flags.0?Vector<int>`](type/int) | Ordered list containing the IDs of all pinned topics |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedForumTopics(
	peer : $client->peerUser(
		user_id : -939729057627704702,
	),
	order : array(79),
);
```