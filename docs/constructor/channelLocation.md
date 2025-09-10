# channelLocation

**Description** : *Geographical location of supergroup \(geogroups\)*

**Layer** : 214

```tl
channelLocation#209b82db geo_point:GeoPoint address:string = ChannelLocation;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>geo_point</mark> | [`GeoPoint`](type/GeoPoint) | Geographical location of supergroup |
| <mark>address</mark> | [`string`](type/string) | Textual description of the address |

---

## Type

[ChannelLocation](type/ChannelLocation)

---

## Example

```php
$channelLocation = $client->channelLocation(
	geo_point : $client->geoPointEmpty(),
	address : 'ZUAQWBVbe5ClqtmG',
);
```