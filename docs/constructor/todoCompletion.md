# todoCompletion

**Description** : *A completed todo list &raquo; item*

**Layer** : 218

```tl
todoCompletion#221bb5e4 id:int completed_by:Peer date:int = TodoCompletion;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | The ID of the completed item |
| <mark>completed_by</mark> | [`Peer`](type/Peer) | ID of the user that completed the item |
| <mark>date</mark> | [`int`](type/int) | When was the item completed |

---

## Type

[TodoCompletion](type/TodoCompletion)

---

## Example

```php
$todoCompletion = $client->todoCompletion(
	id : 32,
	completed_by : $client->peerUser(
		user_id : 2090700157032440620,
	),
	date : 7,
);
```