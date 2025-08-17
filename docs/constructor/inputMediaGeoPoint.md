# inputMediaGeoPoint

**Description** : *Map*

**Layer** : 211

```tl
inputMediaGeoPoint#f9c44144 geo_point:InputGeoPoint = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | GeoPoint |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaGeoPoint(
	geo_point : $client->inputGeoPointEmpty(),
);
```