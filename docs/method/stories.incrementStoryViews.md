# stories.incrementStoryViews

**Description** : *Increment the view counter of one or more stories*

**Layer** : 211

```tl
stories.incrementStoryViews#b2028afb peer:InputPeer id:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the stories were posted |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of the stories (maximum 200 at a time) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |

---

## Example

```php
$bool = $client->stories->incrementStoryViews(
	peer : $client->inputPeerEmpty(),
	id : array(68),
);
```