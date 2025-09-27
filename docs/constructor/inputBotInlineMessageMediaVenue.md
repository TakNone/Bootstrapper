# inputBotInlineMessageMediaVenue

**Description** : *Venue*

**Layer** : 214

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
	title : 'gWmvItGwCfsndL6u',
	address : 'r4yHnUzc3XKDq51x',
	provider : 'ejqp3EIsA0ktmzC1',
	venue_id : 'M0wNc4GL9FBb7ACn',
	venue_type : 'aszZxRMOBmEeYbHU',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```