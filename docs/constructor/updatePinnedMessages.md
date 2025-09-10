# updatePinnedMessages

**Description** : *Some messages were pinned in a chat*

**Layer** : 214

```tl
updatePinnedMessages#ed85eab5 flags:# pinned:flags.0?true peer:Peer messages:Vector<int> pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether the messages were pinned or unpinned |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |
| <mark>messages</mark> | [`Vector<int>`](type/int) | Message IDs |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedMessages(
	pinned : true,
	peer : $client->peerUser(
		user_id : -8051319641026987773,
	),
	messages : array(72),
	pts : 47,
	pts_count : 0,
);
```