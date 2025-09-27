# stats.getStoryPublicForwards

**Description** : *Obtain forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 216

```tl
stats.getStoryPublicForwards#a6437ef6 peer:InputPeer id:int offset:string limit:int = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was originally posted |
| <mark>id</mark> | [`int`](type/int) | Story ID |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, from stats.PublicForwards.next_offset |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stats.PublicForwards](type/stats.PublicForwards)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$statsPublicForwards = $client->stats->getStoryPublicForwards(
	peer : $client->inputPeerEmpty(),
	id : 73,
	offset : 'rMGRCoH0YVAsfk2j',
	limit : 78,
);
```