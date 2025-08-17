# todoCompletion

**Layer** : 211

```tl
todoCompletion#4cc120b7 id:int completed_by:long date:int = TodoCompletion;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| <mark>completed_by</mark> | [`long`](type/long) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | NOTHING |

---

## Type

[TodoCompletion](type/TodoCompletion)

---

## Example

```php
$todoCompletion = $client->todoCompletion(
	id : 84,
	completed_by : -4765579735720090031,
	date : 36,
);
```