# channelAdminLogEventActionSendMessage

**Description** : *A message was posted in a channel*

**Layer** : 218

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
		id : 38,
		peer_id : $client->peerUser(
			user_id : 8287559225636662321,
		),
	),
);
```