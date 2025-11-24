# messages.toggleTodoCompleted

**Description** : *Mark one or more items of a todo list &raquo; as completed or not completed*

**Layer** : 218

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 88,
	completed : array(65),
	incompleted : array(82),
);
```