# channelAdminLogEventActionSendMessage

**Description** : *A message was posted in a channel*

**Layer** : 222

```tl
channelAdminLogEventActionSendMessage#278f2868 message:Message = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The message that was sent |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionSendMessage(
	message : $client->messageEmpty(
		id : 39,
		peer_id : $client->peerUser(
			user_id : 783446503478048921,
		),
	),
);
```