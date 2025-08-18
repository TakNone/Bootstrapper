# channelAdminLogEventActionEditMessage

**Description** : *A message was edited*

**Layer** : 211

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
		id : 93,
		peer_id : $client->peerUser(
			user_id : 4571597423928061612,
		),
	),
	new_message : $client->messageEmpty(
		id : 77,
		peer_id : $client->peerUser(
			user_id : -6024942241174157458,
		),
	),
);
```