# updatePinnedForumTopic

**Description** : *A forum topic &raquo; was pinned or unpinned*

**Layer** : 233

```tl
updatePinnedForumTopic#683b2c52 flags:# pinned:flags.0?true peer:Peer topic_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether the topic was pinned or unpinned |
| <mark>peer</mark> | [`Peer`](type/Peer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| <mark>topic_id</mark> | [`int`](type/int) | The topic ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedForumTopic(
	pinned : true,
	peer : $client->peerUser(
		user_id : -2120722926668113368,
	),
	topic_id : 64,
);
```