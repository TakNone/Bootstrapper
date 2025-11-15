# messages.toggleTodoCompleted

**Description** : *Mark one or more items of a todo list &raquo; as completed or not completed*

**Layer** : 216

```tl
messages.toggleTodoCompleted#d3e03124 peer:InputPeer msg_id:int completed:Vector<int> incompleted:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the todo list was posted |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the message with the todo list |
| <mark>completed</mark> | [`Vector<int>`](type/int) | Items to mark as completed |
| <mark>incompleted</mark> | [`Vector<int>`](type/int) | Items to mark as not completed |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->toggleTodoCompleted(
	peer : $client->inputPeerEmpty(),
	msg_id : 57,
	completed : array(72),
	incompleted : array(74),
);
```