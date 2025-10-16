# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 216

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
		min_date : 0,
		max_date : 53,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -1206659.087890625,
		previous : 498488.8681640625,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : 1267884.65234375,
		previous : 1688805.2548828125,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -1780049.33984375,
		previous : 539297.8642578125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 1441917.2294921875,
		previous : 143513.642578125,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 657393.20703125,
		previous : -1618580.5751953125,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 98373.3662109375,
		previous : 1407464.205078125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : -1982200.8330078125,
		previous : 1314375.251953125,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 908642.2021484375,
		total : -80497.8291015625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'wKWUJyb05XEFHYp6',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'v70gyIQXxuBrA5Hk',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'CQJrsLgbYItqlmKN',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'UmLw67Pp9EWsclZF',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'Q90syt3EniA6bTRC',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'CRUoKwXWFP50uelH',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'SADrGlXPWeCULhnE',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : '9kxnXO7Svsu2dtoB',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'ZgmU5p741cQkVdlW',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'sdp30vGyXhucYafr',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'F9k2sZKPLfq8yHMD',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'nKQsAjdvYIOwGBh7',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 10,
			views : 31,
			forwards : 36,
			reactions : 84,
		),
		$client->postInteractionCountersStory(
			story_id : 4,
			views : 77,
			forwards : 80,
			reactions : 9,
		),
	),
);
```