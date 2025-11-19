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
		min_date : 40,
		max_date : 22,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -1303406.5224609375,
		previous : 1707263.0556640625,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : 1105542.4970703125,
		previous : 1375909.390625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -1662590.845703125,
		previous : -1135065.5703125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -701463.3427734375,
		previous : -1097588.7080078125,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -255603.3212890625,
		previous : 2034963.009765625,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 1751767.01171875,
		previous : -537492.6435546875,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 1324313.6201171875,
		previous : 1975812.775390625,
	),
	enabled_notifications : $client->statsPercentValue(
		part : -705073.490234375,
		total : 337351.009765625,
	),
	growth_graph : $client->statsGraphAsync(
		token : '5RHbZj8Nk1wfEazO',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'kfTy5JFCVYGpLRSo',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'axItJ7QWfSNVpc2T',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '69YVQPqEiSwtFNj1',
	),
	interactions_graph : $client->statsGraphAsync(
		token : '571XkeMrH09i6nJv',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'P0UuxHycZdjoI2ML',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : '7GpYmF1kCeXPchR6',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'r4DK3t60zGSehxmb',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'QG3FnR7MI62omBkA',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'xIhUcijwBbL2rJ4E',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'GZ3VgOLAkosnPU9M',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'bxRZhI1wqypft2gG',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 17,
			views : 27,
			forwards : 17,
			reactions : 20,
		),
		$client->postInteractionCountersStory(
			story_id : 67,
			views : 73,
			forwards : 51,
			reactions : 74,
		),
	),
);
```