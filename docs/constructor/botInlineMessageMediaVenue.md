# botInlineMessageMediaVenue

**Description** : *Send a venue*

**Layer** : 218

```tl
botInlineMessageMediaVenue#8a86659c flags:# geo:GeoPoint title:string address:string provider:string venue_id:string venue_type:string reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>geo</mark> | [`GeoPoint`](type/GeoPoint) | Geolocation of venue |
| <mark>title</mark> | [`string`](type/string) | Venue name |
| <mark>address</mark> | [`string`](type/string) | Address |
| <mark>provider</mark> | [`string`](type/string) | Venue provider: currently only "foursquare" and "gplaces" (Google Places) need to be supported |
| <mark>venue_id</mark> | [`string`](type/string) | Venue ID in the provider's database |
| <mark>venue_type</mark> | [`string`](type/string) | Venue type in the provider's database |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaVenue(
	geo : $client->geoPointEmpty(),
	title : 'Q6sKdm3gEFf0LtTC',
	address : '4pYEMRFcaHdCsrO9',
	provider : 'PQz1OgsHD4WqMRJm',
	venue_id : 'AQLxDFsrBIq1nchC',
	venue_type : 'pumWGYRoMg8Dzwj6',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```