# businessWorkHours

**Description** : *Specifies a set of Telegram Business opening hours*

**Layer** : 214

```tl
businessWorkHours#8c92b098 flags:# open_now:flags.0?true timezone_id:string weekly_open:Vector<BusinessWeeklyOpen> = BusinessWorkHours;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **open_now** | [`flags.0?true`](type/true) | Ignored if set while invoking account.updateBusinessWorkHours, only returned by the server in userFull.business_work_hours, indicating whether the business is currently open according to the current time and the values in weekly_open and timezone |
| <mark>timezone_id</mark> | [`string`](type/string) | An ID of one of the timezones returned by help.getTimezonesList.    The timezone ID is contained timezone.id, a human-readable, localized name of the timezone is available in timezone.name and the timezone.utc_offset field contains the UTC offset in seconds, which may be displayed in hh:mm format by the client together with the human-readable name (i.e. $name UTC -01:00) |
| <mark>weekly_open</mark> | [`Vector<BusinessWeeklyOpen>`](type/BusinessWeeklyOpen) | A list of time intervals (max 28) represented by businessWeeklyOpen », indicating the opening hours of their business |

---

## Type

[BusinessWorkHours](type/BusinessWorkHours)

---

## Example

```php
$businessWorkHours = $client->businessWorkHours(
	open_now : true,
	timezone_id : '6WJomCnwlkq1UPNs',
	weekly_open : array(
		$client->businessWeeklyOpen(
			start_minute : 89,
			end_minute : 84,
		),
	),
);
```