# messageActionPaidMessagesRefunded

**Description** : *Sent from peer A to B, indicates that A refunded all stars B previously paid to send messages to A, see here &raquo; for more info on paid messages*

**Layer** : 216

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
	count : 77,
	stars : -8222572434921999281,
);
```