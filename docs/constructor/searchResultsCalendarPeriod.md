# searchResultsCalendarPeriod

**Description** : *Information about found messages sent on a specific day, used to split the messages in messages\.searchResultsCalendar constructors by days*

**Layer** : 216

```tl
searchResultsCalendarPeriod#c9b0539f date:int min_msg_id:int max_msg_id:int count:int = SearchResultsCalendarPeriod;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | The day this object is referring to |
| <mark>min_msg_id</mark> | [`int`](type/int) | First message ID that was sent on this day |
| <mark>max_msg_id</mark> | [`int`](type/int) | Last message ID that was sent on this day |
| <mark>count</mark> | [`int`](type/int) | All messages that were sent on this day |

---

## Type

[SearchResultsCalendarPeriod](type/SearchResultsCalendarPeriod)

---

## Example

```php
$searchResultsCalendarPeriod = $client->searchResultsCalendarPeriod(
	date : 11,
	min_msg_id : 85,
	max_msg_id : 59,
	count : 53,
);
```