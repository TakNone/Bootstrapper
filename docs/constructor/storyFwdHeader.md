# storyFwdHeader

**Description** : *Contains info about the original poster of a reposted story*

**Layer** : 214

```tl
storyFwdHeader#b826e150 flags:# modified:flags.3?true from:flags.0?Peer from_name:flags.1?string story_id:flags.2?int = StoryFwdHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **modified** | [`flags.3?true`](type/true) | Whether the story media was modified before reposting it (for example by overlaying a round video with a reaction) |
| **from** | [`flags.0?Peer`](type/Peer) | Peer that originally posted the story; will be empty for stories forwarded from a user with forwards privacy enabled, in which case from_name will be set, instead |
| **from_name** | [`flags.1?string`](type/string) | Will be set for stories forwarded from a user with forwards privacy enabled, in which case from will also be empty |
| **story_id** | [`flags.2?int`](type/int) | , contains the story ID |

---

## Type

[StoryFwdHeader](type/StoryFwdHeader)

---

## Example

```php
$storyFwdHeader = $client->storyFwdHeader(
	modified : true,
	from : $client->peerUser(
		user_id : 3951721784047843902,
	),
	from_name : 'zfOXles5M9o6qBIQ',
	story_id : 82,
);
```