# stories.getStoryReactionsList

**Description** : *Get the reaction and interaction list of a story posted to a channel, along with the sender of each reaction*

**Layer** : 211

```tl
stories.getStoryReactionsList#b9b2881f flags:# forwards_first:flags.2?true peer:InputPeer id:int reaction:flags.0?Reaction offset:flags.1?string limit:int = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **forwards_first** | [`flags.2?true`](type/true) | If set, returns forwards and reposts first, then reactions, then other views; otherwise returns interactions sorted just by interaction date |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel |
| <mark>id</mark> | [`int`](type/int) | Story ID |
| **reaction** | [`flags.0?Reaction`](type/Reaction) | Get only reactions of this type |
| **offset** | [`flags.1?string`](type/string) | Offset for pagination (taken from the next_offset field of the returned stories.StoryReactionsList); empty in the first request |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.StoryReactionsList](type/stories.StoryReactionsList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$storiesStoryReactionsList = $client->stories->getStoryReactionsList(
	forwards_first : true,
	peer : $client->inputPeerEmpty(),
	id : 2,
	reaction : $client->reactionEmpty(),
	offset : '2IKRYuEyT8LFMXcs',
	limit : 53,
);
```