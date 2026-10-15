# messages.searchResultsPositions

**Description** : *Information about sparse positions of messages*

**Layer** : 229

```tl
messages.searchResultsPositions#53b22baf count:int positions:Vector<SearchResultsPosition> = messages.SearchResultsPositions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of found messages |
| <mark>positions</mark> | [`Vector<SearchResultsPosition>`](type/SearchResultsPosition) | List of message positions |

---

## Type

[messages.SearchResultsPositions](type/messages.SearchResultsPositions)

---

## Example

```php
$messagesSearchResultsPositions = $client->messages->searchResultsPositions(
	count : 31,
	positions : array(
		$client->searchResultPosition(
			msg_id : 68,
			date : 44,
			offset : 0,
		),
	),
);
```