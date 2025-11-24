# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 218

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
		min_date : 77,
		max_date : 10,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 2080593.669921875,
		previous : -2003970.423828125,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : 2066807.5341796875,
		previous : -2073130.2353515625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -608601.732421875,
		previous : 796703.80859375,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 1143790.98046875,
		previous : 1710896.611328125,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -1912564.6357421875,
		previous : 1619560.7431640625,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : -537069.583984375,
		previous : -1758266.6923828125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 1103517.4677734375,
		previous : 2055898.7060546875,
	),
	enabled_notifications : $client->statsPercentValue(
		part : -1151434.9638671875,
		total : -766852.5537109375,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'mkqvURX7bzanIVjy',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'CcY0vqloBWjOz7dK',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'TfpIU0ym8QliD6eC',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'I8p57siAwLWmqxKh',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'fvJ5ZpBOdGPIbAty',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'f3Lstup98EDkxSb0',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'G56ZoFhxBq4i0pLK',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'Rgs6GbKSfQdte5Ar',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'sDbPpLx62NzMWAgK',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'ulODXUxbfKWQhdBv',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'wmF7CYGNAKTcMkp5',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'Lr6q8XvjRm3pxdH5',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 55,
			views : 25,
			forwards : 77,
			reactions : 45,
		),
		$client->postInteractionCountersStory(
			story_id : 48,
			views : 46,
			forwards : 12,
			reactions : 64,
		),
	),
);
```