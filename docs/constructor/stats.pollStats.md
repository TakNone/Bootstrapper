# stats.pollStats

**Description** : *Statistics for a poll sent in a message*

**Layer** : 233

```tl
stats.pollStats#2999beed votes_graph:StatsGraph = stats.PollStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>votes_graph</mark> | [`StatsGraph`](type/StatsGraph) | A graph containing the number of votes cast in the poll over time |

---

## Type

[stats.PollStats](type/stats.PollStats)

---

## Example

```php
$statsPollStats = $client->stats->pollStats(
	votes_graph : $client->statsGraphAsync(
		token : '185ahA4tYJcPZ3s9',
	),
);
```