# channelAdminLogEventActionStopPoll

**Description** : *A poll was stopped*

**Layer** : 222

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
		id : 6,
		peer_id : $client->peerUser(
			user_id : -5950881072455419045,
		),
	),
);
```