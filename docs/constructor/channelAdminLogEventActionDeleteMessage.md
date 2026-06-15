# channelAdminLogEventActionDeleteMessage

**Description** : *A message was deleted*

**Layer** : 227

```tl
channelAdminLogEventActionDeleteMessage#42e047bb message:Message = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The message that was deleted |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionDeleteMessage(
	message : $client->messageEmpty(
		id : 35,
		peer_id : $client->peerUser(
			user_id : -526795312290417716,
		),
	),
);
```