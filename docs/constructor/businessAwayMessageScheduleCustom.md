# businessAwayMessageScheduleCustom

**Description** : *Send Telegram Business away messages to users writing to us in private in the specified time span*

**Layer** : 214

```tl
businessAwayMessageScheduleCustom#cc4d9ecc start_date:int end_date:int = BusinessAwayMessageSchedule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>start_date</mark> | [`int`](type/int) | Start date (UNIX timestamp) |
| <mark>end_date</mark> | [`int`](type/int) | End date (UNIX timestamp) |

---

## Type

[BusinessAwayMessageSchedule](type/BusinessAwayMessageSchedule)

---

## Example

```php
$businessAwayMessageSchedule = $client->businessAwayMessageScheduleCustom(
	start_date : 61,
	end_date : 95,
);
```