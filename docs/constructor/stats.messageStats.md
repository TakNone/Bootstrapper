# stats.messageStats

**Description** : *Message statistics*

**Layer** : 211

```tl
stats.messageStats#7fe91c14 views_graph:StatsGraph reactions_by_emotion_graph:StatsGraph = stats.MessageStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views_graph</mark> | [`StatsGraph`](type/StatsGraph) | Message view graph |
| <mark>reactions_by_emotion_graph</mark> | [`StatsGraph`](type/StatsGraph) | A graph containing the number of reactions on stories categorized by emotion |

---

## Type

[stats.MessageStats](type/stats.MessageStats)

---

## Example

```php
$statsMessageStats = $client->stats->messageStats(
	views_graph : $client->statsGraphAsync(
		token : 'rB6WL7lyFTuf4CMG',
	),
	reactions_by_emotion_graph : $client->statsGraphAsync(
		token : 'kiLoYbXnutgOx51C',
	),
);
```