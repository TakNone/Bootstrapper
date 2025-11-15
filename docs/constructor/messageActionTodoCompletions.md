# messageActionTodoCompletions

**Description** : *Items were marked as completed or not completed in a todo list &raquo;*

**Layer** : 216

```tl
messageActionTodoCompletions#cc7c5c89 completed:Vector<int> incompleted:Vector<int> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>completed</mark> | [`Vector<int>`](type/int) | Items marked as completed |
| <mark>incompleted</mark> | [`Vector<int>`](type/int) | Items marked as not completed |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionTodoCompletions(
	completed : array(61),
	incompleted : array(97),
);
```