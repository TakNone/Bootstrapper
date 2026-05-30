# stats.broadcastStats

**Description** : *Channel statistics*

**Layer** : 225

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
		min_date : 67,
		max_date : 65,
	),
	followers : $client->statsAbsValueAndPrev(
		current : -351789.7275390625,
		previous : 236069.4033203125,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -1836390.8984375,
		previous : -328636.4248046875,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : -247832.0634765625,
		previous : 171782.158203125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : 660217.599609375,
		previous : -234490.7314453125,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : 912684.876953125,
		previous : -1111273.947265625,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : -84122.6279296875,
		previous : -1788532.2509765625,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : 1116794.3515625,
		previous : 1699230.8544921875,
	),
	enabled_notifications : $client->statsPercentValue(
		part : -808779.3427734375,
		total : 1399410.921875,
	),
	growth_graph : $client->statsGraphAsync(
		token : 'Mm65aghLkuGyUQV8',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'EFmNWSzafRGBxXwI',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'AQZ074wMTq86RiKY',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'OjwmPz1el2ucnVL4',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'Vs8jdUalvJWC1bQF',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : '4xAIbTjLWECfFPkJ',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'wjLhZGirgOoqT6Nf',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'nD54HO0qEg2FS7hj',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'JDbopxBr3VHK6GCe',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'pXtNhGZD2rmUwnWQ',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'ZVFPkhTm8WA4evR3',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'Uo7PXWipHfj1J5sM',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 54,
			views : 23,
			forwards : 96,
			reactions : 3,
		),
		$client->postInteractionCountersStory(
			story_id : 92,
			views : 55,
			forwards : 29,
			reactions : 96,
		),
	),
);
```