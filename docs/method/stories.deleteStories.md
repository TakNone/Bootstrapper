# stories.deleteStories

**Description** : *Deletes some posted stories*

**Layer** : 211

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
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |

---

## Example

```php
$int = $client->stories->deleteStories(
	peer : $client->inputPeerEmpty(),
	id : array(64),
);
```