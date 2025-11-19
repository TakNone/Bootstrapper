# nearestDc

**Description** : *Nearest data center, according to geo\-ip*

**Layer** : 218

```tl
nearestDc#8e1a1775 country:string this_dc:int nearest_dc:int = NearestDc;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>country</mark> | [`string`](type/string) | Country code determined by geo-ip |
| <mark>this_dc</mark> | [`int`](type/int) | Number of current data center |
| <mark>nearest_dc</mark> | [`int`](type/int) | Number of nearest data center |

---

## Type

[NearestDc](type/NearestDc)

---

## Example

```php
$nearestDc = $client->nearestDc(
	country : 'P84lnpwy5tWqkcNC',
	this_dc : 84,
	nearest_dc : 69,
);
```