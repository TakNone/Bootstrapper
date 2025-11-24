# channelAdminLogEventActionDeleteTopic

**Description** : *A forum topic was deleted*

**Layer** : 218

```tl
channelAdminLogEventActionDeleteTopic#ae168909 topic:ForumTopic = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>topic</mark> | [`ForumTopic`](type/ForumTopic) | The forum topic that was deleted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionDeleteTopic(
	topic : $client->forumTopicDeleted(
		id : 80,
	),
);
```