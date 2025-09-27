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
		min_date : 87,
		max_date : 11,
	),
	followers : $client->statsAbsValueAndPrev(
		current : 269148.9658203125,
		previous : 1069735.7451171875,
	),
	views_per_post : $client->statsAbsValueAndPrev(
		current : -1313463.6953125,
		previous : 1922135.115234375,
	),
	shares_per_post : $client->statsAbsValueAndPrev(
		current : 1761299.1591796875,
		previous : -1321605.6533203125,
	),
	reactions_per_post : $client->statsAbsValueAndPrev(
		current : -979312.9873046875,
		previous : -592465.0224609375,
	),
	views_per_story : $client->statsAbsValueAndPrev(
		current : -1577176.306640625,
		previous : 284039.7978515625,
	),
	shares_per_story : $client->statsAbsValueAndPrev(
		current : 293203.28515625,
		previous : 1895452.912109375,
	),
	reactions_per_story : $client->statsAbsValueAndPrev(
		current : -765290.7744140625,
		previous : -1797887.775390625,
	),
	enabled_notifications : $client->statsPercentValue(
		part : 313322.283203125,
		total : 1748586.369140625,
	),
	growth_graph : $client->statsGraphAsync(
		token : '9huK47qCTcIUpZSF',
	),
	followers_graph : $client->statsGraphAsync(
		token : 'vNdWoPlqMCRI08SA',
	),
	mute_graph : $client->statsGraphAsync(
		token : 'aK8Y0iqpLsoTANj5',
	),
	top_hours_graph : $client->statsGraphAsync(
		token : 'DpZQFfaslkU4JNjm',
	),
	interactions_graph : $client->statsGraphAsync(
		token : 'dw7BJPbvy1DqK56s',
	),
	iv_interactions_graph : $client->statsGraphAsync(
		token : 'jKaCQzZPA6Tnk14B',
	),
	views_by_source_graph : $client->statsGraphAsync(
		token : 'QaLwtNYF3UZCKBVS',
	),
	new_followers_by_source_graph : $client->statsGraphAsync(
		token : 'NWpreYg7u5FTchmB',
	),
	languages_graph : $client->statsGraphAsync(
		token : 'bcvNKMClqYysAtuI',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'vPfU9hEKIVx5TzBY',
	),
	story_interactions_graph : $client->statsGraphAsync(
		token : 'KkO1R27zvBgsE4tX',
	),
	story_reactions_by_emotion_graph : $client->statsGraphAsync(
		token : '95kvzfwyD1dUHMgT',
	),
	recent_posts_interactions : array(
		$client->postInteractionCountersMessage(
			msg_id : 84,
			views : 4,
			forwards : 13,
			reactions : 56,
		),
		$client->postInteractionCountersStory(
			story_id : 71,
			views : 78,
			forwards : 61,
			reactions : 71,
		),
	),
);
```