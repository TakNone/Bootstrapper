# channelAdminLogEventActionEditMessage

**Description** : *A message was edited*

**Layer** : 214

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
		id : 67,
		peer_id : $client->peerUser(
			user_id : -245556646111210839,
		),
	),
	new_message : $client->messageEmpty(
		id : 60,
		peer_id : $client->peerUser(
			user_id : 7733449820211689850,
		),
	),
);
```