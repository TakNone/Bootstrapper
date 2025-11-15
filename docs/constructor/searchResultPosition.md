# searchResultPosition

**Description** : *Information about a message in a specific position*

**Layer** : 216

```tl
searchResultPosition#7f648b67 msg_id:int date:int offset:int = SearchResultsPosition;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>date</mark> | [`int`](type/int) | When was the message sent |
| <mark>offset</mark> | [`int`](type/int) | 0-based message position in the full list of suitable messages |

---

## Type

[SearchResultsPosition](type/SearchResultsPosition)

---

## Example

```php
$searchResultsPosition = $client->searchResultPosition(
	msg_id : 77,
	date : 59,
	offset : 0,
);
```