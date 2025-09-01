# stories.getStoryViewsList

**Description** : *Obtain the list of users that have viewed a specific story we posted*

**Layer** : 214

```tl
stories.getStoryViewsList#7ed23c57 flags:# just_contacts:flags.0?true reactions_first:flags.2?true forwards_first:flags.3?true peer:InputPeer q:flags.1?string id:int offset:string limit:int = stories.StoryViewsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **just_contacts** | [`flags.0?true`](type/true) | Whether to only fetch view reaction/views made by our contacts |
| **reactions_first** | [`flags.2?true`](type/true) | Whether to return storyView info about users that reacted to the story (i.e. if set, the server will first sort results by view date as usual, and then also additionally sort the list by putting storyViews with an associated reaction first in the list). Ignored if forwards_first is set |
| **forwards_first** | [`flags.3?true`](type/true) | If set, returns forwards and reposts first, then reactions, then other views; otherwise returns interactions sorted just by interaction date |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was posted |
| **q** | [`flags.1?string`](type/string) | Search for specific peers |
| <mark>id</mark> | [`int`](type/int) | Story ID |
| <mark>offset</mark> | [`string`](type/string) | Offset for pagination, obtained from stories.storyViewsList.next_offset |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[stories.StoryViewsList](type/stories.StoryViewsList)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_ID_INVALID** | `400` | The specified story ID is invalid |

---

## Example

```php
$storiesStoryViewsList = $client->stories->getStoryViewsList(
	just_contacts : true,
	reactions_first : true,
	forwards_first : true,
	peer : $client->inputPeerEmpty(),
	q : 'ouMck5VJNSxqA6DW',
	id : 51,
	offset : 'HX5NDe7xrwOd9PTs',
	limit : 41,
);
```