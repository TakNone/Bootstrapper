# messages.affectedFoundMessages

**Description** : *Messages found and affected by changes*

**Layer** : 211

```tl
messages.affectedFoundMessages#ef8d3e6c pts:int pts_count:int offset:int messages:Vector<int> = messages.AffectedFoundMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>pts</mark> | [`int`](type/int) | Event count after generation |
| <mark>pts_count</mark> | [`int`](type/int) | Number of events that were generated |
| <mark>offset</mark> | [`int`](type/int) | If bigger than zero, the request must be repeated to remove more messages |
| <mark>messages</mark> | [`Vector<int>`](type/int) | Affected message IDs |

---

## Type

[messages.AffectedFoundMessages](type/messages.AffectedFoundMessages)

---

## Example

```php
$messagesAffectedFoundMessages = $client->messages->affectedFoundMessages(
	pts : 64,
	pts_count : 44,
	offset : 32,
	messages : array(58),
);
```