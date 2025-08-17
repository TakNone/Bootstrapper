# messageMediaGeo

**Description** : *Attached map*

**Layer** : 211

```tl
messageMediaGeo#56e0d474 geo:GeoPoint = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | GeoPoint |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaGeo(
	geo : $client->geoPointEmpty(),
);
```