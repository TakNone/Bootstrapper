# messageActionPaidMessagesPrice

**Layer** : 216

```tl
messageActionPaidMessagesPrice#84b88578 flags:# broadcast_messages_allowed:flags.0?true stars:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **broadcast_messages_allowed** | [`flags.0?true`](type/true) | NOTHING |
| <mark>stars</mark> | [`long`](type/long) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaidMessagesPrice(
	broadcast_messages_allowed : true,
	stars : 5327216341941589893,
);
```