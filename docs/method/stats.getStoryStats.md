# stats.getStoryStats

**Description** : *Get statistics for a certain story*

**Layer** : 211

```tl
stats.getStoryStats#374fef40 flags:# dark:flags.0?true peer:InputPeer id:int = stats.StoryStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether to enable the dark theme for graph colors |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer that posted the story |
| <mark>id</mark> | [`int`](type/int) | Story ID |

---

## Result

[stats.StoryStats](type/stats.StoryStats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORIES_NEVER_CREATED** | `400` | This peer hasn't ever posted any stories |

---

## Example

```php
$statsStoryStats = $client->stats->getStoryStats(
	dark : true,
	peer : $client->inputPeerEmpty(),
	id : 23,
);
```