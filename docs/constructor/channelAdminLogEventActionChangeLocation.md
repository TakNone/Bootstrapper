# channelAdminLogEventActionChangeLocation

**Description** : *The geogroup location was changed*

**Layer** : 211

```tl
channelAdminLogEventActionChangeLocation#e6b76ae prev_value:ChannelLocation new_value:ChannelLocation = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_value</mark> | [`ChannelLocation`](type/ChannelLocation) | Previous location |
| <mark>new_value</mark> | [`ChannelLocation`](type/ChannelLocation) | New location |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionChangeLocation(
	prev_value : $client->channelLocationEmpty(),
	new_value : $client->channelLocationEmpty(),
);
```