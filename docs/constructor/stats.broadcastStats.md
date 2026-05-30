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
		min_date : 9,
		max_date : 8,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 130934.0830078125,
		previous : -1883603.8681640625,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -774648.693359375,
		previous : 2061713.7900390625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : 1632118.8291015625,
		previous : -264395.5009765625,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -1469955.224609375,
		previous : 345532.5458984375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -1032776.3486328125,
		previous : 1756208.01953125,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : -1335641.5517578125,
		previous : 1657887.341796875,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 1303271.5146484375,
		previous : 464707.712890625,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 1724594.0341796875,
		total : 697758.693359375,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'njgeXK7MCaV4rpbL',
	),
	followers_graph : $client->statsGraphAsync(
		token : '1uY7qmOcjsTB2MW5',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'eqSVzfl3Xid52khr',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '4zS5QhKj6mu9nJyx',
	),
	interactions_graph : $client->statsGraphAsync(
		token : '4VRzCpHEmFrYsZny',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'jLdnhavrolAcI4zN',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'Hl6owh5mMgXtIiZk',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'ZjDkrSFuIyTJCP3q',
	),
	languages_graph : $client->statsGraphAsync(
		token : '3BdTJIGy908LKx2u',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : '1BvMQ9x67Y8kDmij',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : '7GErJlC4T6hKBtzb',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : '1D5h0FdKjQMOHeio',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 35,
			views : 65,
			forwards : 32,
			reactions : 4,
		),
		$client->postInteractionCountersStory(
			story_id : 70,
			views : 75,
			forwards : 23,
			reactions : 19,
		),
	),
);
```