# stories.getStoriesByID

**Description** : *Obtain full info about a set of stories by their IDs*

**Layer** : 218

```tl
stories.getStoriesByID#5774ca74 peer:InputPeer id:Vector<int> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the stories were posted |
| <mark>id</mark> | [`Vector<int>`](type/int) | Story IDs |

---

## Result

[stories.Stories](type/stories.Stories)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORIES_NEVER_CREATED** | `400` | This peer hasn't ever posted any stories |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |

---

## Example

```php
$storiesStories = $client->stories->getStoriesByID(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : array(77),
);
```