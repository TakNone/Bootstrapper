# inputBotInlineMessageMediaVenue

**Description** : *Venue*

**Layer** : 222

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
	title : 'i0PAtv468Wl7HgxY',
	address : 'YaoC1ZpPxmuW5rNs',
	provider : 'K8b9StLTmHYxuEP2',
	venue_id : 'EGCakdBxfc1b4eYj',
	venue_type : 'lNLkgu0156SBX4K9',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```