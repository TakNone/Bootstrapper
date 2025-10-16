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
		min_date : 59,
		max_date : 78,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -150488.30078125,
		previous : -1569715.9638671875,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : 1530319.3916015625,
		previous : -605994.37890625,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : 1151346.0986328125,
		previous : 887380.521484375,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 1231981.794921875,
		previous : -565055.2509765625,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -1842953.90625,
		previous : -737437.099609375,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 664880.759765625,
		previous : 976334.84375,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 384207.78125,
		previous : 1625784.2578125,
	),
	enabled_notifications : $client->statsPercentValue(
		part : -820334.41796875,
		total : -434329.9765625,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'BrjaHA3fP2TVldtK',
	),
	followers_graph : $client->statsGraphAsync(
		token : '16PrEv7oxle8Np95',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'icdq1WVygh9bPNvk',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'LuyXFSTUfYmbBx7s',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'KmftvO26ehRkVsBL',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'JFq5VGYiSUpD0EHs',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'HX042mrJ9nxsZ1OY',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : '96dLWT2ZKf1wz7kA',
	),
	languages_graph : $client->statsGraphAsync(
		token : '3OUild50kIYSLj8F',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'UjXcSay1TWxCgIZG',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'df0IBemlsWJUO8QC',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'd173VsHKTlRwfCjQ',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 47,
			views : 18,
			forwards : 45,
			reactions : 29,
		),
		$client->postInteractionCountersStory(
			story_id : 98,
			views : 88,
			forwards : 67,
			reactions : 38,
		),
	),
);
```