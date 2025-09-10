# messageActionTodoCompletions

**Layer** : 214

```tl
messageActionTodoCompletions#cc7c5c89 completed:Vector<int> incompleted:Vector<int> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>completed</mark> | [`Vector<int>`](type/int) | NOTHING |
| <mark>incompleted</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionTodoCompletions(
	completed : array(57),
	incompleted : array(61),
);
```