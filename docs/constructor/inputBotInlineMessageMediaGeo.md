# inputBotInlineMessageMediaGeo

**Description** : *Geolocation*

**Layer** : 216

```tl
inputBotInlineMessageMediaGeo#96929a85 flags:# geo_point:InputGeoPoint heading:flags.0?int period:flags.1?int proximity_notification_radius:flags.3?int reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | Geolocation |
| **heading** | [`flags.0?int`](type/int) | For live locations, a direction in which the location moves, in degrees; 1-360 |
| **period** | [`flags.1?int`](type/int) | Validity period |
| **proximity_notification_radius** | [`flags.3?int`](type/int) | For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000) |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Reply markup for bot/inline keyboards |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaGeo(
	geo_point : $client->inputGeoPointEmpty(),
	heading : 77,
	period : 6,
	proximity_notification_radius : 5,
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```