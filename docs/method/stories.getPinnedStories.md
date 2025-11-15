# stories.getPinnedStories

**Description** : *Fetch the stories pinned on a peer&#039;s profile*

**Layer** : 218

```tl
stories.getPinnedStories#5821a5dc peer:InputPeer offset_id:int limit:int = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer whose pinned stories should be fetched |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.Stories](type/stories.Stories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$storiesStories = $client->stories->getPinnedStories(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	offset_id : 0,
	limit : 25,
);
```