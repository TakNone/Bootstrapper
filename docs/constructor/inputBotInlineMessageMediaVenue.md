# inputBotInlineMessageMediaVenue

**Description** : *Venue*

**Layer** : 216

```tl
inputBotInlineMessageMediaVenue#417bbf11 flags:# geo_point:InputGeoPoint title:string address:string provider:string venue_id:string venue_type:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	title : 'Qkn9OB6gUPf7X5ye',
	address : 'ZrFWHBD15disMCLO',
	provider : '7Td5gQOFxVGYCeb1',
	venue_id : '3NC8KcaOhi6xWIvG',
	venue_type : 'TdUkEiGFHYb6ZCh0',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```