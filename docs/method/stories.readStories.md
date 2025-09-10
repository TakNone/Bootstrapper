# stories.readStories

**Description** : *Mark all stories up to a certain ID as read, for a given peer; will emit an updateReadStories update to all logged\-in sessions*

**Layer** : 214

```tl
stories.readStories#a556dac8 peer:InputPeer max_id:int = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer whose stories should be marked as read |
| <mark>max_id</mark> | [`int`](type/int) | Mark all stories up to and including this ID as read |

---

## Result

[Vector<int>](type/int)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MAX_ID_INVALID** | `400` | The provided max ID is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORIES_NEVER_CREATED** | `400` | This peer hasn't ever posted any stories |

---

## Example

```php
$int = $client->stories->readStories(
	peer : $client->inputPeerEmpty(),
	max_id : 14,
);
```