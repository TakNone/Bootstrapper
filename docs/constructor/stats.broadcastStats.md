# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 214

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
		min_date : 66,
		max_date : 42,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -1437949.9228515625,
		previous : -38072.2060546875,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -951501.591796875,
		previous : 157985.279296875,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : 1340664.23828125,
		previous : 1420123.373046875,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -859328.419921875,
		previous : 1876404.5400390625,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -604466.294921875,
		previous : 1552971.88671875,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 108628.5322265625,
		previous : 1914911.8173828125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 440846.59765625,
		previous : -934410.4658203125,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 56786.4375,
		total : -257219.2236328125,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'fDMHNkKJ6czV9IU5',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'KmvVnsY9g1AeuMOq',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'LNRe6kHhZASlywo0',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : '9s6SZukH4pb8hPw7',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'SR5Jeow39XDTFLOa',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : '1GC2qufL9weTlzyH',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'e7wJTKV9A0fR3LXl',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'JRw3lc2GIuSBEQdX',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'GyUrREpk6lCquTb3',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'GY7cl0FNwZQnEKB4',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'JAua24BoFh7Lsjtl',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : '2byZm8DV0xlLBdsQ',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 62,
			views : 87,
			forwards : 78,
			reactions : 17,
		),
		$client->postInteractionCountersStory(
			story_id : 67,
			views : 78,
			forwards : 29,
			reactions : 8,
		),
	),
);
```