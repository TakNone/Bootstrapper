# channelAdminLogEventActionCreateTopic

**Description** : *A forum topic was created*

**Layer** : 218

```tl
channelAdminLogEventActionCreateTopic#58707d28 topic:ForumTopic = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>topic</mark> | [`ForumTopic`](type/ForumTopic) | The forum topic that was created |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionCreateTopic(
	topic : $client->forumTopicDeleted(
		id : 32,
	),
);
```