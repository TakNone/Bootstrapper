# inputWebFileGeoPointLocation

**Description** : *Used to download a server\-generated image with the map preview from a geoPoint, see the webfile docs for more info &raquo;*

**Layer** : 211

```tl
inputWebFileGeoPointLocation#9f2221c9 geo_point:InputGeoPoint access_hash:long w:int h:int zoom:int scale:int = InputWebFileLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | Generated from the lat, long and accuracy_radius parameters of the geoPoint |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash of the geoPoint |
| <mark>w</mark> | [`int`](type/int) | Map width in pixels before applying scale; 16-1024 |
| <mark>h</mark> | [`int`](type/int) | Map height in pixels before applying scale; 16-1024 |
| <mark>zoom</mark> | [`int`](type/int) | Map zoom level; 13-20 |
| <mark>scale</mark> | [`int`](type/int) | Map scale; 1-3 |

---

## Type

[InputWebFileLocation](type/InputWebFileLocation)

---

## Example

```php
$inputWebFileLocation = $client->inputWebFileGeoPointLocation(
	geo_point : $client->inputGeoPointEmpty(),
	access_hash : 170008351613044433,
	w : 47,
	h : 65,
	zoom : 92,
	scale : 81,
);
```