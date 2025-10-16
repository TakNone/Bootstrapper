# messageActionPaidMessagesPrice

**Description** : *The price of paid messages &raquo; in this chat was changed*

**Layer** : 216

```tl
messageActionPaidMessagesPrice#84b88578 flags:# broadcast_messages_allowed:flags.0?true stars:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **broadcast_messages_allowed** | [`flags.0?true`](type/true) | Can only be set for channels, if set indicates that direct messages were enabled », otherwise indicates that direct messages were disabled; the price of paid messages is related to the price of direct messages (aka those sent to the associated monoforum) |
| <mark>stars</mark> | [`long`](type/long) | The new price in Telegram Stars, can be 0 if messages are now free |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaidMessagesPrice(
	broadcast_messages_allowed : true,
	stars : -4938278779443405524,
);
```