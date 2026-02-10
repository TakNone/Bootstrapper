# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 222

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
		min_date : 51,
		max_date : 27,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 182431.974609375,
		previous : 823622.5146484375,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -873539.3271484375,
		previous : -1563873.8876953125,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -1702013.5087890625,
		previous : 1372787.857421875,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -819749.6025390625,
		previous : 1596639.802734375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 285346.66015625,
		previous : -946362.9052734375,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 99003.5390625,
		previous : -1902731.4248046875,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : -1139811.7451171875,
		previous : -746298.4892578125,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 2022831.1318359375,
		total : 654382.8251953125,
	),
	growth_graph : $client->statsGraphAsync(
		token : '9sxmOin6q0w14NFy',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'VtbKGNdIFgvw0WeX',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'zYwtxrGfs47DHy01',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'Vx3cQYXgu2CRS4a6',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'tYyQnuNgpBDV28R0',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : '7bcJiBE4ADGPUWy6',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'SHu2YUDIBw0f5XFg',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'cMOQrAgb4qWT3pxw',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'jIg08Ol6NtYuWhCm',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'iXQKvmIPpF9EtcVH',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'ZeQMOwtR02bISE8J',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'fcQA58CgkxzFv6X9',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 0,
			views : 77,
			forwards : 30,
			reactions : 47,
		),
		$client->postInteractionCountersStory(
			story_id : 25,
			views : 82,
			forwards : 17,
			reactions : 79,
		),
	),
);
```