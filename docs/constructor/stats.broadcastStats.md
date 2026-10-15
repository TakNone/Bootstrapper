# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 229

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
		min_date : 34,
		max_date : 85,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -1955015.474609375,
		previous : 800967.8017578125,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -378857.1962890625,
		previous : 1703279.0615234375,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : 2054938.58984375,
		previous : -1361335.2568359375,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 144734.712890625,
		previous : 939689.478515625,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -826394.5390625,
		previous : 819897.794921875,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : -2037261.94140625,
		previous : -302897.814453125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 397228.3857421875,
		previous : 724250.708984375,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 736186.291015625,
		total : -1215079.4765625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'EjOrV1XRm5nJfYKA',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'Kf6PipbqXMJzlO7T',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'Swg6E8jHuzs1pZBI',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'KQAJIX087dNtz5Fc',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'NS1XEFy79pl60T3x',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'ZkOQNocb59v8wGzM',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : '2gEBr7IPm6u4MsVZ',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'AhwjGZI716TOEvec',
	),
	languages_graph : $client->statsGraphAsync(
		token : '5S0ijzgLOAD8NyxE',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'h65pcZDk4CoKSPGq',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'GgvD6Uk4uI89Cc7L',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'jzvHr1Og4usC9LdK',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 9,
			views : 14,
			forwards : 33,
			reactions : 9,
		),
		$client->postInteractionCountersStory(
			story_id : 42,
			views : 84,
			forwards : 38,
			reactions : 59,
		),
	),
);
```