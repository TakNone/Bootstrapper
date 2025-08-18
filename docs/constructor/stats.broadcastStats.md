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
		min_date : 96,
		max_date : 67,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 888923.5439453125,
		previous : 1413964.8544921875,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -402763.044921875,
		previous : 167221.994140625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : 460908.8955078125,
		previous : -1292689.7490234375,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 300487.521484375,
		previous : 444526.1435546875,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -635423.6650390625,
		previous : -1383323.3037109375,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 1431428.80078125,
		previous : -1006710.2705078125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : -681849.458984375,
		previous : 1994157.005859375,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 1359069.0341796875,
		total : 838044.55078125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'TlQ9Xp0v7g3R4UyD',
	),
	followers_graph : $client->statsGraphAsync(
		token : 't3gLf8Wm4up17T6R',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'BxZY2WzmQq7u1fiG',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'L9T1Kpe0q8O5ma7G',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'Nxt45kg1pFT7czSU',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'TPd3csf8AL9w4gtO',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'NnlFGt2Bi6QIpgEO',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'I0bCzJkKhWfRXy1A',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'YGTtgqWSxypVkjI9',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'mWAEfuica8gseJU1',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'OuBh3fHK2lP8Mi1j',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'E8MzW7KiJgaPcQxl',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 4,
			views : 26,
			forwards : 25,
			reactions : 7,
		),
		$client->postInteractionCountersStory(
			story_id : 11,
			views : 68,
			forwards : 88,
			reactions : 94,
		),
	),
);
```