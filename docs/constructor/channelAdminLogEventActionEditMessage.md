# channelAdminLogEventActionEditMessage

**Description** : *A message was edited*

**Layer** : 218

```tl
channelAdminLogEventActionEditMessage#709b2405 prev_message:Message new_message:Message = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_message</mark> | [`Message`](type/Message) | Old message |
| <mark>new_message</mark> | [`Message`](type/Message) | New message |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionEditMessage(
	prev_message : $client->messageEmpty(
		id : 72,
		peer_id : $client->peerUser(
			user_id : 31667924688982164,
		),
	),
	new_message : $client->messageEmpty(
		id : 2,
		peer_id : $client->peerUser(
			user_id : 2848986185169474908,
		),
	),
);
```