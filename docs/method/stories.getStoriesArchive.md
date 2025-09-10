# stories.getStoriesArchive

**Description** : *Fetch the story archive &raquo; of a peer we control*

**Layer** : 214

```tl
stories.getStoriesArchive#b4352016 peer:InputPeer offset_id:int limit:int = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer whose archived stories should be fetched |
| <mark>offset_id</mark> | [`int`](type/int) | Offsets for pagination, for more info click here |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.Stories](type/stories.Stories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storiesStories = $client->stories->getStoriesArchive(
	peer : $client->inputPeerEmpty(),
	offset_id : 0,
	limit : 28,
);
```