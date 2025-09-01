# storyView

**Description** : *Story view date and reaction information*

**Layer** : 214

```tl
storyView#b0bdeac5 flags:# blocked:flags.0?true blocked_my_stories_from:flags.1?true user_id:long date:int reaction:flags.2?Reaction = StoryView;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **blocked** | [`flags.0?true`](type/true) | Whether we have completely blocked this user, including from viewing more of our stories |
| **blocked_my_stories_from** | [`flags.1?true`](type/true) | Whether we have blocked this user from viewing more of our stories |
| <mark>user_id</mark> | [`long`](type/long) | The user that viewed the story |
| <mark>date</mark> | [`int`](type/int) | When did the user view the story |
| **reaction** | [`flags.2?Reaction`](type/Reaction) | If present, contains the reaction that the user left on the story |

---

## Type

[StoryView](type/StoryView)

---

## Example

```php
$storyView = $client->storyView(
	blocked : true,
	blocked_my_stories_from : true,
	user_id : 9028655945732614934,
	date : 9,
	reaction : $client->reactionEmpty(),
);
```