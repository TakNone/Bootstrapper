# updatePinnedChannelMessages

**Description** : *Messages were pinned/unpinned in a channel/supergroup*

**Layer** : 216

```tl
updatePinnedChannelMessages#5bb98608 flags:# pinned:flags.0?true channel_id:long messages:Vector<int> pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether the messages were pinned or unpinned |
| <mark>channel_id</mark> | [`long`](type/long) | Channel ID |
| <mark>messages</mark> | [`Vector<int>`](type/int) | Messages |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePinnedChannelMessages(
	pinned : true,
	channel_id : -3011539211560506835,
	messages : array(54),
	pts : 79,
	pts_count : 24,
);
```