# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 233

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
		min_date : 36,
		max_date : 23,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -20398.50390625,
		previous : 326541.19140625,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : 1796600.9697265625,
		previous : -1942422.76171875,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -422377.7587890625,
		previous : 1050724.0478515625,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 1725120.4765625,
		previous : 1705440.962890625,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 878712.5205078125,
		previous : 1204454.810546875,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 452414.52734375,
		previous : -1708542.0908203125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 1536592.2763671875,
		previous : 470936.2158203125,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 1710459.9716796875,
		total : 1167103.078125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'sSQ2VTya4w1jBbAz',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'DSnWXKMdp20rAlwU',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'fdkDNZElBwQI0onc',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'WOR9epaInSJB3ji2',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'NucrndsEeo9qJFVC',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'zfUebKTuLlnCa3Sm',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : '1n3XudxcjeKBHsVo',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'odBwnzeAfF1l4u60',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'NGaAU6RkbvfjFpYD',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'qzEX9mlBrIivptT7',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'aeVxXr3fYJGMvOd4',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'MoUbuYlOtcSeL5im',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 73,
			views : 31,
			forwards : 92,
			reactions : 85,
		),
		$client->postInteractionCountersStory(
			story_id : 91,
			views : 49,
			forwards : 35,
			reactions : 23,
		),
	),
);
```