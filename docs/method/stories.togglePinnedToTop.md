# stories.togglePinnedToTop

**Description** : *Pin some stories to the top of the profile, see here &raquo; for more info*

**Layer** : 214

```tl
stories.togglePinnedToTop#b297e9b peer:InputPeer id:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where to pin stories |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of the stories to pin (max stories_pinned_to_top_count_max) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |

---

## Example

```php
$bool = $client->stories->togglePinnedToTop(
	peer : $client->inputPeerEmpty(),
	id : array(8),
);
```