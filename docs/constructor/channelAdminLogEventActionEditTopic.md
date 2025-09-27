# channelAdminLogEventActionEditTopic

**Description** : *A forum topic was edited*

**Layer** : 214

```tl
channelAdminLogEventActionEditTopic#f06fe208 prev_topic:ForumTopic new_topic:ForumTopic = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_topic</mark> | [`ForumTopic`](type/ForumTopic) | Previous topic information |
| <mark>new_topic</mark> | [`ForumTopic`](type/ForumTopic) | New topic information |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionEditTopic(
	prev_topic : $client->forumTopicDeleted(
		id : 70,
	),
	new_topic : $client->forumTopicDeleted(
		id : 26,
	),
);
```