# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 227

```tl
stats.broadcastStats#396ca5fc period:StatsDateRangeDays followers:StatsAbsValueAndPrev views_per_post:StatsAbsValueAndPrev shares_per_post:StatsAbsValueAndPrev reactions_per_post:StatsAbsValueAndPrev views_per_story:StatsAbsValueAndPrev shares_per_story:StatsAbsValueAndPrev reactions_per_story:StatsAbsValueAndPrev enabled_notifications:StatsPercentValue growth_graph:StatsGraph followers_graph:StatsGraph mute_graph:StatsGraph top_hours_graph:StatsGraph interactions_graph:StatsGraph iv_interactions_graph:StatsGraph views_by_source_graph:StatsGraph new_followers_by_source_graph:StatsGraph languages_graph:StatsGraph reactions_by_emotion_graph:StatsGraph story_interactions_graph:StatsGraph story_reactions_by_emotion_graph:StatsGraph recent_posts_interactions:Vector<PostInteractionCounters> = stats.BroadcastStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>period</mark> | [`StatsDateRangeDays`](type/StatsDateRangeDays) | Period in consideration |
| <mark>followers</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | Follower count change for period in consideration |
| <mark>views_per_post</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | total_viewcount/postcount, for posts posted during the period in consideration. Note that in this case, current refers to the period in consideration (min_date till max_date), and prev refers to the previous period ((min_date - (max_date - min_date)) till min_date) |
| <mark>shares_per_post</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | total_sharecount/postcount, for posts posted during the period in consideration. Note that in this case, current refers to the period in consideration (min_date till max_date), and prev refers to the previous period ((min_date - (max_date - min_date)) till min_date) |
| <mark>reactions_per_post</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | total_reactions/postcount, for posts posted during the period in consideration. Note that in this case, current refers to the period in consideration (min_date till max_date), and prev refers to the previous period ((min_date - (max_date - min_date)) till min_date) |
| <mark>views_per_story</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | total_views/storycount, for posts posted during the period in consideration. Note that in this case, current refers to the period in consideration (min_date till max_date), and prev refers to the previous period ((min_date - (max_date - min_date)) till min_date) |
| <mark>shares_per_story</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | total_shares/storycount, for posts posted during the period in consideration. Note that in this case, current refers to the period in consideration (min_date till max_date), and prev refers to the previous period ((min_date - (max_date - min_date)) till min_date) |
| <mark>reactions_per_story</mark> | [`StatsAbsValueAndPrev`](type/StatsAbsValueAndPrev) | total_reactions/storycount, for posts posted during the period in consideration. Note that in this case, current refers to the period in consideration (min_date till max_date), and prev refers to the previous period ((min_date - (max_date - min_date)) till min_date) |
| <mark>enabled_notifications</mark> | [`StatsPercentValue`](type/StatsPercentValue) | Percentage of subscribers with enabled notifications |
| <mark>growth_graph</mark> | [`StatsGraph`](type/StatsGraph) | Channel growth graph (absolute subscriber count) |
| <mark>followers_graph</mark> | [`StatsGraph`](type/StatsGraph) | Followers growth graph (relative subscriber count) |
| <mark>mute_graph</mark> | [`StatsGraph`](type/StatsGraph) | Muted users graph (relative) |
| <mark>top_hours_graph</mark> | [`StatsGraph`](type/StatsGraph) | Views per hour graph (absolute) |
| <mark>interactions_graph</mark> | [`StatsGraph`](type/StatsGraph) | Interactions graph (absolute) |
| <mark>iv_interactions_graph</mark> | [`StatsGraph`](type/StatsGraph) | IV interactions graph (absolute) |
| <mark>views_by_source_graph</mark> | [`StatsGraph`](type/StatsGraph) | Views by source graph (absolute) |
| <mark>new_followers_by_source_graph</mark> | [`StatsGraph`](type/StatsGraph) | New followers by source graph (absolute) |
| <mark>languages_graph</mark> | [`StatsGraph`](type/StatsGraph) | Subscriber language graph (pie chart) |
| <mark>reactions_by_emotion_graph</mark> | [`StatsGraph`](type/StatsGraph) | A graph containing the number of reactions on posts categorized by emotion |
| <mark>story_interactions_graph</mark> | [`StatsGraph`](type/StatsGraph) | A graph containing the number of story views and shares |
| <mark>story_reactions_by_emotion_graph</mark> | [`StatsGraph`](type/StatsGraph) | A graph containing the number of reactions on stories categorized by emotion |
| <mark>recent_posts_interactions</mark> | [`Vector<PostInteractionCounters>`](type/PostInteractionCounters) | Detailed statistics about number of views and shares of recently sent messages and stories |

---

## Type

[stats.BroadcastStats](type/stats.BroadcastStats)

---

## Example

```php
$statsBroadcastStats = $client->stats->broadcastStats(
	period : $client->statsDateRangeDays(
		min_date : 33,
		max_date : 94,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 2038197.443359375,
		previous : 668404.17578125,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : 653372.716796875,
		previous : 2023857.1494140625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -2025006.45703125,
		previous : -388335.51953125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -672944.2939453125,
		previous : 723992.55859375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 161995.4638671875,
		previous : 49714.3642578125,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : -413467.29296875,
		previous : -1947452.1396484375,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 1431951.3095703125,
		previous : -253756.888671875,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 1609831.99609375,
		total : 1447087.3212890625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'oFeu6QwMC1yUhgDt',
	),
	followers_graph : $client->statsGraphAsync(
		token : '7pUuHe4Gvg9IbXTB',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'BlgJFiOLv8Gu64Tc',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'd9R5LFVqo3m8s0TN',
	),
	interactions_graph : $client->statsGraphAsync(
		token : '4ZfkqFaY23VzOKtE',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'PMUzNqefpBubk2hn',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'wpo6KdQlGvZ9fXNa',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'EvkftKRu6NQWX9Fz',
	),
	languages_graph : $client->statsGraphAsync(
		token : '2TNBAZtSLY1bRj35',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'CuJKSk6FXyOzc0q1',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'x6WE4Zn7Mqj5DIyr',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 's1YGBCNDzM68UEu3',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 47,
			views : 45,
			forwards : 42,
			reactions : 27,
		),
		$client->postInteractionCountersStory(
			story_id : 4,
			views : 67,
			forwards : 88,
			reactions : 92,
		),
	),
);
```