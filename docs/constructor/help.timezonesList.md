# help.timezonesList

**Description** : *Timezone information that may be used elsewhere in the API, such as to set Telegram Business opening hours &raquo;*

**Layer** : 229

```tl
help.timezonesList#7b74ed71 timezones:Vector<Timezone> hash:int = help.TimezonesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>timezones</mark> | [`Vector<Timezone>`](type/Timezone) | Timezones |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |

---

## Type

[help.TimezonesList](type/help.TimezonesList)

---

## Example

```php
$helpTimezonesList = $client->help->timezonesList(
	timezones : array(
		$client->timezone(
			id : '4fUnjEc6m3MkKol5',
			name : 'FtmUpYz2JWl1nG5H',
			utc_offset : 63,
		),
	),
	hash : 0,
);
```