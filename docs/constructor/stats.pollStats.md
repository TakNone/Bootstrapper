# stats.pollStats

**Layer** : 227

```tl
stats.pollStats#2999beed votes_graph:StatsGraph = stats.PollStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>votes_graph</mark> | [`StatsGraph`](type/StatsGraph) | NOTHING |

---

## Type

[stats.PollStats](type/stats.PollStats)

---

## Example

```php
$statsPollStats = $client->stats->pollStats(
	votes_graph : $client->statsGraphAsync(
		token : 'T0jALX6qDSrZvka3',
	),
);
```