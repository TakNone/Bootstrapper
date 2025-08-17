# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 211

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
		min_date : 13,
		max_date : 84,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 572518.697265625,
		previous : 632240.1865234375,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -671108.1455078125,
		previous : -437747.9931640625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -1344170.62890625,
		previous : 1257602.740234375,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -281728.599609375,
		previous : 2023863.9990234375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 1277343.9609375,
		previous : 1488792.349609375,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 1728443.2138671875,
		previous : 336486.2060546875,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : -2015797.46875,
		previous : -2088414.064453125,
	),
	enabled_notifications : $client->statsPercentValue(
		part : -46903.3525390625,
		total : -127991.8876953125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'HCq5cEb2WmVkjDfY',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'ZnbjrzGTK8AJS23v',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'B8Q5VPIKA2LZ3Fob',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'aTx95UcuEADhopIK',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'flyxrPjYZisauAMS',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'SLsQu9recW2dK86H',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'vlac3jHZdEN1Boub',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'zjQCBi4euYgV81fH',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'DSHnZ9P2fajorXmi',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : '27VsapBQKgSlI1GH',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'WtB4O15qiyZVXPLx',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'go3mIYz7UdJxlH9v',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 67,
			views : 53,
			forwards : 46,
			reactions : 76,
		),
		$client->postInteractionCountersStory(
			story_id : 2,
			views : 84,
			forwards : 81,
			reactions : 59,
		),
	),
);
```