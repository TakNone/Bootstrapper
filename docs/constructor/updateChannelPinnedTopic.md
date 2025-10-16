# updateChannelPinnedTopic

**Description** : *A forum topic &raquo; was pinned or unpinned*

**Layer** : 216

```tl
updateChannelPinnedTopic#192efbe3 flags:# pinned:flags.0?true channel_id:long topic_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.0?true`](type/true) | Whether the topic was pinned or unpinned |
| <mark>channel_id</mark> | [`long`](type/long) | The forum ID |
| <mark>topic_id</mark> | [`int`](type/int) | The topic ID |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChannelPinnedTopic(
	pinned : true,
	channel_id : -5077121296194876276,
	topic_id : 53,
);
```