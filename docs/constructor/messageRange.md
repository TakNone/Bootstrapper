# messageRange

**Description** : *Indicates a range of chat messages*

**Layer** : 216

```tl
messageRange#ae30253 min_id:int max_id:int = MessageRange;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>min_id</mark> | [`int`](type/int) | Start of range (message ID) |
| <mark>max_id</mark> | [`int`](type/int) | End of range (message ID) |

---

## Type

[MessageRange](type/MessageRange)

---

## Example

```php
$messageRange = $client->messageRange(
	min_id : 62,
	max_id : 40,
);
```