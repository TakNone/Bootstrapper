# todoCompletion

**Description** : *A completed todo list &raquo; item*

**Layer** : 216

```tl
todoCompletion#4cc120b7 id:int completed_by:long date:int = TodoCompletion;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | The ID of the completed item |
| <mark>completed_by</mark> | [`long`](type/long) | ID of the user that completed the item |
| <mark>date</mark> | [`int`](type/int) | When was the item completed |

---

## Type

[TodoCompletion](type/TodoCompletion)

---

## Example

```php
$todoCompletion = $client->todoCompletion(
	id : 16,
	completed_by : -7589803677623982560,
	date : 77,
);
```