# storyViews

**Description** : *Aggregated view and reaction information of a story*

**Layer** : 218

```tl
storyViews#8d595cd6 flags:# has_viewers:flags.1?true views_count:int forwards_count:flags.2?int reactions:flags.3?Vector<ReactionCount> reactions_count:flags.4?int recent_viewers:flags.0?Vector<long> = StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_viewers** | [`flags.1?true`](type/true) | If set, indicates that the viewers list is currently viewable, and was not yet deleted because the story has expired while the user didn't have a Premium account |
| <mark>views_count</mark> | [`int`](type/int) | View counter of the story |
| **forwards_count** | [`flags.2?int`](type/int) | Forward counter of the story |
| **reactions** | [`flags.3?Vector<ReactionCount>`](type/ReactionCount) | All reactions sent to this story |
| **reactions_count** | [`flags.4?int`](type/int) | Number of reactions added to the story |
| **recent_viewers** | [`flags.0?Vector<long>`](type/long) | User IDs of some recent viewers of the story |

---

## Type

[StoryViews](type/StoryViews)

---

## Example

```php
$storyViews = $client->storyViews(
	has_viewers : true,
	views_count : 52,
	forwards_count : 85,
	reactions : array(
		$client->reactionCount(
			chosen_order : 51,
			reaction : $client->reactionEmpty(),
			count : 45,
		),
	),
	reactions_count : 93,
	recent_viewers : array(-4585230206692710695),
);
```