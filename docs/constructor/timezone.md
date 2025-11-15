# timezone

**Description** : *Timezone information*

**Layer** : 216

```tl
timezone#ff9289f5 id:string name:string utc_offset:int = Timezone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Unique timezone ID |
| <mark>name</mark> | [`string`](type/string) | Human-readable and localized timezone name |
| <mark>utc_offset</mark> | [`int`](type/int) | UTC offset in seconds, which may be displayed in hh:mm format by the client together with the human-readable name (i.e. $name UTC -01:00) |

---

## Type

[Timezone](type/Timezone)

---

## Example

```php
$timezone = $client->timezone(
	id : 'H0aqwBAOREZ8Qgo6',
	name : 'mB7qTSNiAU6xsGEL',
	utc_offset : 30,
);
```