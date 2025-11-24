# messageActionPaidMessagesRefunded

**Description** : *Sent from peer A to B, indicates that A refunded all stars B previously paid to send messages to A, see here &raquo; for more info on paid messages*

**Layer** : 218

```tl
messageActionPaidMessagesRefunded#ac1f1fcd count:int stars:long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of paid messages affected by the refund |
| <mark>stars</mark> | [`long`](type/long) | Number of refunded stars |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionPaidMessagesRefunded(
	count : 73,
	stars : 8376040178067499090,
);
```