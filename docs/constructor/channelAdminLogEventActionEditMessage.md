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
		id : 83,
		peer_id : $client->peerUser(
			user_id : 2426918490164649080,
		),
	),
	new_message : $client->messageEmpty(
		id : 8,
		peer_id : $client->peerUser(
			user_id : 8977118659412541689,
		),
	),
);
```