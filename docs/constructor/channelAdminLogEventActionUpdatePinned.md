# channelAdminLogEventActionUpdatePinned

**Description** : *A message was pinned*

**Layer** : 216

```tl
channelAdminLogEventActionUpdatePinned#e9e82c18 message:Message = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The message that was pinned |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionUpdatePinned(
	message : $client->messageEmpty(
		id : 46,
		peer_id : $client->peerUser(
			user_id : -2567847848814554746,
		),
	),
);
```