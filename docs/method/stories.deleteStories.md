# stories.deleteStories

**Description** : *Deletes some posted stories*

**Layer** : 218

```tl
stories.deleteStories#ae59db5f peer:InputPeer id:Vector<int> = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel/user from where to delete stories |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of stories to delete |

---

## Result

[Vector<int>](type/int)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_ACCESS_FORBIDDEN** | `403` | The specified method can be used over a business connection for some operations, but the specified query attempted an operation that is not allowed over a business connection |
| **BUSINESS_CONNECTION_INVALID** | `400` | The connection_id passed to the wrapping invokeWithBusinessConnection call is invalid |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |

---

## Example

```php
$int = $client->stories->deleteStories(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : array(58),
);
```