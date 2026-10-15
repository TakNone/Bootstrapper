# messageEntityFormattedDate

**Description** : *Represents a specific point in time, rendered as specified here &raquo;*

**Layer** : 229

```tl
messageEntityFormattedDate#904ac7c7 flags:# relative:flags.0?true short_time:flags.1?true long_time:flags.2?true short_date:flags.3?true long_date:flags.4?true day_of_week:flags.5?true offset:int length:int date:int = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **relative** | [`flags.0?true`](type/true) | If set, render a relative date, see here » for more info. Cannot be combined with any of the other flags |
| **short_time** | [`flags.1?true`](type/true) | Renders the time in short format: hours and minutes, according to the user's locale settings; cannot be combined with long_time |
| **long_time** | [`flags.2?true`](type/true) | Renders the time in long format: hours, minutes, seconds and maybe timezone, according to the user's locale settings; cannot be combined with short_time |
| **short_date** | [`flags.3?true`](type/true) | Renders the time in short format: month, date, (and year, if different from the current one), all according the user's locale settings; cannot be combined with long_date |
| **long_date** | [`flags.4?true`](type/true) | Renders the time in long format: always month, date and year, all according the user's locale settings; cannot be combined with short_date |
| **day_of_week** | [`flags.5?true`](type/true) | Renders the day of the week according to the user's locale settings |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>date</mark> | [`int`](type/int) | The date as a UNIX timestamp: the allowed value ranges from 0 to the current date plus 1098 days (time()+1098*86400) |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityFormattedDate(
	relative : true,
	short_time : true,
	long_time : true,
	short_date : true,
	long_date : true,
	day_of_week : true,
	offset : 0,
	length : 72,
	date : 51,
);
```