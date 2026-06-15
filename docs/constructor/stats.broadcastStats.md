# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 227

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
		min_date : 98,
		max_date : 6,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 1600802.158203125,
		previous : 1243913.515625,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -1199110.1572265625,
		previous : -1665833.0302734375,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -1068769.81640625,
		previous : 1455360.7626953125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 1629845.46484375,
		previous : -1406727.318359375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 439433.0283203125,
		previous : 775856.544921875,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 1463817.03515625,
		previous : 1322429.064453125,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 216703.4501953125,
		previous : 1016473.4697265625,
	),
	enabled_notifications : $client->statsPercentValue(
		part : -1702611.40234375,
		total : -412678.5498046875,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'sDVaoz1KgBmShUYr',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'NXOAgyKJ9ZrwiUs0',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'Pu1FN3cQokZKWrq4',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'nH9Pu3am6O4K25D0',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'CZf7VdS0Q18mgrWp',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'ya8PewK9DTZHShNE',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'm0jiW1RwNxKDcvE5',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'ZlXWk1iszSMbp6rm',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'EgQVmbAGljredC3N',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'ILH2cNKgoSzmYxnd',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'hEuOFPcrQ8SmTUzJ',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'fVpWdH0okUIJKGca',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 88,
			views : 50,
			forwards : 66,
			reactions : 90,
		),
		$client->postInteractionCountersStory(
			story_id : 47,
			views : 77,
			forwards : 6,
			reactions : 89,
		),
	),
);
```