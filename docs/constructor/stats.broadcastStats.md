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
		min_date : 74,
		max_date : 51,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 1309206.22265625,
		previous : 1902507.4365234375,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -1314760.0947265625,
		previous : -1346797.33984375,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -1265416.48828125,
		previous : -486534.48828125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 1564115.3642578125,
		previous : 552117.18359375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 658272.76171875,
		previous : -1636779.6826171875,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 1340472.6083984375,
		previous : -380137.2529296875,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : -1537474.8251953125,
		previous : 1420647.7275390625,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 427097.3349609375,
		total : -213861.09765625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'BiIfHaUQKcqge9p3',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'rhXc8Hw0fM41Y9pd',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'BxtbEHVz8LnYGPoA',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '9eRGHZ8jka6UDSxi',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'Spr7v1U9ofsFGRnP',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : '8ngiVfYMQrzk0CJK',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'exOVNY4Iqbj5r2za',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : '56jxGD8h9oUCXfzr',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'ZR6IVwWXmYQF7c8e',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : '78fUvCVXmJHlj4y2',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'CWRa9U5g8T6tjlcs',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'zWri7YT2eAG9ZBxt',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 59,
			views : 99,
			forwards : 56,
			reactions : 42,
		),
		$client->postInteractionCountersStory(
			story_id : 49,
			views : 8,
			forwards : 78,
			reactions : 10,
		),
	),
);
```