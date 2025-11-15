# stories.getStoriesViews

**Description** : *Obtain info about the view count, forward count, reactions and recent viewers of one or more stories*

**Layer** : 216

```tl
stories.getStoriesViews#28e16cc8 peer:InputPeer id:Vector<int> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer whose stories should be fetched |
| <mark>id</mark> | [`Vector<int>`](type/int) | Story IDs |

---

## Result

[stories.StoryViews](type/stories.StoryViews)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_EMPTY** | `400` | You specified no story IDs |

---

## Example

```php
$storiesStoryViews = $client->stories->getStoriesViews(
	peer : $client->inputPeerEmpty(),
	id : array(81),
);
```