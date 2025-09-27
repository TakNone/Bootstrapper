# messages.toggleTodoCompleted

**Layer** : 216

```tl
messages.toggleTodoCompleted#d3e03124 peer:InputPeer msg_id:int completed:Vector<int> incompleted:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>completed</mark> | [`Vector<int>`](type/int) | NOTHING |
| <mark>incompleted</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->toggleTodoCompleted(
	peer : $client->inputPeerEmpty(),
	msg_id : 22,
	completed : array(83),
	incompleted : array(41),
);
```