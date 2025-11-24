# timezone

**Description** : *Timezone information*

**Layer** : 218

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
	id : 'na3I7vN1EdKf6Ytz',
	name : 'VsOEcNb0wviJTxAX',
	utc_offset : 1,
);
```