# botInlineMessageMediaGeo

**Description** : *Send a geolocation*

**Layer** : 218

```tl
botInlineMessageMediaGeo#51846fd flags:# geo:GeoPoint heading:flags.0?int period:flags.1?int proximity_notification_radius:flags.3?int reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Geolocation |
| **heading** | [`flags.0?int`](type/int) | For live locations, a direction in which the location moves, in degrees; 1-360 |
| **period** | [`flags.1?int`](type/int) | Validity period |
| **proximity_notification_radius** | [`flags.3?int`](type/int) | For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000) |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaGeo(
	geo : $client->geoPointEmpty(),
	heading : 21,
	period : 22,
	proximity_notification_radius : 8,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```