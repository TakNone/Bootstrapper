# channelAdminLogEventActionPinTopic

**Description** : *A forum topic was pinned or unpinned*

**Layer** : 218

```tl
channelAdminLogEventActionPinTopic#5d8d353b flags:# prev_topic:flags.0?ForumTopic new_topic:flags.1?ForumTopic = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **prev_topic** | [`flags.0?ForumTopic`](type/ForumTopic) | Previous topic information |
| **new_topic** | [`flags.1?ForumTopic`](type/ForumTopic) | New topic information |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionPinTopic(
	prev_topic : $client->forumTopicDeleted(
		id : 93,
	),
	new_topic : $client->forumTopicDeleted(
		id : 18,
	),
);
```