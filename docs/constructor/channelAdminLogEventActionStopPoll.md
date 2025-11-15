# channelAdminLogEventActionStopPoll

**Description** : *A poll was stopped*

**Layer** : 218

```tl
channelAdminLogEventActionStopPoll#8f079643 message:Message = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The poll that was stopped |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionStopPoll(
	message : $client->messageEmpty(
		id : 80,
		peer_id : $client->peerUser(
			user_id : 3975323429016581113,
		),
	),
);
```