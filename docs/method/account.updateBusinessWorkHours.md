# account.updateBusinessWorkHours

**Description** : *Specify a set of Telegram Business opening hours\.
This info will be contained in userFull\.business\_work\_hours*

**Layer** : 218

```tl
account.updateBusinessWorkHours#4b00e066 flags:# business_work_hours:flags.0?BusinessWorkHours = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		timezone_id : 'WBlum2r9IVfMSjHL',
		weekly_open : array(
			$client->businessWeeklyOpen(
				start_minute : 4,
				end_minute : 96,
			),
		),
	),
);
```