# channelAdminLogEventActionEditMessage

**Description** : *A message was edited*

**Layer** : 222

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
		id : 34,
		peer_id : $client->peerUser(
			user_id : 970841430879505682,
		),
	),
	new_message : $client->messageEmpty(
		id : 5,
		peer_id : $client->peerUser(
			user_id : -50120859952848401,
		),
	),
);
```