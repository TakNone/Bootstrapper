# messages.toggleTodoCompleted

**Layer** : 214

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
	msg_id : 66,
	completed : array(86),
	incompleted : array(67),
);
```