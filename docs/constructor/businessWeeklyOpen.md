# businessWeeklyOpen

**Description** : *A time interval, indicating the opening hours of a business*

**Layer** : 214

```tl
businessWeeklyOpen#120b1ab9 start_minute:int end_minute:int = BusinessWeeklyOpen;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>start_minute</mark> | [`int`](type/int) | Start minute in minutes of the week, 0 to 7*24*60 inclusively |
| <mark>end_minute</mark> | [`int`](type/int) | End minute in minutes of the week, 1 to 8*24*60 inclusively (8 and not 7 because this allows to specify intervals that, for example, start on Sunday 21:00 and end on Monday 04:00 (6*24*60+21*60 to 7*24*60+4*60) without passing an invalid end_minute < start_minute). See here » for more info |

---

## Type

[BusinessWeeklyOpen](type/BusinessWeeklyOpen)

---

## Example

```php
$businessWeeklyOpen = $client->businessWeeklyOpen(
	start_minute : 10,
	end_minute : 45,
);
```