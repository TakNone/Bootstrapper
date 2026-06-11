# channelAdminLogEventActionEditMessage

**Description** : *A message was edited*

**Layer** : 227

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
		id : 80,
		peer_id : $client->peerUser(
			user_id : 7628110223780933522,
		),
	),
	new_message : $client->messageEmpty(
		id : 15,
		peer_id : $client->peerUser(
			user_id : -3481612735831485238,
		),
	),
);
```