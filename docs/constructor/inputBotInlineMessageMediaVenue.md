# inputBotInlineMessageMediaVenue

**Description** : *Venue*

**Layer** : 218

```tl
inputBotInlineMessageMediaVenue#417bbf11 flags:# geo_point:InputGeoPoint title:string address:string provider:string venue_id:string venue_type:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>geo_point</mark> | [`InputGeoPoint`](type/InputGeoPoint) | Geolocation |
| <mark>title</mark> | [`string`](type/string) | Venue name |
| <mark>address</mark> | [`string`](type/string) | Address |
| <mark>provider</mark> | [`string`](type/string) | Venue provider: currently only "foursquare" and "gplaces" (Google Places) need to be supported |
| <mark>venue_id</mark> | [`string`](type/string) | Venue ID in the provider's database |
| <mark>venue_type</mark> | [`string`](type/string) | Venue type in the provider's database |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaVenue(
	geo_point : $client->inputGeoPointEmpty(),
	title : 'N6uea3AEjv7HY1m8',
	address : '32xvEgT1CB9N8Kdu',
	provider : 'oMWFbD31hs5nmaqX',
	venue_id : 'r5m3Z4t7NXsFwDTq',
	venue_type : '3bNAU2DBdZF4ImCR',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```