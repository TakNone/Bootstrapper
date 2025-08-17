# account.updateBusinessWorkHours

**Description** : *Specify a set of Telegram Business opening hours.
This info will be contained in userFull.business_work_hours*

**Layer** : 211

```tl
account.updateBusinessWorkHours#4b00e066 flags:# business_work_hours:flags.0?BusinessWorkHours = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **business_work_hours** | [`flags.0?BusinessWorkHours`](type/BusinessWorkHours) | Opening hours (optional, if not set removes all opening hours) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BUSINESS_WORK_HOURS_EMPTY** | `400` | No work hours were specified |
| **BUSINESS_WORK_HOURS_PERIOD_INVALID** | `400` | The specified work hours are invalid, see here » for the exact requirements |
| **TIMEZONE_INVALID** | `400` | The specified timezone does not exist |

---

## Example

```php
$bool = $client->account->updateBusinessWorkHours(
	business_work_hours : $client->businessWorkHours(
		open_now : true,
		timezone_id : 'ackMq5BserT8RZwb',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 68,
				end_minute : 50,
			),
		),
	),
);
```