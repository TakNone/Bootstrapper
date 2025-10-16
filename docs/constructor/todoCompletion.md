# todoCompletion

**Layer** : 216

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
	id : 2,
	completed_by : -5720034991689995956,
	date : 74,
);
```